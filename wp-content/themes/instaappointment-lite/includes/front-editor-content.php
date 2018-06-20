<?php if ( 'page' == get_option( 'show_on_front' ) ) { ?>
<!-- PAGE EDITER CONTENT -->
<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	<div id="front-content-box" class="instaapp-section">
		<div class="container">
			<div class="row-fluid"> 
				<?php the_content(); ?>
			</div>
			<div class="border-content-box bottom-space"></div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>
<!-- \\PAGE EDITER CONTENT -->
<?php } ?>


<?php  if( get_theme_mod('home_blog_sec', 'on') == 'on') { ?>
<div id="front-content-box" class="instaapp-section">
	<div class="container">
		<div class="row-fluid">
			<div class="sections_inner_content">
				<h2 class="section_heading"><?php echo esc_attr( get_theme_mod( 'home_blog_title', __('Latest News', 'instaappointment-lite') ) ); ?></h2>
			</div>
		</div>

		<div class="row-fluid front-blog-wrap">
			<?php $instaappointment_lite_blogno = esc_attr( get_theme_mod('home_blog_num', '6' ) );
				$instaappointment_lite_lite_latest_loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => $instaappointment_lite_blogno,'ignore_sticky_posts' => true ) );
			?>
			<?php if ( $instaappointment_lite_lite_latest_loop->have_posts() ) : ?>

			<!-- pagination here -->

				<!-- the loop -->
				<?php while ( $instaappointment_lite_lite_latest_loop->have_posts() ) : $instaappointment_lite_lite_latest_loop->the_post(); ?>
					<div class="span4">
						<h3 class="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<?php the_excerpt(); ?>
						<div class="continue"><a href="<?php the_permalink(); ?>"><?php _e('Read More &rarr;','instaappointment-lite');?></a></div>		  
					</div>
				<?php endwhile; ?>
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'instaappointment-lite' ); ?></p>
			<?php endif; ?>
		</div>
 	</div>
</div>
<?php } ?>