<?php
/**
* The Header for our theme.
*/
?><!DOCTYPE html>
<?php global $instaapp_shortname, $instaapp_themename; ?>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />

<?php wp_head(); ?>
	
</head>
<body <?php body_class(); ?> >
	<div id="wrapper" class="skepage">
		<div id="header_wrap">
			<div id="header-top" class="clearfix">
			<div class="container">      
				<div class="row-fluid"> 

					<!-- Head Topbar Left Section Starts -->
					<div class="span7">
						<!-- Top Contact Info Section Starts -->
						<?php $_head_callus = get_theme_mod('_head_callus', '+1-888-888-888');
							if( $_head_callus != '' ) { ?>
							<div class="topbar_info">
								<i class="fa fa-phone"></i><span class="head-phone">
								        <?php _e('Телефон:','instaappointment-lite'); ?><a href="tel:<?php echo esc_attr($_head_callus); ?>"><?php echo esc_attr($_head_callus); ?></a>
								            <span id="consul">Генеральне консульство України в Нью-Йорку
                                            </span>
								        </span>
							    
							</div>
						<?php } ?>
                        
						<!-- Top Contact Info Section Ends -->	
					</div>
					<!-- Head Topbar Left Section Ends -->
					
					<!-- Head Topbar Right Section Starts -->
					<div class="span5">

						<!-- Social Links Section -->
						<div class="social_icon">
							<ul class="clearfix">
								<?php if( get_theme_mod('_linkedin_link', '#') != '' ){ ?><li class="linkedin-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_linkedin_link') ); ?>"><span class="fa fa-linkedin" title="Linkedin"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_tumblr_link', '#') != '' ){ ?><li class="tumblr-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_tumblr_link') ); ?>"><span class="fa fa-tumblr" title="Tumblr"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_twitter_link', '#') != '' ){?><li class="tw-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_twitter_link') ); ?>"><span class="fa fa-twitter" title="Twitter"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_fbook_link', '#') != '' ){?><li class="fb-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_fbook_link') ); ?>"><span class="fa fa-facebook" title="Facebook"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_gplus_link', '#') != '' ){ ?><li class="gplus-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_gplus_link') ); ?>"><span class="fa fa-home" title="WWW"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_skype_link', '#') != '' ){ ?><li class="skype-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_skype_link') ); ?>"><span class="fa fa-skype" title="skype"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_instagram_link', '#') != '' ){ ?><li class="instagram-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_instagram_link') ); ?>"><span class="fa fa-instagram" title="instagram"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_vk_link', '#') != '' ){ ?><li class="vk-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_vk_link') ); ?>"><span class="fa fa-envelope" title="email"></span></a></li><?php } ?>
								<?php if( get_theme_mod('_whatsapp_link', '#') != '' ){ ?><li class="whatsapp-icon"><a target="_blank" href="<?php echo esc_url( get_theme_mod('_whatsapp_link') ); ?>"><span class="fa fa-whatsapp" title="whatsapp"></span></a></li><?php } ?>
							</ul>
						</div>
						<!-- Social Links Section -->
					</div>
					<!-- Head Topbar Right Section Ends -->

				</div>
			</div>
		</div>
	

		<div id="header" class="skehead-headernav clearfix">
			<div class="glow">
				<div id="skehead">
					<div class="container">      
						<div class="row-fluid">      
							<!-- #logo -->
							<div id="logo" class="span4">
								<?php if( get_theme_mod('_logo_img', '') != '' ) { ?>
									<div class="logo_inner">
										<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>" style="display: table;line-height: 0;" ><img class="logo" src="<?php echo esc_url( get_theme_mod('_logo_img') ); ?>" alt="<?php bloginfo('name'); ?>" /></a>
									</div>
								<?php } elseif ( display_header_text() ) { ?>
								<!-- #description -->
									<div id="site-title" class="logo_desp logo_inner">
										<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name') ?>" ><?php bloginfo('name'); ?></a>
										<div id="site-description"><?php bloginfo( 'description' ); ?></div>
									</div>
								<!-- #description -->
								<?php } ?>
							</div>
							<!-- #logo -->
							
							<!-- .top-nav-menu --> 
							<div class="top-nav-menu span8">							
								<div class="top-nav-menu">
									<?php 
										if( function_exists( 'has_nav_menu' ) && has_nav_menu( 'Header' ) ) {
											wp_nav_menu(array( 'container_class' => 'instaapp-menu', 'container_id' => 'skenav', 'menu_id' => 'menu-main','theme_location' => 'Header' )); 
										} else {
									?>
									<div class="instaapp-menu" id="skenav">
										<ul id="menu-main" class="menu">
											<?php wp_list_pages('title_li=&depth=0'); ?>
										</ul>
									</div>
									<?php } ?>
								</div>
							</div>
							<!-- .top-nav-menu --> 
						</div>
					</div>
				</div>
				<!-- #skehead -->
			</div>
			<!-- glow --> 
		</div>
		<!-- #header -->
		<div class="header-clone"></div>
		</div>
		<!-- #header_wrap -->


	<div class="head-slide-wrap clearfix">
	<!-- header image section -->
	<?php  get_template_part( 'includes/front', 'bgimage-section'); ?>
	
		<!-- #header-form-wrap -->
		<div class="header-form-wrap clearfix">
			<div class="container">
				<div class="row-fluid">
				<?php 
					get_template_part( 'includes/front', 'appointment-form' );
				 ?>
				</div>
			</div>	
		</div>
		<!-- #header-form-wrap -->
	</div>


<div id="main" class="clearfix">