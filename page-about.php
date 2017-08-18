<?php
/**
 *  Template Name: About Us
 */

get_header(); ?>

<!-- ABOUT US -->
<section class="about">

  <div class="container">

    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h1 class="title"><?php the_title(); ?></h1>

        <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">
      </div><!-- /.col -->
    </div><!-- /.row -->

    <article class="about-us">
      <?php the_field( 'about_us' ) ?>
    </article><!-- /.article -->

    <div class="content-facilities">
      <?php get_template_part( 'template-parts/content-facilities' ); ?>
    </div> <!-- /.content-facilities -->
  </div> <!-- /.container -->

</section> <!-- /.section -->

<?php get_footer(); ?>
