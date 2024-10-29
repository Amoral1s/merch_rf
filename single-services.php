<?php get_header(); ?>

<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>

<?php 
if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Проверяем термин таксономии 'services-template'
        if ( has_term( 'template-main', 'services-template' ) ) {
            get_template_part( './services/services_main' );
        } elseif ( has_term( 'template-print', 'services-template' ) ) { 
            get_template_part( './services/services_print' );
        } elseif ( has_term( 'template-type', 'services-template' ) ) { 
            get_template_part( './services/services_type' );
        }

    endwhile;
endif;
?>

<?php get_footer(); ?>

