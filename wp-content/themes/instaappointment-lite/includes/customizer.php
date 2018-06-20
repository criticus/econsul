<?php

function instaappointment_lite_customize_register( $wp_customize ) {

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	$wp_customize->remove_control('header_textcolor');
	$wp_customize->remove_control('background_color');
	
	// ====================================
	// = Avis Lite Theme Pannel
	// ====================================
	$wp_customize->add_panel( 'homepage_panel', array(
		'title' 	=> __( 'Home Page Options','instaappointment-lite'),
		'priority' 	=> 1,
		'active_callback' => 'is_front_page'
	) );
	// ====================================
	// = Avis Lite Theme Sections
	// ====================================
	$wp_customize->add_section( 'home_ntfy_section' , array(
		'title' 		=> __('Notify Button','instaappointment-lite'),
		'priority'		=> 1,
		'panel'	 => 'homepage_panel'
	) );
	$wp_customize->add_section( 'home_featured_section' , array(
		'title' 		=> __('Home Featured Box','instaappointment-lite'),
		'priority'		=> 2,
		'panel'	 => 'homepage_panel'
	) );
	$wp_customize->add_section( 'home_parallax_section' , array(
		'title' 		=> __('Home Parallax Settings','instaappointment-lite'),
		'priority'		=> 3,
		'panel'	 => 'homepage_panel'
		
	) );
	$wp_customize->add_section( 'home_blog_section' , array(
		'title' 		=> __('Home Blog Settings','instaappointment-lite'),
		'priority'		=> 4,
		'panel'	 => 'homepage_panel'
		
	) );
	$wp_customize->add_section( 'blog_page_section' , array(
		'title' 		=> __('Blog Page Settings','instaappointment-lite'),
		'priority' 		=> 2,
	) );
	$wp_customize->add_section( 'top_bar_section' , array(
		'title' 		=> __('Top Bar Settings','instaappointment-lite'),
		'priority' 		=> 3,
	) );
	$wp_customize->add_section( 'breadcrumb_settings' , array(
		'title' => __('Breadcrumb Settings','instaappointment-lite'),
		'priority' 		=> 4,
	) );
	$wp_customize->add_section( 'footer_section' , array(
		'title' 		=> __('Footer Settings','instaappointment-lite'),
	) );

	// ====================================
	// = General Settings Sections
	// ====================================
	$wp_customize->add_setting( '_primary_color_scheme', array(
		'default'           => '#F7CA18' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, '_primary_color_scheme', array(
		'priority' 		=> 1,
		'section'     	=> 'colors',
		'label'       	=> __( 'Theme Color Scheme', 'instaappointment-lite' ),
	) ) );


	// ====================================
	// = Header Settings Sections
	// ====================================
	$wp_customize->add_setting( '_logo_img', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_logo_img', array(
		'priority'	=> 1,
		'section' 		=> 'title_tagline',
		'label' 		=> __( 'Logo Image', 'instaappointment-lite' ),
		'description' 	=> __('Uplaod your beautiful logo image from here. Maximum Recomended size 370x68 px.', 'instaappointment-lite' ),
	) ) );

	// ====================================
	// = Notify Settings Sections
	// ====================================
	$wp_customize->add_setting( '_nitify_btn_txt', array(
		'default'           => __('Book Now', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	) );
	$wp_customize->add_control( '_nitify_btn_txt', array(
		'section'  		=> 'home_ntfy_section',
		'label'    		=> __( 'Button Text', 'instaappointment-lite' ),
	) );

	$wp_customize->add_setting( '_nitify_btn_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_nitify_btn_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_ntfy_section',
		'label'    		=> __( 'Button Link', 'instaappointment-lite' ),
	) );
	
	// ====================================
	// = Top Bar Settings Sections
	// ====================================
	// Call us Text
	$wp_customize->add_setting( '_head_callus', array(
		'default'        => '+1-888-888-888',
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_head_callus', array(
		'section' => 'top_bar_section',
		'label' => __('Call Us Text','instaappointment-lite'),
	));
	//  Facebook
	$wp_customize->add_setting( '_fbook_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fbook_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'Facebook URL', 'instaappointment-lite' ),
	) );
	// Twitter
	$wp_customize->add_setting( '_twitter_link', array(
		'default'           => '#'
,		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_twitter_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'Twitter URL', 'instaappointment-lite' ),
	) );
	// LinkedIn
	$wp_customize->add_setting( '_linkedin_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_linkedin_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'LinkedIn URL', 'instaappointment-lite' ),
	) );
	// Goggle+
	$wp_customize->add_setting( '_gplus_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_gplus_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'Google+ URL', 'instaappointment-lite' ),
	) );
	// Tumblr
	$wp_customize->add_setting( '_tumblr_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_tumblr_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'Tumblr URL', 'instaappointment-lite' ),
	) );
	// skype
	$wp_customize->add_setting( '_skype_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_skype_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'skype URL', 'instaappointment-lite' ),
	) );
	// instagram
	$wp_customize->add_setting( '_instagram_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_instagram_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'instagram URL', 'instaappointment-lite' ),
	) );
	// vk
	$wp_customize->add_setting( '_vk_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_vk_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'vk URL', 'instaappointment-lite' ),
	) );
	// whatsapp
	$wp_customize->add_setting( '_whatsapp_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_whatsapp_link', array(
		'type'     		=> 'url',
		'section'  		=> 'top_bar_section',
		'label'    		=> __( 'whatsapp URL', 'instaappointment-lite' ),
	) );

	// ====================================
	// = Home Blog Settings Sections
	// ====================================
	$wp_customize->add_setting( 'home_blog_sec', array(
		'default'           => 'on',
		'sanitize_callback' => 'instaappointment_lite_sanitize_on_off',
	) );
	$wp_customize->add_control( 'home_blog_sec', array(
		'type' => 'radio',
		'section' => 'home_blog_section',
		'label' => __( 'Blog Section ON/OFF', 'instaappointment-lite' ),
		'description' => __('Enable/Disable the Front Page Blog Section.', 'instaappointment-lite' ),
		'choices' => array(
			'on' => __('ON', 'instaappointment-lite' ),
			'off'=> __('OFF', 'instaappointment-lite' ),
		),
	) );
	$wp_customize->add_setting( 'home_blog_title', array(
		'default'        => __('Latest Posts', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_title', array(
		'section' => 'home_blog_section',
		'label' => __('Front Page Blog Section Title','instaappointment-lite'),
	));
	$wp_customize->add_setting( 'home_blog_num', array(
		'capability' => 'edit_theme_options',
		'default'        => '6',
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('home_blog_num', array(
		'section' => 'home_blog_section',
		'label' => __('Number of Blogs to show on front','instaappointment-lite'),
		'description' => __('Select number of blog post to show. Leave field empty to show all.', 'instaappointment-lite'),
	));
	// ====================================
	// = Home Feature Settings Sections
	// ====================================
	// Feature Section
	$wp_customize->add_setting( '_featured_heading', array(
		'default'        => __('WHAT WE DO', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_featured_heading', array(
		'section' => 'home_featured_section',
		'label' => __('Feature Section Heading','instaappointment-lite'),
	));
	// Fist Feature Section
	$wp_customize->add_setting( '_fb1_first_part_heading', array(
		'default'        => __('SECURE BOOKING', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_first_part_heading', array(
		'section' => 'home_featured_section',
		'label' => __('First Featured Box Heading','instaappointment-lite'),
	));

	$wp_customize->add_setting( '_fb1_first_icon_class', array(
		'default'        => 'fa-calendar',
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_first_icon_class', array(
		'section' => 'home_featured_section',
		'label' => __('First Featured Box Icon Class','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fb1_first_part_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb1_first_part_content', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('First Featured Box Content','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fb1_first_part_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fb1_first_part_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_featured_section',
		'label'    		=> __( 'First Featured Box Link', 'instaappointment-lite' ),
	) );

	// Second Feature Section
	$wp_customize->add_setting( '_fb2_second_part_heading', array(
		'default'        => __('RELIABLE SERVICE', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_second_part_heading', array(
		'section' => 'home_featured_section',
		'label' => __('Second Featured Box Heading','instaappointment-lite'),
	));

	$wp_customize->add_setting( '_fb2_second_icon_class', array(
		'default'        => 'fa-cogs',
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_second_icon_class', array(
		'section' => 'home_featured_section',
		'label' => __('Second Featured Box Icon Class','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fb2_second_part_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb2_second_part_content', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Second Featured Box Content','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fb2_second_part_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fb2_second_part_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_featured_section',
		'label'    		=> __( 'Second Featured Box Link', 'instaappointment-lite' ),
	) );

	// Third Feature Section
	$wp_customize->add_setting( '_fb3_third_part_heading', array(
		'default'        => __('NO HIDDEN CHARGES', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_third_part_heading', array(
		'section' => 'home_featured_section',
		'label' => __('Third Featured Box Heading','instaappointment-lite'),
	));

	$wp_customize->add_setting( '_fb3_third_icon_class', array(
		'default'        => 'fa-eye-slash',
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_third_icon_class', array(
		'section' => 'home_featured_section',
		'label' => __('Third Featured Box Icon Class','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fb3_third_part_content', array(
		'default'        => __('Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_fb3_third_part_content', array(
		'type'	=> 'textarea',
		'section' => 'home_featured_section',
		'label' => __('Third Featured Box Content','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fb3_third_part_link', array(
		'default'           => '#',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( '_fb3_third_part_link', array(
		'type'     		=> 'url',
		'section'  		=> 'home_featured_section',
		'label'    		=> __( 'Third Featured Box Link', 'instaappointment-lite' ),
	) );

	// ====================================
	// = Home Parallax Settings Sections
	// ====================================
	$wp_customize->add_setting( '_para_content_left', array(
		'default'        => __('Since they are staring back at them from the steering wheel all day long. They need to be familiar with every nook and cranny of the area in order to provide quality service to their passengers. The difference of 5% or so in tips can be a biggie. Weaving in and out of lanes, taking back routes to destinations, and driving-around and preferably not through-pedestrians can feel like a video game.', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_para_content_left', array(
		'type'	=> 'textarea',
		'section' => 'home_parallax_section',
		'label' => __('Parallax Section Content','instaappointment-lite'),
	));
	$wp_customize->add_setting( '_fullparallax_image', array(
		'default'           => get_template_directory_uri().'/images/1600x1000.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control(  new WP_Customize_Image_Control( $wp_customize, '_fullparallax_image', array(
		'section' 		=> 'home_parallax_section',
		'label' 		=> __( 'Parallax Image', 'instaappointment-lite' ),
		'description' 	=> __('Recomended size min. 1600x750 px.', 'instaappointment-lite' ),
	) ) );

	// ====================================
	// = Blog Page Settings Sections
	// ====================================
	$wp_customize->add_setting( '_blogpage_heading', array(
		'default'        => __('Blog', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('_blogpage_heading', array(
		'priority' => 1,
		'section' => 'blog_page_section',
		'label' => __('Blog Page Title','instaappointment-lite'),
	));

	// ====================================
	// = Breadcrumb Settings Sections
	// ====================================
	$wp_customize->add_setting( 'breadcrumbbg_color', array(
		'default'           => '#253151' ,
		'sanitize_callback' => 'sanitize_hex_color',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'breadcrumbbg_color', array(
		'label'       => __( 'Breadcrumb Background Color', 'instaappointment-lite' ),
		'section'     => 'breadcrumb_settings',
	) ) );
	$wp_customize->add_setting( 'breadcrumbbg_image', array(
		'default'        => get_template_directory_uri().'/images/title-bg.png',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'breadcrumbbg_image', array(
		'label' => __( 'Breadcrumb Background Image', 'instaappointment-lite' ),
		'section' => 'breadcrumb_settings',
	) ) );
	$wp_customize->add_setting( 'breadcrumbbg_repeat', array(
		'default'        => 'no-repeat',
		'sanitize_callback' => 'instaappointment_lite_sanitize_background_repeat',
	) );
	$wp_customize->add_control( 'breadcrumbbg_repeat', array(
		'label'      => __( 'Breadcrumb Background Repeat', 'instaappointment-lite' ),
		'section'    => 'breadcrumb_settings',
		'type'       => 'radio',
		'choices'    => array(
			'no-repeat'  => __('No Repeat', 'instaappointment-lite'),
			'repeat'     => __('Tile', 'instaappointment-lite'),
			'repeat-x'   => __('Tile Horizontally', 'instaappointment-lite'),
			'repeat-y'   => __('Tile Vertically', 'instaappointment-lite'),
		),
		'active_callback' => 'instaappointment_lite_active_breadcrumb_image',
	) );
	$wp_customize->add_setting( 'breadcrumbbg_position_x', array(
		'default'        => 'center',
		'sanitize_callback' => 'instaappointment_lite_sanitize_background_position',
	) );
	$wp_customize->add_control( 'breadcrumbbg_position_x', array(
		'label'      => __( 'Breadcrumb Background Position', 'instaappointment-lite'),
		'section'    => 'breadcrumb_settings',
		'type'       => 'radio',
		'choices'    => array(
			'left'       => __('Left', 'instaappointment-lite'),
			'center'     => __('Center', 'instaappointment-lite'),
			'right'      => __('Right', 'instaappointment-lite'),
		),
		'active_callback' => 'instaappointment_lite_active_breadcrumb_image',
	) );
	$wp_customize->add_setting( 'breadcrumbbg_attachment', array(
		'default'        => 'scroll',
		'sanitize_callback' => 'instaappointment_lite_sanitize_background_attachment',
	) );
	$wp_customize->add_control( 'breadcrumbbg_attachment', array(
		'label'      => __( 'Breadcrumb Background Attachment', 'instaappointment-lite'),
		'section'    => 'breadcrumb_settings',
		'type'       => 'radio',
		'choices'    => array(
			'scroll'     => __('Scroll', 'instaappointment-lite'),
			'fixed'      => __('Fixed', 'instaappointment-lite'),
		),
		'active_callback' => 'instaappointment_lite_active_breadcrumb_image',
	) );
	
	$wp_customize->add_setting( 'breadcrumbbg_size', array(
		'default'        => 'cover',
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
	));
	$wp_customize->add_control('breadcrumbbg_size', array(
		'label' => __('Breadcrumb Background Image Size','instaappointment-lite'),
		'section' => 'breadcrumb_settings',
		'active_callback' => 'instaappointment_lite_active_breadcrumb_image',
	));

	// ====================================
	// = Footer Settings Sections
	// ====================================
	$wp_customize->add_setting( '_copyright', array(
		'default'        => __('Copyright Text', 'instaappointment-lite'),
		'sanitize_callback' => 'instaappointment_lite_sanitize_textarea',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control('_copyright', array(
		'section' => 'footer_section',
		'label' => __('Copyright Text','instaappointment-lite'),
		'description' => __('You can use HTML for links', 'instaappointment-lite'),
	));
	
	

}
add_action( 'customize_register', 'instaappointment_lite_customize_register' );

/**
 * Binds JS handlers to make the Customizer preview reload changes asynchronously.
 *
 * @since Avis Lite 1.0
 */
function instaappointment_lite_customize_preview_js() {
	wp_enqueue_script( 'avis-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'instaappointment_lite_customize_preview_js' );


// sanitize textarea
function instaappointment_lite_sanitize_textarea( $input ) {
	return wp_kses_post( force_balance_tags( $input ) );
}

function instaappointment_lite_sanitize_on_off( $input ) {
	$valid = array(
		'on' => __('ON', 'instaappointment-lite' ),
		'off'=> __('OFF', 'instaappointment-lite' ),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function instaappointment_lite_active_home_feature_sec( $control ) {
	if ( $control->manager->get_setting('leadsurf_home_feature_sec')->value() == 'on' && is_front_page() ) {
		return true;
	} else {
		return false;
	}
}

function instaappointment_lite_sanitize_background_repeat( $input ) {
	$valid = array(
		'no-repeat'  => __('No Repeat', 'instaappointment-lite'),
		'repeat'     => __('Tile', 'instaappointment-lite'),
		'repeat-x'   => __('Tile Horizontally', 'instaappointment-lite'),
		'repeat-y'   => __('Tile Vertically', 'instaappointment-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function instaappointment_lite_sanitize_background_position( $input ) {
	$valid = array(
		'left'       => __('Left', 'instaappointment-lite'),
		'center'     => __('Center', 'instaappointment-lite'),
		'right'      => __('Right', 'instaappointment-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function instaappointment_lite_sanitize_background_attachment( $input ) {
	$valid = array(
		'scroll'     => __('Scroll', 'instaappointment-lite'),
		'fixed'      => __('Fixed', 'instaappointment-lite'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}

function instaappointment_lite_active_breadcrumb_image( $control ) {
	if ( $control->manager->get_setting('breadcrumbbg_image')->value() != '' ) {
		return true;
	} else {
		return false;
	}
}
?>