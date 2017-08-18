<?php get_header(); ?>

  <!-- WELCOME SECTION -->
  <section class="welcome">

    <div class="container">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <h1 class="title"><?php _e( 'Welcome to Tranquil Spa', 'tranquilwp' ); ?></h1>

          <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">
        </div><!-- /.col -->
      </div><!-- /.row -->

      <div class="content-facilities">
        <?php get_template_part( 'template-parts/content-facilities' ); ?>
      </div>

    </div><!-- /.container -->

  </section><!-- /.section -->

  <!-- LATEST OFFERS -->
  <section class="latest-offers">

    <div class="container">

      <!-- Margin bottom class to add space below divider -->
      <header class="margin-bottom">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <h1 class="title"><?php _e( 'Latest Offers', 'tranquilwp' ); ?></h1>

            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-silver.png" alt="divider">
          </div> <!-- /.col -->
        </div> <!-- /.row -->
      </header> <!-- /.margin-bottom -->

      <div class="content">
        <div class="row">
          <?php if( have_rows('latest_offer') ): ?>
            <?php while( have_rows('latest_offer') ): the_row(); ?>
              <?php if( get_row_layout() === 'offers' ): ?>
                <div class="col-sm-4">
                  <div class="offer">
                    <span class="offer-price">
                      $<?php the_sub_field( 'offer_price' ); ?>
                    </span>

                    <h2 class="offer-name">
                      <?php the_sub_field( 'offer_name' ); ?>
                    </h2>

                    <hr><p class="offer-info">
                      <?php the_sub_field('offer_content'); ?>
                    </p><hr>
                  </div> <!-- .offer -->
                </div> <!-- .col -->
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div> <!-- .row -->
      </div> <!-- .content -->

    </div> <!-- /.container -->

  </section> <!-- /.section -->

  <!-- SHOP ONLINE SECTION -->
  <section class="shop-online">

    <div class="container">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="text-center">
            <h1 class="title"><?php _e( 'Shop Online', 'tranquilwp' ); ?></h1>

            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/divider-purple.png" alt="divider">

            <p>
              <a href="#" class="btn btn-default" role="button">
                  <?php _e( 'Shop Here', 'tranquilwp' ); ?></a>
            </p>
          </div> <!-- /.text-center -->
        </div> <!-- /.col -->
      </div> <!-- /.row -->

    </div> <!-- /.container -->

  </section> <!-- /.section -->

<?php get_footer(); ?>
