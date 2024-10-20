
<?php
get_header();
?> 
<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>
<section class="blog-page news-slider search-offer">
  <div class="container">
    <h1 class="page-title sub">
      Результаты поиска
      <?php 
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        if ($current_page != 1) {
          echo ' - страница ' . $current_page; 
        }
      ?>
    </h1>
    <div class="search" style="margin-bottom: 60px">
      <?php echo do_shortcode('[fibosearch]'); ?>
    </div>
    <div class="wrap">
      <?php
      
      if (have_posts()) :
          while (have_posts()) : the_post();
              ?>
              <a href="<?php the_permalink(); ?>" class="item">
                <?php if (has_post_thumbnail()) : ?>
                    <img style="object-fit: contain; margin: auto;" itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php the_title(); ?>">
                <?php else : ?>
                    <img style="object-fit: contain; margin: auto;" itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
                <?php endif; ?>
                <div class="meta">
                  <b><?php the_title(); ?></b>
                  <div class="date"><?php echo get_the_date('d M Y') ?></div>
                </div>
              </a>
          <?php endwhile;
      endif;
      ?>
    </div>
    <?php
      if (function_exists('wp_pagenavi')) {
          wp_pagenavi();
      }
    ?>
    
  </div>
</section>




<?php
get_footer();

