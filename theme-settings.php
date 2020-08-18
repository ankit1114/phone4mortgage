<?php

use Drupal\file\Entity\File;


function phone4mortgage_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['phone4mortgage_diary_graphics'] = array(
    '#type' => 'managed_file',
    '#title' => t('Diary Graphics'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_diary_graphics'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_header_style_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Header Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_header_style_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_footer_style_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Footer Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_footer_style_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_contact_diary_graphics'] = array(
    '#type' => 'managed_file',
    '#title' => t('Contact Diary Graphics'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_contact_diary_graphics'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_call_back_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Call Back Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_call_back_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_testimonials_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Testimonials Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_testimonials_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_request_callback_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Request Callback Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_request_callback_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );
  $form['phone4mortgage_sheild_image'] = array(
    '#type' => 'managed_file',
    '#title' => t('Sheild Image'),
    '#required' => FALSE,
    '#upload_location' => 'public://',
    '#default_value' => theme_get_setting('phone4mortgage_sheild_image'),
    '#upload_validators' => array(
      'file_validate_extensions' => array('png jpg jpeg'),
    ),
  );

  $form['phone4mortgage_logo']['phone4mortgage_logo_text'] = array(
    '#type'           => 'textarea',

    '#title'          => t('Logo Text'),
    '#default_value'  => theme_get_setting('phone4mortgage_logo_text'),
  );

  $form['phone4mortgage_contact_number'] = array(
    '#type'           => 'textfield',
    '#title'          => t('Contact Number'),
    '#default_value'  => theme_get_setting('phone4mortgage_contact_number'),
  );

  $form['phone4mortgage_online_dairy_link'] = array(
    '#type'           => 'textfield',
    '#title'          => t('Online Dairy Button Link'),
    '#default_value'  => theme_get_setting('phone4mortgage_online_dairy_link'),
  );

  $form['#submit'][] = 'custom_image_save';
    return $form;
}

function custom_image_save(&$form, &$form_state) {

  $fid = $form_state->getValue('phone4mortgage_diary_graphics');
  $file = File::load($fid[0]);
  $file->setPermanent();
  $file->save();

  $hsifid = $form_state->getValue('phone4mortgage_header_style_image');
  $hsifile = File::load($hsifid[0]);
  $hsifile->setPermanent();
  $hsifile->save();

  $fsifid = $form_state->getValue('phone4mortgage_footer_style_image');
  $fsifile = File::load($fsifid[0]);
  $fsifile->setPermanent();
  $fsifile->save();

  $cdgfid = $form_state->getValue('phone4mortgage_contact_diary_graphics');
  $cdgfile = File::load($cdgfid[0]);
  $cdgfile->setPermanent();
  $cdgfile->save();

  $callbackFid = $form_state->getValue('phone4mortgage_call_back_image');
  $callbackFile = File::load($callbackFid[0]);
  $callbackFile->setPermanent();
  $callbackFile->save();

  $RequestcallbackFid = $form_state->getValue('phone4mortgage_request_callback_image');
  $RequestcallbackFile = File::load($RequestcallbackFid[0]);
  $RequestcallbackFile->setPermanent();
  $RequestcallbackFile->save();

  $diarygraphicsFid = $form_state->getValue('phone4mortgage_diary_graphics');
  $diarygraphicsFile = File::load($diarygraphicsFid[0]);
  $diarygraphicsFile->setPermanent();
  $diarygraphicsFile->save();

  $testimonialimageFid = $form_state->getValue('phone4mortgage_testimonials_image');
  $testimonialimageFile = File::load($testimonialimageFid[0]);
  $testimonialimageFile->setPermanent();
  $testimonialimageFile->save();

  $sheildimageFid = $form_state->getValue('phone4mortgage_sheild_image');
  $sheildimageFile = File::load($sheildimageFid[0]);
  $sheildimageFile->setPermanent();
  $sheildimageFile->save();
}
