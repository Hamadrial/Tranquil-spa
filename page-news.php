<?php
/**
 *  Template Name: Latest News
 */

get_header(); ?>

<!-- BLOG -->
<div class="container">

  <div class="row">
    <div class="col-sm-12 col-md-8 blog-main">
      <?php query_posts('category_name=news'); ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="blog-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2 class="blog-post-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
          </h2>

          <!-- Date function: Use 'echo get_the_date()' instead of 'the_date()'. 'the_date()' only shows the date for the first post of the day.  -->
          <p class="blog-post-meta"><?php echo get_the_date('F j, Y'); ?>
            by <a href="#"><?php the_author(); ?></a>
          </p>

          <?php the_post_thumbnail(); ?>

          <?php the_excerpt() ?>

          <a href="<?php echo get_permalink(); ?>">
            <?php _e( 'Read More...', 'tranquilwp' ); ?>
          </a>
        </div> <!-- /.blog-post -->

        <?php endwhile; else : ?>
          <p>
            <?php _e( 'Sorry, no posts matched your criteria.', 'tranquilwp' ); ?>
          </p>
        <?php endif; ?>

      <!-- Add the pager functions here. -->
      <nav>
        <ul class="pager">
          <li><?php next_posts_link(__('Older Posts', 'tranquilwp')); ?></li>
          <li><?php previous_posts_link(__('Newer Posts', 'tranquilwp')); ?></li>
        </ul>
      </nav>
    </div> <!-- /.blog-main -->

    <!-- SIDEBAR -->
    <div class="col-sm-12 col-md-3 col-md-offset-1 blog-sidebar">
      <?php get_sidebar(); ?>
    </div> <!-- /.blog-sidebar -->
  </div> <!-- /.row -->

</div> <!-- /.container -->

<?php get_footer(); ?>
