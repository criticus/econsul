<div class="head_form_main span5">
<?php 
	$_nitify_btn_txt = esc_attr( get_theme_mod('_nitify_btn_txt', __('Book Now', 'instaappointment-lite') ) );
	$_nitify_btn_link = esc_url( get_theme_mod('_nitify_btn_link', '#') );
?>	
	<div class="header-form-wrap clearfix">
		<div class="head_form_main">
			<img src="<?php echo get_template_directory_uri(); ?>/images/appointment.png" alt="<?php _e('Instaappointment image','instaappointment-lite'); ?>"/>
			<?php if( $_nitify_btn_link != '' ) { ?>
			<a href="<?php echo $_nitify_btn_link; ?>" title="<?php echo $_nitify_btn_txt; ?>"><?php echo $_nitify_btn_txt; ?></a>
			<?php } ?>
		</div>	
	</div>
</div>