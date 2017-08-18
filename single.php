<?php
/**
 **  Single Post Template
 */
?>

<?php get_header(); ?>

<!-- BLOG -->
<div class="container">

  <div class="row" role="main">
    <div class="col-sm-12 col-md-8">
      <div class="blog-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="blog-post-title">
              <?php the_title(); ?>
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

            <div class="thumbnail-img">
              <?php the_post_thumbnail(); ?>
            </div>

            <article>
              <?php the_content() ?>
            </article>

            <!-- wp_link_pages is responsible for the pagination of long posts, when combined with nextpage comment in the post -->
            <div class="pagination">
              <?php wp_link_pages(); ?>
            </div>
          </div><!-- /.blog-post -->

          <!-- Add the pager functions here. -->
          <nav>
            <ul class="pager">
              <li><?php next_post_link(); ?></li>
              <li><?php previous_post_link(); ?></li>
            </ul>
          </nav>

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
