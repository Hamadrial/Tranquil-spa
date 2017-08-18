<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tranquilwp
 */
?>

<?php if( is_active_sidebar('sidebar_blog') ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar_blog' ); ?>
  </aside><!-- #primary-sidebar -->
<?php endif; ?>
