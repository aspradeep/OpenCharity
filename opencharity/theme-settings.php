<?php

// Form override fo theme settings
function opencharity_form_system_theme_settings_alter(&$form, $form_state) {
	
	$form['options_settings'] = array(
		'#type' => 'fieldset',
		'#title' => t('Theme Specific Settings'),
		'#collapsible' => FALSE,
		'#collapsed' => FALSE
	);
	
	$form['options_settings']['facebook_link'] = array(
		'#type' => 'textfield',
		'#title' => t('Facebook Link'),
		'#default_value' => theme_get_setting('facebook_link'),
	);
	
	$form['options_settings']['twitter_link'] = array(
		'#type' => 'textfield',
		'#title' => t('Twitter Link'),
		'#default_value' => theme_get_setting('twitter_link'),
	);
	
	$form['options_settings']['gplus_link'] = array(
		'#type' => 'textfield',
		'#title' => t('Google Plus Link'),
		'#default_value' => theme_get_setting('gplus_link'),
	);
	
	$form['options_settings']['footer_txt'] = array(
		'#type' => 'textarea',
		'#title' => t('Footer Text'),
		'#default_value' => theme_get_setting('footer_txt'),
	);
	
	$form['options_homepage_hero'] = array(
		'#type' => 'fieldset',
		'#title' => t('Home Page Hero Section'),
		'#collapsible' => true,
		'#collapsed' => true
	);
	
	$form['options_homepage_hero']['hero_banner'] = array(
		'#type' => 'managed_file',
		'#title' => t('Upload a Hero Banner'),
		'#default_value' => theme_get_setting('hero_banner'),
		'#upload_location' => 'public://home_page/',
	);
	
	
	
	$form['options_homepage_hero']['hero_title'] = array(
		'#type' => 'textfield',
		'#title' => t('Hero Title'),
		'#default_value' => theme_get_setting('hero_title'),
	);
	
	$form['options_homepage_hero']['hero_text'] = array(
		'#type' => 'textarea',
		'#title' => t('Hero Text'),
		'#default_value' => theme_get_setting('hero_text'),
	);
	
	$form['options_homepage_event'] = array(
		'#type' => 'fieldset',
		'#title' => t('Home Page Event Section'),
		'#collapsible' => true,
		'#collapsed' => true
	);
	
	$form['options_homepage_event']['event_date_time'] = array(
		'#type' => 'textfield',
		'#title' => t('Event Date & Time'),
		'#default_value' => theme_get_setting('event_date_time'),
	);
	
	$form['options_homepage_event']['event_address'] = array(
		'#type' => 'textarea',
		'#title' => t('Event Address'),
		'#default_value' => theme_get_setting('event_address'),
	);
	
	$form['options_homepage_event']['event_register_text'] = array(
		'#type' => 'textfield',
		'#title' => t('Event Register Button Text'),
		'#default_value' => theme_get_setting('event_register_text'),
	);
	
	$form['options_homepage_event']['event_register_link'] = array(
		'#type' => 'textfield',
		'#title' => t('Event Register Button Link'),
		'#default_value' => theme_get_setting('event_register_link'),
	);
	
	$form['options_homepage_getinvolved'] = array(
		'#type' => 'fieldset',
		'#title' => t('Home Page Get Involved Section'),
		'#collapsible' => true,
		'#collapsed' => true
	);
	
	$form['options_homepage_getinvolved']['gi_section_title'] = array(
		'#type' => 'textfield',
		'#title' => t('Get Involved Section Title'),
		'#default_value' => theme_get_setting('gi_section_title'),
	);
	
	for($i=1;$i<=3;$i++){
		$form['options_homepage_getinvolved']['options_homepage_getinvolved_col'.$i]= array(
			'#type' => 'fieldset',
			'#title' => t('Get Involved Section Column '.$i),
			'#collapsible' => true,
			'#collapsed' => true
		);
		$form['options_homepage_getinvolved']['options_homepage_getinvolved_col'.$i]['gi_section_col'.$i.'_image'] = array(
			'#type' => 'managed_file',
			'#title' => t('Get Involved Section Column '.$i.' Image'),
			'#default_value' => theme_get_setting('gi_section_col'.$i.'_image'),
			'#upload_location' => 'public://home_page/',
		);
		
		$form['options_homepage_getinvolved']['options_homepage_getinvolved_col'.$i]['gi_section_col'.$i.'_title'] = array(
			'#type' => 'textfield',
			'#title' => t('Get Involved Section Column '.$i.' Title'),
			'#default_value' => theme_get_setting('gi_section_col'.$i.'_title'),
		);
		
		$form['options_homepage_getinvolved']['options_homepage_getinvolved_col'.$i]['gi_section_col'.$i.'_text'] = array(
			'#type' => 'textfield',
			'#title' => t('Get Involved Section Column '.$i.' Text'),
			'#default_value' => theme_get_setting('gi_section_col'.$i.'_text'),
		);
		
		$form['options_homepage_getinvolved']['options_homepage_getinvolved_col'.$i]['gi_section_col'.$i.'_btntxt'] = array(
			'#type' => 'textfield',
			'#title' => t('Get Involved Section Column '.$i.' Button Text'),
			'#default_value' => theme_get_setting('gi_section_col'.$i.'_btntxt'),
		);
		
		$form['options_homepage_getinvolved']['options_homepage_getinvolved_col'.$i]['gi_section_col'.$i.'_btnlink'] = array(
			'#type' => 'textfield',
			'#title' => t('Get Involved Section Column '.$i.' Button Link'),
			'#default_value' => theme_get_setting('gi_section_col'.$i.'_btnlink'),
		);
	}
	
	$form['options_homepage_about'] = array(
		'#type' => 'fieldset',
		'#title' => t('Home Page About Section'),
		'#collapsible' => true,
		'#collapsed' => true
	);
	
	$form['options_homepage_about']['about_section_title'] = array(
		'#type' => 'textfield',
		'#title' => t('About Section Title'),
		'#default_value' => theme_get_setting('about_section_title'),
	);
	
	$form['options_homepage_about']['about_section_text1'] = array(
		'#type' => 'textfield',
		'#title' => t('About Section Text 1'),
		'#default_value' => theme_get_setting('about_section_text1'),
	);
	
	$form['options_homepage_about']['about_section_text2'] = array(
		'#type' => 'textfield',
		'#title' => t('About Section Text 2'),
		'#default_value' => theme_get_setting('about_section_text2'),
	);
	
	for($i=1;$i<=3;$i++){
		$form['options_homepage_about']['options_homepage_about_col'.$i]= array(
			'#type' => 'fieldset',
			'#title' => t('About Section Column '.$i),
			'#collapsible' => true,
			'#collapsed' => true
		);
		$form['options_homepage_about']['options_homepage_about_col'.$i]['about_section_col'.$i.'_icon'] = array(
			'#type' => 'managed_file',
			'#title' => t('About Section Column '.$i.' Icon'),
			'#default_value' => theme_get_setting('about_section_col'.$i.'_icon'),
			'#upload_location' => 'public://home_page/',
		);
		
		$form['options_homepage_about']['options_homepage_about_col'.$i]['about_section_col'.$i.'_title'] = array(
			'#type' => 'textfield',
			'#title' => t('About Section Column '.$i.' Title'),
			'#default_value' => theme_get_setting('about_section_col'.$i.'_title'),
		);
		
		$form['options_homepage_about']['options_homepage_about_col'.$i]['about_section_col'.$i.'_text'] = array(
			'#type' => 'textfield',
			'#title' => t('About Section Column '.$i.' Text'),
			'#default_value' => theme_get_setting('about_section_col'.$i.'_text'),
		);
	}
	
	$form['options_homepage_members'] = array(
		'#type' => 'fieldset',
		'#title' => t('Home Page Members Section'),
		'#collapsible' => true,
		'#collapsed' => true
	);
	
	$form['options_homepage_members']['members_section_title'] = array(
		'#type' => 'textfield',
		'#title' => t('Members Section Title'),
		'#default_value' => theme_get_setting('members_section_title'),
	);
	
	$form['options_homepage_blog'] = array(
		'#type' => 'fieldset',
		'#title' => t('Home Page Blog Section'),
		'#collapsible' => true,
		'#collapsed' => true
	);
	
	$form['options_homepage_blog']['blog_section_title'] = array(
		'#type' => 'textfield',
		'#title' => t('Blog Section Title'),
		'#default_value' => theme_get_setting('blog_section_title'),
	);
}

$mf_keys = array();
$mf_keys[] = 'hero_banner';
$mf_keys[] = 'gi_section_col1_image';
$mf_keys[] = 'gi_section_col2_image';
$mf_keys[] = 'gi_section_col3_image';
$mf_keys[] = 'about_section_col1_icon';
$mf_keys[] = 'about_section_col2_icon';
$mf_keys[] = 'about_section_col3_icon';
foreach($mf_keys as $mfkey){
	$image_fid = isset($form_state['values'][$mfkey])?$form_state['values'][$mfkey]:'';
	$image = file_load($image_fid);
	if (is_object($image)) {
	// Check to make sure that the file is set to be permanent.
		if ($image->status == 0) {
			// Update the status.
			$image->status = FILE_STATUS_PERMANENT;
			// Save the update.
			file_save($image);
			// Add a reference to prevent warnings.
			file_usage_add($image, 'opencharity', 'theme', 1);
		}
	}
}
