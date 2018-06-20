<?php
/*
Template Name: Page : Appointment Template
*/
?>

<?php get_header(); ?>
<?php global $leadsurf_shortname; ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<div class="page-content fullwidth-temp">
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
	<div class="container post-wrap">
		<div class="row-fluid">
			<div id="content" class="span12">
				<div class="post" id="post-<?php the_ID(); ?>">
					<div class="skepost">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages :','instaappointment-lite').'</strong>','after' => '</p>', __('number','instaappointment-lite'),));	?>
						<?php edit_post_link(__('Edit','instaappointment-lite'), '', ''); ?>	
					</div>
					<!-- skepost -->
				</div>
				<!-- post -->

				<?php endwhile; ?>
				<?php else :  ?>
					<div class="post">
						<h2><?php _e('Not Found','instaappointment-lite'); ?></h2>
					</div>
				<?php endif; ?>
			</div>
			<!-- content --> 
		</div>
	</div>
</div>
<?php get_footer(); ?>