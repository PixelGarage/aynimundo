<?php
	function aynimundo_preprocess_page(&$variables) {
     drupal_add_css('https://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,700|Open+Sans+Condensed:700,300', array('type' => 'external', 'group' => CSS_THEME, 'weight' => -10));
	}
	function aynimundo_links__locale_block($variables) {
		foreach ($variables['links'] as $langcode => $link) {
			$variables['links'][$langcode]['title'] = $langcode;
		}
		return theme_links($variables);
	}
