	<footer class="page-footer">

		<div class="container">

			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<div class="text-center margin-bottom">
						<h1 class="title">
							<?php _e('Keep in touch', 'tranquilwp'); ?>
						</h1>

						<img src="<?php echo esc_url(get_template_directory_uri()) ; ?>/images/divider-silver.png" alt="divider">
					</div>
				</div> <!-- /.col -->
			</div> <!-- /.row -->

			<div class="row">
				<div class="col-sm-3">
					<address class="footer-address">
						<p>Tranquil Spa</p>
						<p class="no-margin-bottom">Address line 1</p>
						<p class="no-margin-bottom">Address line 2</p>
						<p class="no-margin-bottom">Address line 3</p>
					</address>
				</div> <!-- /.col -->

				<div class="col-sm-2">
					<?php
            wp_nav_menu(
    					array(
	              'menu'              => 'Footer menu 1',
	              'theme_location'    => 'Footer',
	              'container'         => 'ul',
	              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	              'walker'            => new wp_bootstrap_navwalker())
              );
                    ?>
				</div> <!-- /.col -->

				<div class="col-sm-2">
					<?php
            wp_nav_menu(
            	array(
                'menu'              => 'Footer menu 2',
                'theme_location'    => 'Footer',
                'container'         => 'ul',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
				</div> <!-- /.col -->

				<div class="col-sm-2">
					<?php
            wp_nav_menu(
            	array(
                'menu'              => 'Footer menu 3',
                'theme_location'    => 'Footer',
                'container'         => 'ul',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
          ?>
				</div> <!-- /.col -->

				<div class="col-sm-3">
					<div class="social-media">
						<p><?php _e('Follow Us:', 'tranquilwp'); ?></p>

						<i class="fa fa-facebook fa-lg"></i>
						<i class="fa fa-twitter fa-lg"></i>
						<i class="fa fa-google-plus fa-lg"></i>
						<i class="fa fa-pinterest-p fa-lg"></i>
						<i class="fa fa-youtube fa-lg"></i>
					</div>
				</div> <!-- /.col -->
			</div> <!-- /.row -->

			<p class="copy">&copy;
				<?php echo date('Y'); ?>
				<?php _e('Tranquil Spa', 'tranquilwp'); ?>
			</p>
		</div> <!-- /.container -->
	</footer>

	<?php wp_footer(); ?>
</body>

</html>
