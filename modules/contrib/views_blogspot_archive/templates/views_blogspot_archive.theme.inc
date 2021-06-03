<?php

/**
 * @file
 * Preprocessors and helper functions to make theming easier.
 */

use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Drupal\datetime\Plugin\Field\FieldType\DateTimeItem;
use Drupal\datetime\Plugin\Field\FieldType\DateTimeItemInterface;

/**
 * Prepares variables for view templates.
 *
 * Default template: views_blogspot_archive-view-archive.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - view: A ViewExecutable object.
 *   - rows: The raw row data.
 *   - options: An array of options. Each option contains:
 *     - separator: A string to be placed between inline fields to keep them
 *       visually distinct.
 */
function template_preprocess_views_blogspot_archive_view_archive(array &$variables) {
  $view = $variables['view'];
  $style = $view->style_plugin->options;
  $rows = $variables['rows'];
  $data = array();

  foreach ($rows as $row) {
    /** @var \Drupal\Core\Entity\Entity $entity */
    $entity = $row->_entity;
    if ($entity instanceof FieldableEntityInterface && $entity->hasField($style['vba_field_name'])) {
      $data_value = $entity->get($style['vba_field_name'])->getValue();
      // Consider Only the first item in the field.
      $date = $data_value[0]['value'];
      try {
        if (!is_numeric($date)) {
          $dateField = $entity->get($style['vba_field_name']);
          $datetimeType = $dateField->getFieldDefinition()->getSetting('datetime_type');
          $storageFormat = $datetimeType === DateTimeItem::DATETIME_TYPE_DATE ? DateTimeItemInterface::DATE_STORAGE_FORMAT : DateTimeItemInterface::DATETIME_STORAGE_FORMAT;
          $date_obj = DrupalDateTime::createFromFormat($storageFormat, $date);
        }
        else {
          // Timestamp.
          $date_obj = DrupalDateTime::createFromTimestamp($date);
        }
        $data[$date_obj->format('Y')][$date_obj->format('m') . '::' . $date_obj->format('F')][$entity->id()] = $entity;
      }
      catch (Exception $exception) {
        // @todo Handle this.
      }
    }
  }
  // Now add count to year and months.
  $data = views_blogspot_archive_add_count($data);

  // Get the context of year-to-expand and month-to-expand.
  $year_to_expand = $month_to_expand = NULL;
  // Check for entity view or detail page.
  if ($entities = \Drupal::routeMatch()->getParameters()) {
    foreach ($entities as $entity) {
      if (is_object($entity) && $entity instanceof FieldableEntityInterface && $entity->hasField($style['vba_field_name'])) {
        $data_value = $entity->get($style['vba_field_name'])->getValue();
        // Consider Only the first item in the field.
        $date = $data_value[0]['value'];

        try {
          if (!is_numeric($date)) {
            $dateField = $entity->get($style['vba_field_name']);
            $datetimeType = $dateField->getFieldDefinition()->getSetting('datetime_type');
            $storageFormat = $datetimeType === DateTimeItem::DATETIME_TYPE_DATE ? DateTimeItemInterface::DATE_STORAGE_FORMAT : DateTimeItemInterface::DATETIME_STORAGE_FORMAT;
            $date_obj = DrupalDateTime::createFromFormat($storageFormat, $date);
          }
          else {
            // Timestamp.
            $date_obj = DrupalDateTime::createFromTimestamp($date);
          }
          $year_to_expand = $date_obj->format('Y');
          $month_to_expand = $date_obj->format('m');
        }
        catch (Exception $exception) {
          // @todo Handle this.
        }
      }
    }
  }
  // Check drupal internal pages(archive page) with query string.
  if ($year_to_expand == NULL || $month_to_expand == NULL) {
    $arg = \Drupal::request()->query;
    $context_route = \Drupal::request()->attributes->get('_route');
    if ($context_route == $style['vba_style']['vba_view_name']) {
      $year_to_expand = $arg->get('year');
      if ($arg->get('month')) {
        $month_to_expand = date('m', mktime(0, 0, 0, $arg->get('month'), 10));
      }
    }
  }

  if ($style['vba_style']['vba_use_result_page']) {
    $archiveItems = views_blogspot_archive_with_link($data, $year_to_expand, $month_to_expand, $style['vba_style']['vba_view_name']);
    $library = [];
  }
  else {
    $archiveItems = views_blogspot_archive_without_link($data);
    $library = [
      'library' => [
        'views_blogspot_archive/views_blogspot_archive',
      ]
    ];
  }

  $variables['views_blogspot_archive'] = [
    '#theme' => 'item_list',
    '#items' => $archiveItems,
    '#list_type' => 'ul',
    '#context' => 'list_style',
    '#cache' => [
      'contexts' => ['url.query_args:year', 'url.query_args:month', 'url.path'],
    ],
    '#attributes' => [
      'class' => [
        'vba-archive',
      ],
    ],
    '#attached' => $library,
  ];
}

/**
 * Add counts value to year and month.
 *
 * @param array $results
 *   Array contain views result.
 *
 * @return array
 *   An results array.
 */
function views_blogspot_archive_add_count(array $results) {
  if (!empty($results)) {
    foreach ($results as $year => $month) {
      $year_count = 0;
      foreach ($month as $key => $title) {
        $count = count($title, COUNT_RECURSIVE);
        $results[$year][$key . ' (' . $count . ')'] = $results[$year][$key];
        unset($results[$year][$key]);
        $year_count += $count;
      }
      $results[$year . ' (' . $year_count . ')'] = $results[$year];
      unset($results[$year]);
    }
  }

  return $results;
}

/**
 * Theme the result set to HTML.
 *
 * @param array $results
 *   Associate array in format
 *   Array([year(counter)] => Array([month(counter)] => Array([nid] => title)))
 * @param string $year_to_expand
 *   Which year to be shown in archive.
 *   A full numeric representation of a year, 4 digit.
 * @param string $month_to_expand
 *   Which month to be shown in archive.
 *   Numeric representation of a month, with leading zeros.
 * @param string $viewPage
 *   Views archive settings.
 *
 * @return array
 *   An HTML string.
 */
function views_blogspot_archive_with_link(array $results, $year_to_expand, $month_to_expand, $viewPage) {
  $items = array();
  if (!empty($results)) {
    foreach ($results as $year => $months) {
      // $year_parts[0] contain year value and $year_parts[1] contains count.
      $year_parts = explode(' ', $year);

      // Check for active year branch and block.
      $active_year = $year_to_expand == $year_parts[0] ? TRUE : FALSE;

      $child_months = array();
      if ($active_year) {
        // Loop through active year's month.
        foreach ($months as $month => $entities) {
          // $month_parts[0] contain int month and current interface month. $month_parts[1] contains count.
          $month_parts = explode(' ', $month);
          $month_items = explode('::', $month_parts[0]);

          // Check for active month and block.
          $active_month = $year_to_expand == $year_parts[0] && $month_to_expand == $month_items[0] ? TRUE : FALSE;
          $child_entities = array();

          if ($active_month) {
            $count = 1;
            // Loop through active month's node.
            foreach ($entities as $entity) {
              // $archive_items number of nodes display in expanded archive.
              $link_obj = Link::fromTextAndUrl(t($entity->label()), $entity->toUrl());
              $link_element = $link_obj->toRenderable();
              $child_entities[] = render($link_element);
              $count = $count != 0 ? $count + 1 : 0;
            }
          }
          $link_obj = Link::fromTextAndUrl($month_items[1], Url::fromRoute($viewPage, array(),
            array(
              'query' =>
                array(
                  'year' => $year_parts[0],
                  'month' => $month_items[0],
                ),
            )
          ));
          $link_element = $link_obj->toRenderable();
          $child_months[] = array(
            '#markup' => render($link_element) . ' <span>' . $month_parts[1] . '</span>',
            'children' => $child_entities,
          );
        }
      }
      $link_obj = Link::fromTextAndUrl(t($year_parts[0]), Url::fromRoute($viewPage, array(), array('query' => array('year' => $year_parts[0]))));
      $link_element = $link_obj->toRenderable();
      $items[] = array(
        '#markup' => render($link_element) . ' <span>' . $year_parts[1] . '</span>',
        'children' => $child_months,
      );
    }
  }
  else {
    $items[] = t('No posts available.');
  }
  return $items;
}

/**
 * Theme the result set to HTML.
 *
 * @param array $results
 *   Associate array in format
 *   Array([year(counter)] => Array([month(counter)] => Array([nid] => title)))
 *
 * @return array
 *   An HTML string.
 */
function views_blogspot_archive_without_link(array $results) {
  $items = array();
  if (!empty($results)) {
    foreach ($results as $year => $months) {
      // $year_parts[0] contain year value and $year_parts[1] contains count.
      $year_parts = explode(' ', $year);

      $child_months = array();

      // Loop through active year's month.
      foreach ($months as $month => $entities) {
        // $month_parts[0] contain int month and current interface month. $month_parts[1] contains count.
        $month_parts = explode(' ', $month);
        $month_items = explode('::', $month_parts[0]);

        $child_entities = array();

        $count = 1;
        // Loop through active month's node.
        foreach ($entities as $entity) {
          // $archive_items number of nodes display in expanded archive.
          $link_obj = Link::fromTextAndUrl(t($entity->label()), $entity->toUrl());
          $link_element = $link_obj->toRenderable();
          $child_entities[] = render($link_element);
          $count = $count != 0 ? $count + 1 : 0;
        }

        $child_months[] = array(
          '#markup' => '<span class="caret"><a>'. t($month_items[1]) .'</a></span> <span>' . $month_parts[1] . '</span>',
          'children' => $child_entities,
        );
      }

      $items[] = array(
        '#markup' => '<span class="caret"><a>'. t($year_parts[0]) .'</a></span> <span>' . $year_parts[1] . '</span>',
        'children' => $child_months,
      );
    }
  }
  else {
    $items[] = t('No posts available.');
  }
  return $items;
}
