<?php
/***************** EXCERPT LENGTH ************/
function instaappointment_lite_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'instaappointment_lite_excerpt_length');

/***************** READ MORE ****************/
function instaappointment_lite_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'instaappointment_lite_excerpt_more');

/************* CUSTOM PAGE TITLE ***********/
add_filter( 'wp_title', 'instaappointment_lite_title' );
function instaappointment_lite_title($title)
{
	$instaapp_title = $title;
	if ( is_home() && !is_front_page() ) {
		$instaapp_title .= get_bloginfo('name');
	}

	if ( is_front_page() ){
		$instaapp_title .=  get_bloginfo('name');
		$instaapp_title .= ' | '; 
		$instaapp_title .= get_bloginfo('description');
	}

	if ( is_search() ) {
		$instaapp_title .=  get_bloginfo('name');
	}

	if ( is_author() ) { 
		global $wp_query;
		$curauth = $wp_query->get_queried_object();	
		$instaapp_title .= __('Author: ','instaappointment-lite');
		$instaapp_title .= $curauth->display_name;
		$instaapp_title .= ' | ';
		$instaapp_title .= get_bloginfo('name');
	}

	if ( is_single() ) {
		$instaapp_title .= get_bloginfo('name');
	}

	if ( is_page() && !is_front_page() ) {
		$instaapp_title .= get_bloginfo('name');
	}

	if ( is_category() ) {
		$instaapp_title .= get_bloginfo('name');
	}

	if ( is_year() ) { 
		$instaapp_title .= get_bloginfo('name');
	}
	
	if ( is_month() ) {
		$instaapp_title .= get_bloginfo('name');
	}

	if ( is_day() ) {
		$instaapp_title .= get_bloginfo('name');
	}

	if (function_exists('is_tag')) { 
		if ( is_tag() ) {
			$instaapp_title .= get_bloginfo('name');
		}
		if ( is_404() ) {
			$instaapp_title .= get_bloginfo('name');
		}					
	}
	
	return $instaapp_title;
}

/*********** *   LIMIT WORDS * **************/
function instaappointment_lite_slider_limit_words($string, $word_limit) {
	$words = explode(' ', $string);
	return implode(' ', array_slice($words, 0, $word_limit));
}

/*********** *   Filter content with empty post title * **************/
add_filter('the_title', 'instaappointment_lite_untitled');
function instaappointment_lite_untitled($title) {
	if ($title == '') {
		return __('Untitled','instaappointment-lite');
	} else {
		return $title;
	}
}