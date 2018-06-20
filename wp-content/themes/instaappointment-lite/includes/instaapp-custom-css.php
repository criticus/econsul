<?php

function instaappointment_lite_Hex2RGB($hexStr, $returnAsString = false, $seperator = ',') {
    $hexStr = preg_replace("/[^0-9A-Fa-f]/", '', $hexStr); // Gets a proper hex string
    $rgbArray = array();
    if (strlen($hexStr) == 6) { //If a proper hex code, convert using bitwise operation. No overhead... faster
        $colorVal = hexdec($hexStr);
        $rgbArray['red'] = 0xFF & ($colorVal >> 0x10);
        $rgbArray['green'] = 0xFF & ($colorVal >> 0x8);
        $rgbArray['blue'] = 0xFF & $colorVal;
    } elseif (strlen($hexStr) == 3) { //if shorthand notation, need some string manipulations
        $rgbArray['red'] = hexdec(str_repeat(substr($hexStr, 0, 1), 2));
        $rgbArray['green'] = hexdec(str_repeat(substr($hexStr, 1, 1), 2));
        $rgbArray['blue'] = hexdec(str_repeat(substr($hexStr, 2, 1), 2));
    } else {
        return false; //Invalid hex color code
    }
    return $returnAsString ? implode($seperator, $rgbArray) : $rgbArray; // returns the rgb string or the associative array
} 

	$instaapp_front_bg_image = esc_attr( get_theme_mod('_frontslider_stype') );
	$instaapp_primary_color_scheme = esc_attr( get_theme_mod('_primary_color_scheme', '#F7CA18') );
	$fullparallax_image = esc_url( get_theme_mod('_fullparallax_image', get_template_directory_uri().'/images/1600x1000.png' ) );

	$_breadcrumbbg_image = esc_url( get_theme_mod('breadcrumbbg_image', get_template_directory_uri().'/images/title-bg.png') );
	
	$_breadcrumbbg_repeat = esc_attr( get_theme_mod('breadcrumbbg_repeat', '') );
	$_breadcrumbbg_position_x = esc_attr( get_theme_mod('breadcrumbbg_position_x', '') );
	$_breadcrumbbg_attachment = esc_attr( get_theme_mod('breadcrumbbg_attachment', '') );
	$_breadcrumbbg_size = esc_attr( get_theme_mod('breadcrumbbg_size', '') );
	$_breadcrumbbg_color = esc_attr( get_theme_mod('breadcrumbbg_color', 'rgba(0, 0, 0, 0.6)') );

	$hrgb = instaappointment_lite_Hex2RGB($instaapp_primary_color_scheme);
	$hR = $hrgb['red'];
	$hG = $hrgb['green'];
	$hB = $hrgb['blue'];
	$hrgbcolor = "rgba(". $hR .",". $hG .",". $hB .",.7)";

?>
<style type="text/css">

	/***************** THEME *****************/

	/*************** TOP HEADER **************/
	.social_icon li a:hover,.topbar_info:hover i,
	#footer .third_wrapper a:hover,
	.instaapp-footer-container ul li:hover:before,
	.instaapp-footer-container ul li:hover > a{}

	.map_overlay_text .fa,
	.service-icon i,.bread-title-holder a,.twitter_box a,#wp-calendar a:hover,
	ul.protfolio_details li .fa,#wrapper .hsearch .hsearch-close:hover,.flex-caption .slider-title
	 {
	 	
	 }

	 #logo #site-title a .firstlogoWord, #team-division-box .team-box-mid:hover .teamsocial a,
	 .video-container .play_btn:hover {color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;}

	h3#reply-title,#comments,.comment-author cite { 
		color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;
	}
	.call_to_action .button-link.medium-button,
	#latest-project-section .port-readmore a.button-link,#sidebar .social li a:hover,
	.navigation .alignleft a,.navigation .alignright a {
		background-color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?> !important;
	}

	.call_to_action .button-link.medium-button:hover,
	#latest-project-section .port-readmore a.button-link:hover,.navigation .alignleft a:hover,.navigation .alignright a:hover {
		
	}

	a.large-button:hover, a.small-button:hover, a.medium-button:hover { 
	   
	}

	#header.skehead-headernav.skehead-headernav-shrink #skenav li > a:hover,
	#header.skehead-headernav.skehead-headernav-shrink #skenav li.current-menu-item.page_item.current_page_item > a,
	#skenav .instaapp-mob-menu li:hover > a,
	#skenav .instaapp-mob-menu li.page_item.current_page_item > a, #skenav .instaapp-mob-menu li.current_page_ancestor > a{
    	background-color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;
	}
	<?php if( !get_header_image() ) { ?>
		.front-page #header_wrap{position: inherit; }
		#skenav a,#logo #site-description{color: #262626;}
		.skehead-headernav-shrink #skenav a,#skenav .instaapp-mob-menu a,.skehead-headernav-shrink #logo #site-description{color: #ffffff;}
	<?php } ?>
	.navigation .nav-previous:hover,
	.navigation .nav-next:hover,
	ul.protfolio_details li .fa,
	#content .contact-left form input[type="submit"],
	.contact-post .contact-add .fa, #contact-gmap-toggle, .error-txt-first img,
	blockquote,.instaapp-quote,
	#wp-calendar tbody a,.widget_tag_cloud a:hover,.widget_product_tag_cloud a:hover,#respond input[type="submit"],.comments-template .reply a,
	#instaapp-paginate a,.sktmenu-toggle, #header-top,#skenav ul ul li:hover,
	.instaapp-iconbox h4:after,.instaapp-section h2.section_heading:after,
	.bread-title-holder h1.title:after,.postformat-gallerydirection-nav li a:hover,a#backtop,
	ul.skeside li h3:after {
		background-color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;
	}
	#instaapp-paginate a,
	.page-template-template-appointment-php form input[type="text"]:focus,.page-template-template-appointment-php form input[type="email"]:focus,
	.page-template-template-appointment-php form input[type="url"]:focus,.page-template-template-appointment-php form input[type="tel"]:focus,
	.page-template-template-appointment-php form input[type="number"]:focus,.page-template-template-appointment-php form input[type="range"]:focus,
	.page-template-template-appointment-php form input[type="date"]:focus,.page-template-template-appointment-php form input[type="file"]:focus,.page-template-template-appointment-php form textarea:focus  {border: 1px solid <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;}
	
	#header-top .social_icon a {color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; }

	.filter a:hover,.filter li a.selected {color:<?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; border-bottom: 1px solid <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; }
	#container-isotop .project_box:hover .portfolio_overlay {background-color: rgba(0, 0, 0, 0.8); }
	.port_single_link a {background-color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;}
	.port_single_link a:hover, .leftsquare:after, .rightsquare:before{}

	.instaapp_price_table .price_table_inner ul li.table_title, .instaapp_price_table .price_table_inner ul li.prices,.continue a{background: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; }

	.instaapp_price_table .price_table_inner .price_button a{ border-color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; background-color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; }
	.social li a:hover{}
	.social li a:hover:before{color:#fff; }
	.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover,.slider-link a:hover,#respond input[type="submit"]:hover,.instaapp-ctabox div.instaapp-ctabox-button a:hover,#portfolio-division-box a.readmore:hover,.project-item .icon-image,.project-item:hover,.continue a:hover,#instaapp-paginate .instaapp-current,.comments-template .reply a:hover,#content .contact-left form input[type="submit"]:hover,.service-icon:hover,.instaapp-parallax-button:hover,.instaapp_price_table .price_table_inner .price_button a:hover,#content .instaapp-service-page div.one_third:hover .service-icon,#content div.one_half .instaapp-service-page:hover .service-icon  {}
	.instaapp-ctabox div.instaapp-ctabox-button a,#portfolio-division-box .readmore,.slider-link a,.instaapp_tab_v ul.instaapp_tabs li.active,.instaapp_tab_h ul.instaapp_tabs li.active,.service-icon,.instaapp-parallax-button,#instaapp-paginate a:hover,#instaapp-paginate .instaapp-current,.instaapp-iconbox .iconbox-content h4 hr {} 	
	.clients-items li a:hover{}
	a,.instaapp_widget ul ul li:hover:before,.instaapp_widget ul ul li:hover a,.title a ,.skepost-meta a:hover,.post-tags a:hover,.entry-title a:hover,.readmore a:hover,#Site-map .sitemap-rows ul li a:hover ,.childpages li a,#Site-map .sitemap-rows .title,.instaapp_widget a,.instaapp_widget a:hover,#Site-map .sitemap-rows ul li:hover,.instaapp-title,span.team_name,.reply a, a.comment-edit-link,#full-subscription-box .sub-txt .first-word{color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;text-decoration: none;}
	.single #content .title,#content .post-heading,.childpages li ,.fullwidth-heading,#respond .required{} 

	*::-moz-selection{background: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;color:#fff;}
	::selection {background: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>;color:#fff;}
	#full-twitter-box,.progress_bar {}
	.instaapp-front-subs-widget input[type="submit"]{}
	
	#skenav ul ul.sub-menu li.current_page_item,
	#skenav ul ul.sub-menu li.current-menu-item,
	#skenav ul ul.sub-menu li.current-menu-parent,
	#header-top .dropdown-menu.langs li:hover a { background: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; }

	#skenav ul ul.sub-menu li.current_page_item > a,
	#skenav ul ul.sub-menu li.current-menu-ancestor > a,
	#skenav ul ul.sub-menu li.current-menu-item > a,
	#skenav ul ul.sub-menu li.current-menu-parent > a,
	#skenav ul ul.sub-menu li:hover > a, #header-top .dropdown-menu.langs li:hover a { color: #262626;}
	.instaapp-footer-container ul li {}
	.col-one .box .title, .col-two .box .title, .col-three .box .title, .col-four .box .title { }
	.instaapp-counter-h i, .error-txt {  color: <?php if(isset($instaapp_primary_color_scheme)){ echo $instaapp_primary_color_scheme; } ?>; }

	<?php $classes = get_body_class(); ?>
	<?php 
	if( !is_front_page() ) 
	{
		if( $_breadcrumbbg_image != '' ) {	?>
			#header_wrap {
				background: url('<?php echo $_breadcrumbbg_image; ?>') <?php echo $_breadcrumbbg_repeat.' '.$_breadcrumbbg_attachment.' '.$_breadcrumbbg_position_x.' '.$_breadcrumbbg_color; ?> ;
				background-size: <?php echo $_breadcrumbbg_size; ?>;
				padding-bottom: 15px;
			}
		<?php  }
		elseif ( $_breadcrumbbg_color != '' ) { ?>
			#header_wrap {background: none no-repeat scroll 0 0 <?php echo $_breadcrumbbg_color; ?>; }
		<?php } else { ?>
			#header_wrap {background: none no-repeat scroll 0 0 rgba(0, 0, 0, 0.6); }
		<?php
			}
	}
	?>
		
	#full-division-box { background-image: url("<?php if(isset($fullparallax_image)){ echo $fullparallax_image; } ?>"); }
	
	
	.footer-seperator{background-color: rgba(0,0,0,.2);}
	#footer div.follow-icons li:hover a{}
	#footer div.follow-icons .social li:hover a:before{color: #747474 !important; }
	.instaapp-title.instaapp-footer-title { }


	.instaapp-iconbox.iconbox-top:hover .iconboxhover { }
	section > h1 { }
	#content .featured-image-shadow-box .fa {  }
	
		
	/********************** MAIN NAVIGATION PERSISTENT **********************/
	@media only screen and (max-width : 1025px) {
		#menu-main {
			display:none;
		}

		#header .container {
			width:97%;
		}
	}
</style>

<script type="text/javascript">
jQuery(document).ready(function(){
'use strict';
	jQuery('#menu-main').sktmobilemenu();
});
</script> 