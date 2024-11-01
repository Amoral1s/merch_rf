<?php
/**
 Template Name: Оборудование
 */

get_header();
?>

<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>

<section class="equip-page pc-mb60">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="wrap">
      <?php if (have_rows('equip')) : while(have_rows('equip')) : the_row(); ?>
        <div class="item">
          <div class="thumb">
            <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
          </div>
          <b class="roboto"><?php echo get_sub_field('title'); ?></b>
          <p><?php echo get_sub_field('content'); ?></p>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
 
<?php if (get_field('how_title')) : ?>
  <?php if (get_field('how_toggle') == false) : ?>
  <section class="how">
    <div class="container">
      <div class="title-block">
        <h2 class="title sub"><?php echo get_field('how_title') ?></h2>
        <p class="subtitle"><?php echo get_field('how_subtitle'); ?></p>
        <?php if (get_field('how_link', 'home')) : ?>
        <a href="<?php echo get_field('how_link', 'home'); ?>" class="link-all">
          <span>Подробнее</span>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </a>
        <?php endif; ?>
      </div>
      <div class="wrap slider-wrap">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php $i = 1; if (have_rows('how','home')) : while(have_rows('how','home')) : the_row(); ?>
              <div class="item swiper-slide">
                <div class="num"><?php echo $i; ?></div>
                <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                <p><?php echo get_sub_field('text'); ?></p>
              </div>
            <?php $i++; endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php else : ?>
  <section class="how">
    <div class="container">
      <div class="title-block">
        <h2 class="title sub"><?php echo get_field('how_title') ?></h2>
        <p class="subtitle"><?php echo get_field('how_subtitle'); ?></p>
        <?php if (get_field('how_link', 'home')) : ?>
        <a href="<?php echo get_field('how_link', 'home'); ?>" class="link-all">
          <span>Подробнее</span>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </a>
        <?php endif; ?>
      </div>
      <div class="wrap slider-wrap">
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php $i = 1; if (have_rows('how')) : while(have_rows('how')) : the_row(); ?>
              <div class="item swiper-slide">
                <div class="num"><?php echo $i; ?></div>
                <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                <p><?php echo get_sub_field('text'); ?></p>
              </div>
            <?php $i++; endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>

<?php endif; ?>


<?php if (get_field('block_video_toggle') == false) : ?>
<section class="big-video">
  <div class="container">
    <?php 
      $video_image = 'background-image: url('.get_field('video_img').')';
      if (!get_field('video_img')) {
        $video_image = '';
      }
      $video_link = get_field('video_link'); 
      if (get_field('video_toggle') == true) {
        $video_link = get_field('video_file'); 
      }
    ?>
    <div class="wrap video-data" data-src="<?php echo $video_link; ?>" style="<?php echo $video_image; ?>">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="56" viewBox="0 0 50 56" fill="none">
          <path d="M47 22.8039C51 25.1133 51 30.8868 47 33.1962L9.49999 54.8468C5.49999 57.1562 0.499997 54.2694 0.499997 49.6506L0.499999 6.34935C0.5 1.73055 5.5 -1.15619 9.5 1.15321L47 22.8039Z" fill="white"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('main_services_title')) : ?>
  <?php $services_ids = get_field('services'); ?>
  <?php if (empty($services_ids)) : ?>
    <section class="services-block">
      <div class="container">
        <h2 class="title"><?php echo get_field('main_services_title') ?></h2>
        <div class="wrap">
          <?php
            $args = array(
                'post_type' => 'services',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services-category',
                        'field'    => 'slug',
                        'terms'    => 'services-main',
                    ),
                ),
            );
            // Выполняем запрос
            $query = new WP_Query($args);

            // Проверяем наличие постов
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                  <?php 
                    $post_bg = get_field('export_bg'); 
                    $post_title = get_field('export_title');
                    if (!$post_title) {
                      $post_title = get_the_title();
                    }
                  ?>
                  <a href="<?php the_permalink(); ?>" class="item" style="background-image: url(<?php echo $post_bg['url']; ?>)">
                      <span class="roboto"><?php echo $post_title; ?></span>
                  </a>
                <?php endwhile;
                wp_reset_postdata(); // Сбрасываем глобальные данные
            endif;
            ?>
        </div>
      </div>
    </section>
  <?php else : ?>
    <section class="services-block">
      <div class="container">
        <h2 class="title"><?php echo get_field('main_services_title') ?></h2>
        <div class="wrap">
          <?php
            // Если не пустое, выводим только записи с указанными ID
              $args = array(
                'post_type' => 'services',
                'post__in' => $services_ids, // Используем ID из поля
                'orderby' => 'post__in', // Сохраняем порядок из массива
            );
            // Выполняем запрос
            $query = new WP_Query($args);

            // Проверяем наличие постов
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post(); ?>
                    <?php 
                      $post_bg = get_field('export_bg'); 
                      $post_title = get_field('export_title');
                      if (!$post_title) {
                        $post_title = get_the_title();
                      }
                    ?>
                    <a href="<?php the_permalink(); ?>" class="item" style="background-image: url(<?php echo $post_bg['url']; ?>)">
                        <span class="roboto"><?php echo $post_title; ?></span>
                    </a>
                <?php endwhile;
                wp_reset_postdata(); // Сбрасываем глобальные данные
            endif;
            ?>
        </div>
      </div>
    </section>
  <?php endif; ?>

<?php endif; ?>

<?php if (get_field('tech_title')) : ?>
<section class="tech-dark tech">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('tech_title') ?></h2>
    <p class="subtitle"><?php echo get_field('tech_subtitle'); ?></p>
    <div class="wrap slider-wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем поле с ID записей
            $services_ids = get_field('tech');
            // Проверяем, если поле пустое
            if (empty($services_ids)) {
                // Если пустое, то выводим все записи из категории services-technology
                $args = array(
                    'post_type' => 'services',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'services-category',
                            'field'    => 'slug',
                            'terms'    => 'services-technology',
                        ),
                    ),
                );
            } else {
                // Если не пустое, выводим только записи с указанными ID
                $args = array(
                    'post_type' => 'services',
                    'post__in' => $services_ids, // Используем ID из поля
                    'orderby' => 'post__in', // Сохраняем порядок из массива
                );
            }
            
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
          ?>
          <a href="<?php the_permalink(); ?>" class="item swiper-slide">
            <?php if (get_field('export_title')) : ?>
              <b class="roboto"><?php echo get_field('export_title'); ?></b>
            <?php else : ?>
              <b class="roboto"><?php the_title(); ?></b>
            <?php endif; ?>
            <?php if (get_field('export_subtitle')) : ?>
              <p><?php echo get_field('export_subtitle'); ?></p>
            <?php endif; ?>
            <div class="meta">
              <div class="thumb">
                <?php 
                  $image = get_field('export_bg'); // Получаем массив изображения
                  if ($image) : 
                ?>
                  <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                <?php endif; ?>
              </div>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                  <path d="M9 18.311L14.2929 13.0181C14.6262 12.6848 14.7929 12.5181 14.7929 12.311C14.7929 12.1039 14.6262 11.9372 14.2929 11.6039L9 6.31104" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
            </div>
          </a>
          <?php } }  wp_reset_postdata(); ?>
        </div>
      </div>
      
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('cat_slider_title')) : ?>
<section class="cat-slider">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('cat_slider_title'); ?></h2>
    <p class="subtitle"><?php echo get_field('cat_slider_subtitle'); ?></p>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('cat_slider','home')) : while(have_rows('cat_slider','home')) : the_row(); ?>
          <a href="<?php echo get_sub_field('link'); ?>" class="item swiper-slide">
            <?php if (get_sub_field('img')) : ?>
              <div class="thumb">
                <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
            <?php else : ?>
              <div class="thumb">
                <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
            <?php endif; ?>
            <b><?php echo get_sub_field('title'); ?></b>
          </a>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 17.0001L19.2928 12.7072C19.6262 12.3739 19.7928 12.2072 19.7928 12.0001C19.7928 11.793 19.6262 11.6263 19.2928 11.293L15 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('all_services_title')) : ?>
<section class="all-services-block">
  <div class="container">
    <h2 class="title"><?php echo get_field('all_services_title') ?></h2>
    <div class="wrap">
      <?php
      // Получаем родительскую категорию "Все услуги" (services-all)
      $parent_term = get_term_by('slug', 'services-all', 'services-category');

      if ($parent_term) {
          // Получаем все дочерние категории
          $child_terms = get_terms(array(
              'taxonomy' => 'services-category',
              'parent' => $parent_term->term_id,
              'hide_empty' => false,
          ));

          // Проходим по каждой дочерней категории
          foreach ($child_terms as $child_term) :
              ?>
              <div class="item">
                <b class="roboto"><?php echo esc_html($child_term->name); // Название подкатегории ?></b>
                <ul>
                  <?php
                  // Получаем все записи типа services, принадлежащие текущей подкатегории
                  $services = get_posts(array(
                      'post_type' => 'services',
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'services-category',
                              'field' => 'term_id',
                              'terms' => $child_term->term_id,
                          ),
                      ),
                      'posts_per_page' => -1, // Выводим все записи
                  ));

                  // Выводим каждую запись как элемент списка
                  foreach ($services as $service) :
                      ?>
                      <li>
                        <a href="<?php echo get_permalink($service->ID); ?>"><?php echo get_the_title($service->ID); ?></a>
                      </li>
                  <?php endforeach; ?>
                </ul>
              </div>
          <?php endforeach;
      }
      ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('news_title')) : ?>
<section class="news news-slider">
  <div class="container">
    <div class="title-row">
      <h2 class="title"><?php echo get_field('news_title') ?></h2>
      <a href="<?php echo get_field('news_link', 'home'); ?>" class="link-all">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            $news_ids = get_field('news_ids', 'home');
            $args = array();
            if ($news_ids) {
              $args = array(
                'post_type'      => 'post',
                'post__in'       => $news_ids,
                'orderby'        => 'post__in',
              );
            } else {
              $args = array(
              'post_type'      => 'post',
              'orderby'        => 'date',
              'posts_per_page' => 10
              );
            }
            $query = new WP_Query( $args );
            if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                $query->the_post();
          ?>
          <a href="<?php echo get_the_permalink(); ?>" class="item swiper-slide">
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
          <?php } }  wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 17.0001L19.2928 12.7072C19.6262 12.3739 19.7928 12.2072 19.7928 12.0001C19.7928 11.793 19.6262 11.6263 19.2928 11.293L15 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('banner_title','home')) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title','home') ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle','home'); ?></p>
        </div>
        <div class="manager">
          <div class="avatar">
            <img src="<?php echo get_field('banner_avatar','options'); ?>" alt="<?php echo get_field('banner_name','options'); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_field('banner_name','options'); ?></b>
            <p><?php echo get_field('banner_place','options'); ?></p>
          </div>
        </div>
      </div>
      <div class="right form form-white">
        <b class="roboto mini-title">
          Оставьте заявку
        </b>
        <p class="mini-subtitle">
          Мы свяжемся с вами в течение рабочего дня
        </p>
        <?php echo do_shortcode('[contact-form-7 id="4925d8f" title="Оставьте заявку (баннер)"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
get_footer();
