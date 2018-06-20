<?php 
/**
* The template for displaying Category pages.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*/

get_header(); ?>

<div class="main-wrapper-item">
	<div class="bread-title-holder">
		<div class="container">
			<div class="row-fluid">
				<div class="container_inner clearfix">
					<h1 class="title">
						<?php printf( __( 'Category Archives : %s', 'instaappointment-lite' ), '<span>' . single_cat_title( '', false ) . '</span>' );?> 	
					</h1>
					<?php 
						if ((class_exists('instaappointment_lite_breadcrumb_class'))) {$instaapp_breadcumb->instaappointment_lite_custom_breadcrumb();}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="container post-wrap"> 
		<div class="row-fluid">
			<div id="container" class="span8">
				<div id="content">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>

							<div class="navigation blog-navigation">	
								
								<div class="alignleft"><?php previous_posts_link('<i class="fa fa-angle-left"></i>'.__(' Newer Posts','instaappointment-lite')) ?></div>
								<div class="alignright"><?php next_posts_link( __('Older Posts ','instaappointment-lite').'<i class="fa fa-angle-right"></i>','') ?></div>
								
							</div>  
							
					<?php else :  ?>
					<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
				</div>
				<!-- content --> 
			</div>
			<!-- container --> 
			
			<!-- Sidebar -->
			<div id="sidebar" class="span4">
				<?php get_sidebar(); ?>
			</div>
			<!-- Sidebar --> 

		</div>
	</div>
</div>
<?php get_footer(); ?>