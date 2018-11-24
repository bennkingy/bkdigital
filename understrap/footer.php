<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="px-row-polygon4"></div>

<div class="wrapper container-fluid" id="wrapper-footer">

<div class="container-fluid">
  <div class="<?php echo esc_attr( $container ); ?>">
    <footer class="site-footer" id="colophon">

<div class="row align-items-end">

<div class="col-sm-6">
              <img id="logofooter" src="https://www.bkdigital.co.uk/wp-content/uploads/2018/05/bk-digital-logo.png" />
    </div>
    <div class="col-sm-6">
      <div id="socials">
      <i class="fab fa-facebook-f fa-3x"></i>
      <i class="fab fa-linkedin-in fa-3x"></i>
      <i class="fab fa-dribbble fa-3x"></i>
      <i class="fab fa-youtube fa-3x"></i></div>
      <div class="site-info">
        © Copyright 2018 BK Digital - All Rights Reserved. <a href="#">Priacy Policy</a> 
      </div><!-- .site-info -->
    </div>

</div>
</div>

    </footer><!-- #colophon -->


  </div><!-- container end -->
</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

