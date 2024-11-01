<?php
@include('inc/main.php');
@include('inc/posts.php');
@include('inc/seo.php');
//@include('inc/shortcodes.php');
@include('inc/acf_blocks.php');
//@include('inc/unisender.php');
@include('inc/services.php');
@include('inc/portfolio.php');
@include('inc/author.php');
@include('inc/woocommerce.php');

/* @include('inc/woo_single_product.php');
@include('inc/woo_review.php');
@include('inc/woo_loop_item.php');
@include('inc/woo_catalog.php'); */


// Отключение Gravatar
add_filter( 'get_avatar', '__return_false' );









