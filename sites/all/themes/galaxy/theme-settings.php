<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
*/

function galaxy_form_system_theme_settings_alter(&$form, &$form_state) {
 $form['galaxy_color_settings']['color_scheme'] = array(
    '#type'          => 'select',
    '#title'         => t('Color Scheme'),
    '#default_value' => theme_get_setting('color_scheme', 'galaxy'),
    '#description'   => t('Select a predesigned color scheme.'),
    '#options'       => array(
      'default' => t('Default Color Scheme'),
      'blue' => t('Blue Color Scheme'),
      'green' => t('Green Color Scheme'),
      'red' => t('Red Color Scheme'),
     ),
  );
  $form['prof_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Metrixx Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['prof_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','galaxy'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['prof_settings']['top_social_link'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social links in header'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['prof_settings']['top_social_link']['social_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show social icons (Facebook, Twitter and RSS) in header'),
    '#default_value' => theme_get_setting('social_links', 'galaxy'),
    '#description'   => t("Check this option to show twitter, facebook, rss icons in header. Uncheck to hide."),
  );
  $form['prof_settings']['top_social_link']['facebook'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Url'),
    '#default_value' => theme_get_setting('facebook', 'galaxy'),
    '#description' => t("Enter your Facebook URL."),
  );
  $form['prof_settings']['top_social_link']['twitter'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Url'),
    '#default_value' => theme_get_setting('twitter', 'galaxy'),
    '#description' => t("Enter your Twitter Url."),
  );
  $form['prof_settings']['top_social_link']['linkedin'] = array(
    '#type' => 'textfield',
    '#title' => t('Linked in Url'),
    '#default_value' => theme_get_setting('linkedin', 'galaxy'),
    '#description' => t("Enter your Linkedin URL."),
  );
  $form['prof_settings']['top_social_link']['googleplus'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Plus Url'),
    '#default_value' => theme_get_setting('googleplus', 'galaxy'),
    '#description' => t("Enter your Google Plus URL."),
  );
  $form['prof_settings']['top_social_link']['dribbble'] = array(
    '#type' => 'textfield',
    '#title' => t('Dribbble Url'),
    '#default_value' => theme_get_setting('dribbble', 'galaxy'),
    '#description' => t("Enter your Dribbble URL."),
  );
  $form['prof_settings']['top_social_link']['pinterest'] = array(
    '#type' => 'textfield',
    '#title' => t('Pinterest Url'),
    '#default_value' => theme_get_setting('pinterest', 'galaxy'),
    '#description' => t("Enter your Pinterest URL."),
  );
  $form['prof_settings']['top_social_link']['tumblr'] = array(
    '#type' => 'textfield',
    '#title' => t('Tumblr Url'),
    '#default_value' => theme_get_setting('tumblr', 'galaxy'),
    '#description' => t("Enter your Tumblr URL."),
  );
  $form['prof_settings']['top_social_link']['vimeo'] = array(
    '#type' => 'textfield',
    '#title' => t('Vimeo Url'),
    '#default_value' => theme_get_setting('vimeo', 'galaxy'),
    '#description' => t("Enter your Vimeo URL."),
  );
  $form['prof_settings']['top_social_link']['youtube'] = array(
    '#type' => 'textfield',
    '#title' => t('Youtube Url'),
    '#default_value' => theme_get_setting('youtube', 'galaxy'),
    '#description' => t("Enter your Youtube URL."),
  );
  $form['prof_settings']['top_social_link']['vimeo'] = array(
    '#type' => 'textfield',
    '#title' => t('Vimeo Url'),
    '#default_value' => theme_get_setting('vimeo', 'galaxy'),
    '#description' => t("Enter your Vimeo Url."),
  );
  $form['prof_settings']['top_social_link']['flicker'] = array(
    '#type' => 'textfield',
    '#title' => t('Flicker Url'),
    '#default_value' => theme_get_setting('flicker', 'galaxy'),
    '#description' => t("Enter your Flicker URL."),
  );
}


