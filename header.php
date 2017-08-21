<!DOCTYPE html>

<html <?php language_attributes(); ?>>

  <head>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <!-- Force Internet Explorer to use the latest rendering engine available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title(''); ?></title>

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Fontawesome -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <header>

      <nav class="navbar navbar-default">

        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <!-- href will link to home page because no path is put after.
            eg ?>/blog -->
            <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                <?php echo get_bloginfo( 'name' ); ?>
            </a>
          </div> <!-- .navbar-header -->

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse">
            <?php
              wp_nav_menu( array(
                'menu'              => 'Primary menu',
                'theme_location'    => 'Primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
              );
            ?>
          </div> <!-- /.navbar-collapse -->

        </div> <!-- /.container-fluid -->
        
      </nav>

        <!-- ========== FEATURE SECTION ========== -->
       <div class="container-fluid">
         <section class="feature">
           <div class="row">
             <img src="<?php header_image(); ?>" alt="featured image">

             <div class="feature-text col-xs-12 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                 <p><?php featureText() ?></p>
             </div> <!-- /.col feature-text -->
           </div> <!-- /.row -->
         </section>
       </div> <!-- /.container-fluid -->

    </header>
