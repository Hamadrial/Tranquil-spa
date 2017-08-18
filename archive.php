<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tranquilwp
 */
 ?>

<?php get_header(); ?>

<!-- BLOG -->
<div class="container">

	<div class="row">
			<div class="col-sm-8">
				<div class="blog-main">

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h2 class="blog-post-title">
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							</h2>

							<p class="blog-post-meta"><?php the_date ('F j, Y'); ?>
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

							<article>
	              <?php the_content() ?>
	            </article>
						</div><!-- /.blog-post -->

						<!-- Load up comments template -->
	          <div class="comment">
	            <?php comments_template(); ?>
	          </div>
	        <?php endwhile; ?>

	        <?php else : ?>
	          <p><?php _e('Sorry, no posts matched your criteria.', 'tranquilwp'); ?></p>
	        <?php endif; ?>
				</div> <!-- /.blog-main -->
			</div> <!-- /.col -->

			<!-- SIDEBAR -->
			<aside class="col-sm-12 col-md-3 col-md-offset-1 blog-sidebar">
				<?php get_sidebar(); ?>
			</aside><!-- /.blog-sidebar -->
	</div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer(); ?>
