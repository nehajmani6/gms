<?php
/**
 * @file
 * user_login_activity.features.inc
 */

/**
 * Implements hook_views_api().
 */
function user_login_activity_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function user_login_activity_node_info() {
  $items = array(
    'user_login_activity' => array(
      'name' => t('User Login Activity'),
      'base' => 'node_content',
      'description' => t(' '),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
