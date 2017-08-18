<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tranquilwp
 */
?>

<?php get_header(); ?>

<!-- 404 PAGE -->
<section class="lost">

	<div class="container">

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h2>
						<?php _e( "Let's get back on track", 'tranquilwp' ); ?>

						<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">
					</h2>
				</div><!-- /.col -->
			</div><!-- /.row -->

			<div class="row">
				<div class="col-sm-6">
					<?php the_widget( 'WP_Widget_Archives'); ?>
				</div> <!-- /.col -->

				<div class="col-sm-6">
					<?php the_widget( 'WP_Widget_Categories'); ?>
				</div> <!-- /.col -->

				<div class="col-sm-6">
					<?php the_widget( 'WP_Widget_Recent_Posts'); ?>
				</div> <!-- /.col -->

				<div class="col-sm-6">
					<?php the_widget( 'WP_Widget_Tag_Cloud'); ?>
				</div> <!-- /.col -->
			</div> <!-- /.row -->

			<div class="content-facilities">
        <?php get_template_part( 'template-parts/content-facilities' ); ?>
      </div>

	</div><!-- /.container -->

</section><!-- /.section -->

<?php get_footer(); ?>
