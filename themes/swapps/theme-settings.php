<?php

function swapps_form_system_theme_settings_alter(&$form, $form_state) {

  $form['swapps_settings'] = array(
    '#type' => 'fieldset',
    '#prefix' => '<h2><small>' . t('Swapps Settings') . '</small></h2>',
    '#weight' => -10,
  );

  // General.
  $form['social_media'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social Networks'),
    '#group' => 'swapps_settings',
  );

  $form['social_media']['facebook'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook'),
    '#default_value' => theme_get_setting('facebook'),
    '#description'   => t("Enter url of social network"),
  );
  $form['social_media']['twitter'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter'),
    '#default_value' => theme_get_setting('twitter'),
    '#description'   => t("Enter url of social network"),
  );
  $form['social_media']['linkedin'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Linkedin'),
    '#default_value' => theme_get_setting('linkedin'),
    '#description'   => t("Enter url of social network"),
  );
}

?>