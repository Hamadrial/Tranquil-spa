
<?php get_header(); ?>

<!-- BLOG -->
<div class="container">

	<div class="row">
		<div class="col-sm-12 col-md-8 blog-main">

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h2 class="blog-post-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_title(); ?></a>
					</h2>

					<!-- Date function: Use 'echo get_the_date()' instead of 'the_date()'. 'the_date()' only shows the date for the first post of the day.  -->
					<p class="blog-post-meta"><?php echo get_the_date('F j, Y'); ?>
						by <a href="#"><?php the_author(); ?></a>

						<p class="no-margin-bottom">
							<i class="fa fa-tag"></i>
							<?php the_tags(__('Tagged: ', 'tranquilwp')); ?>
						</p>

						<p>
							<i class="fa fa-folder-open"></i>
							<?php _e( 'Category: ', 'tranquilwp' ); ?>
							<?php the_category( ', ' ); ?>
						</p>
					</p>

					<div class="thumbnail-img">
            <?php the_post_thumbnail(); ?>
          </div>

					<article>
						<?php the_excerpt() ?>
						<a href="<?php echo get_permalink(); ?>">
							<?php _e( 'Read More...', 'tranquilwp' ); ?>
						</a>
					</article>
				</div><!-- /.blog-post -->

			<?php endwhile; ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.', 'tranquilwp' ); ?></p>
			<?php endif; ?>

			<!-- Add the pager functions here. -->
			<nav>
				<ul class="pager">
					<li><?php next_posts_link(__('Older Posts', 'tranquilwp')); ?></li>
					<li><?php previous_posts_link(__('Newer Posts', 'tranquilwp')); ?></li>
				</ul>
			</nav>
		</div><!-- /.blog-main -->

		<!-- SIDEBAR -->
		<aside class="col-sm-12 col-md-3 col-md-offset-1 blog-sidebar">
			<?php get_sidebar(); ?>
		</aside><!-- /.blog-sidebar -->
	</div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
