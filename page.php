<?php
/**
 *  The template for displaying pages
 */
?>

<?php get_header(); ?>

<div class="container">

  <div class="row">
    <div class="col-sm-8">
      <div class="blog-main">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <article>
            <?php the_content(); ?>
          </article>
        <?php endwhile; ?>

        <?php else : ?>
          <p>
            <?php _e( 'Sorry, no pages matched your criteria.', 'tranquil-wp' ); ?>
          </p>
        <?php endif; ?>
      </div> <!-- /.blog-main -->
    </div> <!-- /.col -->

    <!-- SIDEBAR -->
    <aside class="col-sm-3 col-sm-offset-1 blog-sidebar">
      <?php get_sidebar(); ?>
    </aside> <!-- /.blog-sidebar -->
  </div> <!-- /.row -->

</div> <!-- /.container -->

<?php get_footer(); ?>
