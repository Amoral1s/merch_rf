
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

<section class="blog-page">
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
    <div class="search">
      <?php echo do_shortcode('[wd_asp id=1]'); ?>
    </div>
    <div class="wrap">
      <?php
      if (have_posts()) :
          while (have_posts()) : the_post();
              ?>
              <a href="<?php echo get_the_permalink(); ?>" class="item">
                  <div class="thumb">
                    <?php if (has_post_thumbnail()) : ?>
                        <img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo get_the_title(); ?>">
                    <?php else : ?>
                        <img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
                    <?php endif; ?>
                  </div>
                  <div class="meta">
                    <div class="date"><?php echo get_the_date('d M Y') ?></div>
                    <b class="roboto"><?php the_title(); ?></b>
                    <?php 
                      $subtitle = get_field('subtitle'); // Получаем значение поля ACF
                      $word_limit = 10; // Указываем количество слов

                      // Проверяем, если текст не пустой
                      if ($subtitle) {
                          $words = explode(' ', $subtitle); // Разделяем текст на слова
                          if (count($words) > $word_limit) {
                              $subtitle = implode(' ', array_slice($words, 0, $word_limit)) . '...'; // Обрезаем текст и добавляем троеточие
                          }
                          echo '<p>'.$subtitle.'</p>'; // Выводим ограниченный текст
                      }
                    ?>
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

