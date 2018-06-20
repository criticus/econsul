<?php 
/**
 * The template for displaying Error 404 page.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>
<!-- BreadCrumb Section // -->
<div class="bread-title-holder">
	<div class="container">
		<div class="row-fluid">
			<div class="container_inner clearfix">
				<h1 class="title"><?php the_title(); ?></h1>
				<?php 
				if ((class_exists('instaappointment_lite_breadcrumb_class'))) {$instaapp_breadcumb->instaappointment_lite_custom_breadcrumb();}
				?>
			</div>
		</div>
	</div>
</div>	
<!-- \\ BreadCrumb Section -->

<div class="page-content">
	<div class="container" id="error-404">
		<div class="row-fluid">
			<div id="content" class="span12">
				<div class="post">
					<div class="skepost _404-page">
						<div class="error-txt-first"><img src="<?php echo get_template_directory_uri().'/images/404-image.png'; ?>"></div>
						<div class="error-txt"><?php _e( 'PAGE NOT FOUND', 'instaappointment-lite' ); ?></div>
						<p><?php _e( 'oops! it looks like the page you were looking for does not exist anymore or is temporaliry </br> unavailable. You might want to search our website.', 'instaappointment-lite' ); ?></p>
						<?php get_search_form(); ?>
					</div>
					<!-- post --> 
				</div>
				<!-- post -->
			</div>
			<!-- content --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>