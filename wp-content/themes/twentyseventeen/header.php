<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<!-- bootstrap 4.1 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
<script>
var slideShowSpeed = 3000;
var crossFadeDuration = 3;
var Pic = new Array();
Pic[0] = 'http://localhost/muaystep/wp-content/uploads/2018/12/1.jpg';
Pic[1] = 'http://localhost/muaystep/wp-content/uploads/2018/12/2.jpg';
Pic[2] = 'http://localhost/muaystep/wp-content/uploads/2018/12/3.jpg';
Pic[3] = 'http://localhost/muaystep/wp-content/uploads/2018/12/4.jpg';
var t;
var j = 0;
var p = Pic.length;

var preLoad = new Array();
for (i = 0; i < p; i++){
   preLoad[i] = new Image();
   preLoad[i].src = Pic[i];
}

function runSlideShow(){
   if (document.all){
      document.images.SlideShow.style.filter="blendTrans(duration=2)";
      document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
      document.images.SlideShow.filters.blendTrans.Apply();
   }
   document.images.SlideShow.src = preLoad[j].src;
   if (document.all){
      document.images.SlideShow.filters.blendTrans.Play();
   }
   j = j + 1;
   if (j > (p-1)) j=0;
   t = setTimeout('runSlideShow()', slideShowSpeed);
}
</script>
	
</head>

<body <?php body_class(); ?> onload="runSlideShow()">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
			
			
			<!-- social banner block -->
				<div class="wrap">
			<div class="container"  style="margin-bottom:5px;">
  <div class="row">
    <div class="col-4 my-auto">
<a href="http://line.me/ti/p/~@rphone"><img src="http://localhost/muaystep/wp-content/uploads/2018/11/line@.gif" alt="" class="alignnone size-full wp-image-86" /></a>
    </div>
    <div class="col-4 my-auto">
<a href="http://line.me/ti/p/~rphone1"><img src="http://localhost/muaystep/wp-content/uploads/2018/11/line.gif" alt="" class="alignnone size-full wp-image-85" /></a>
    </div>
    <div class="col-2 my-auto">
<a href="http://localhost/muaystep/wp-content/uploads/2018/11/qrcode1.jpg"><img src="http://localhost/muaystep/wp-content/uploads/2018/11/qrcode1.jpg" alt="" class="alignnone size-full wp-image-87" /></a>
    </div>
    <div class="col-2 my-auto">
<a href="images/qrcode2.jpg"><img src="http://localhost/muaystep/wp-content/uploads/2018/11/qrcode2.jpg" height="50" border="0">
</a>
    </div>
  </div>
</div>
			</div>
