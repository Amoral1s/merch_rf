<?php
/**
 Template Name: О компании
 */

get_header();
?>

<section class="about-offer page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs dark-crumbs">', '</p>'); }
    ?>
    <div class="wrap">
      <div class="left">
        <h1 class="page-title sub"><?php the_title(); ?></h1>
        <div class="content">
          <?php echo get_field('offer_content'); ?>
        </div>
        <div class="button call-callback">
          Свяжитесь с нами
        </div>
      </div>
      <div class="right">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="О компании">
      </div>
    </div>
  </div>
</section>

<?php if (get_field('about_toggle') == false) : ?>
<section class="utp-vid">
  <div class="container">
    <div class="title-row">
      <div class="left">
        <h2 class="page-title"><?php echo get_field('vid_title', 'options') ?></h2>
        <p><?php echo get_field('vid_subtitle', 'options'); ?></p>
      </div>
      <div class="right">
        <div class="row">
          <b>
            <div class="line">
              <svg xmlns="http://www.w3.org/2000/svg" width="203" height="61" viewBox="0 0 203 61" fill="none">
                <path opacity="0.22" d="M95.6019 57.1166C224.6 69.3232 219.863 12.3779 160.312 5.91725C5.20453 -10.9103 -76.7111 42.5758 109.361 50.1561" stroke="#885C8C" stroke-width="4"/>
              </svg>
            </div>
            <span><?php echo get_field('vid_year', 'options'); ?></span>
          </b>
          <span><?php echo get_field('vid_year_text', 'options'); ?></span>
        </div>
        <p><?php echo get_field('vide_year_text_bottom', 'options'); ?></p>
      </div>
    </div>
    <?php 
      $video_src = get_field('vid_link', 'options');

      if (get_field('vid_toggle', 'options') == true) {
        $video_src = get_field('vid_file', 'options');
      } else {
        $video_src = get_field('vid_link', 'options');
      }
    ?>
    <div class="wrap video-data" data-src="<?php echo $video_src; ?>">
      <img src="<?php echo get_field('vid_thumb', 'options'); ?>" alt="Видео о компании">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="84" viewBox="0 0 74 84" fill="none">
          <path d="M71 36.8038C75 39.1132 75 44.8868 71 47.1962L9.50001 82.7032C5.50001 85.0126 0.500004 82.1258 0.500004 77.507L0.500007 6.49296C0.500007 1.87416 5.50001 -1.0126 9.50001 1.29681L71 36.8038Z" fill="white"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php else : ?>
<section class="utp-vid">
  <div class="container">
    <div class="title-row">
      <div class="left">
        <h2 class="title"><?php echo get_field('vid_title') ?></h2>
        <p><?php echo get_field('vid_subtitle'); ?></p>
      </div>
      <div class="right">
        <div class="row">
          <b>
            <div class="line">
              <svg xmlns="http://www.w3.org/2000/svg" width="203" height="61" viewBox="0 0 203 61" fill="none">
                <path opacity="0.22" d="M95.6019 57.1166C224.6 69.3232 219.863 12.3779 160.312 5.91725C5.20453 -10.9103 -76.7111 42.5758 109.361 50.1561" stroke="#885C8C" stroke-width="4"/>
              </svg>
            </div>
            <span><?php echo get_field('vid_year'); ?></span>
          </b>
          <span><?php echo get_field('vid_year_text'); ?></span>
        </div>
        <p><?php echo get_field('vide_year_text_bottom'); ?></p>
      </div>
    </div>
    <?php 
      $video_src = get_field('vid_link');

      if (get_field('vid_toggle') == true) {
        $video_src = get_field('vid_file');
      } else {
        $video_src = get_field('vid_link');
      }
    ?>
    <div class="wrap video-data" data-src="<?php echo $video_src; ?>">
      <img src="<?php echo get_field('vid_thumb'); ?>" alt="Видео о компании">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="74" height="84" viewBox="0 0 74 84" fill="none">
          <path d="M71 36.8038C75 39.1132 75 44.8868 71 47.1962L9.50001 82.7032C5.50001 85.0126 0.500004 82.1258 0.500004 77.507L0.500007 6.49296C0.500007 1.87416 5.50001 -1.0126 9.50001 1.29681L71 36.8038Z" fill="white"/>
        </svg>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('history_title')) : ?>
<section class="about-history">
  <div class="container">
    <h2 class="title"><?php echo get_field('history_title') ?></h2>
    <div class="wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('history')) : while(have_rows('history')) : the_row(); ?>
            <div class="item swiper-slide">
              <b><?php echo get_sub_field('year'); ?></b>
              <p><?php echo get_sub_field('text'); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('point_title')) : ?>
<section class="about-point">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title"><?php echo get_field('point_title') ?></h2>
        <p><?php echo get_field('point_subtitle'); ?></p>
      </div>
      <div class="right">
        <b><?php echo get_field('point_title_white'); ?></b>
        <p><?php echo get_field('point_subtitle_white'); ?></p>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('prod_title','options')) : ?>
<section class="prod-home">
  <div class="container">
    <div class="title-row">
      <h2 class="title">Наши основные направления</h2>
    </div>
    <div class="wrap prod-home-services">
      <?php if (have_rows('prod_block','options')) : while(have_rows('prod_block','options')) : the_row(); ?>
        <?php 
          $color_class = 'black';
          if (get_sub_field('color') == true) {
            $color_class = 'white';
          }
          $width_class = '';
          if (get_sub_field('razmer') == 'big') {
            $width_class = 'big';
          } elseif (get_sub_field('razmer') == 'normal') {
            $width_class = 'normal';
          } else {
            $width_class = 'small';
          }
          $bg_color = get_sub_field('czvet_bg');
        ?>
        <a href="<?php echo get_sub_field('link'); ?>" 
          class="item <?php echo $color_class; echo ' '; echo $width_class; ?>"
          style="background-image: url(<?php echo get_sub_field('bg_izobrazhenie'); ?>); 
          <?php if ($bg_color) { echo 'background-color: '.$bg_color; } ?>"
        >
          <?php if ($width_class != 'big') : ?>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M17 7.00012L6 18.0001" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
                <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          <?php endif; ?>
          <b><?php echo get_sub_field('title'); ?></b>
          <?php if (get_sub_field('text') && $width_class == 'big') : ?>
            <p><?php echo get_sub_field('text'); ?></p>
          <?php endif; ?>
        </a>
      <?php endwhile; endif; ?>
    </div>
    <div class="mob-btns">
      <div class="show-more">
        <span>Развернуть</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
      <a href="<?php echo get_field('prod_link_all', 'options'); ?>" class="link-all-mob">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17 7.00012L6 18.0001" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
  </div>
</section>
<?php endif; ?>

<section class="portfolio-slider portfolio-block equip-slider">
  <div class="container">
    <div class="title-row">
      <h2 class="title">
        Наше оборудование
      </h2>
      <a href="/equipment/" class="link-all">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17 7L6 18" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
    <div class="wrap slider-wrap active">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12.0002L20 12.0002" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 17.0001L4.7071 12.7072C4.3738 12.3739 4.2071 12.2072 4.2071 12.0001C4.2071 11.793 4.3738 11.6263 4.7071 11.293L9 7.0001" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
          $eq_posts = new WP_Query(array(
            'post_type'      => 'equipment',
            'posts_per_page' => 10,
            'orderby' => 'date',
            'order' => 'DESC'
          ));
          if ($eq_posts->have_posts()) :
            while ($eq_posts->have_posts()) : $eq_posts->the_post();
              $gallery = get_field('gallery');
              ?>
              <div class="item swiper-slide portfolio-popup-toggle" data-id="<?php echo get_the_ID(  ); ?>">
                <div class="thumb">
                  <img src="<?php echo esc_url($gallery[0]['sizes']['large']); ?>" alt="<?php the_title(); ?>">
                </div>
                <b><?php the_title(); ?></b>
                <div class="content"><?php the_excerpt(); ?></div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 11.9998H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 6.99988L19.2929 11.2928C19.6262 11.6261 19.7929 11.7928 19.7929 11.9999C19.7929 12.207 19.6262 12.3737 19.2929 12.707L15 16.9999" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots" style="display: none"></div>
    </div>
  </div>
</section>

<?php if (get_field('team_title')) : ?>
<section class="team">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('team_title') ?></h2>
    <p class="subtitle"><?php echo get_field('team_subtitle'); ?></p>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12.0002L20 12.0002" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 17.0001L4.7071 12.7072C4.3738 12.3739 4.2071 12.2072 4.2071 12.0001C4.2071 11.793 4.3738 11.6263 4.7071 11.293L9 7.0001" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('team')) : while(have_rows('team')) : the_row(); ?>
            <div class="item swiper-slide">
              <img src="<?php echo get_sub_field('avatar'); ?>" alt="<?php echo get_sub_field('imya'); ?>">
              <b><?php echo get_sub_field('imya'); ?></b>
              <p><?php echo get_sub_field('dolzhnost'); ?></p>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 11.9998H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 6.99988L19.2929 11.2928C19.6262 11.6261 19.7929 11.7928 19.7929 11.9999C19.7929 12.207 19.6262 12.3737 19.2929 12.707L15 16.9999" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots filled" style="display: none"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('portfolio_title', 'options')) : ?>
<section class="portfolio-slider portfolio-block">
  <div class="container">
    <h2 class="title">
      <?php echo get_field('portfolio_title', 'options') ?>
      <a href="<?php echo get_field('portfolio_link', 'options'); ?>" class="link-all-mob" style="display: none">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </h2>
    <div class="tabs-row">
      <div class="tabs">
        <?php
        $categories = get_terms(array(
          'taxonomy' => 'portfolio-category',
          'hide_empty' => true,
          'number' => 5
        ));

        if (!empty($categories) && !is_wp_error($categories)) :
          foreach ($categories as $index => $category) : ?>
            <div class="tab<?php echo $index === 0 ? ' active' : ''; ?>" data-category="<?php echo esc_attr($category->slug); ?>">
              <?php echo esc_html($category->name); ?>
            </div>
          <?php endforeach; 
        endif; ?>
      </div>
      <a href="<?php echo get_field('portfolio_link', 'options'); ?>" class="link-all">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M17 7.00012L6 18.0001" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
            <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
    <?php foreach ($categories as $index => $category) : ?>
      <div class="wrap slider-wrap <?php echo $index === 0 ? ' active' : ''; ?>" data-category="<?php echo esc_attr($category->slug); ?>">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M5 12.0002L20 12.0002" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 17.0001L4.7071 12.7072C4.3738 12.3739 4.2071 12.2072 4.2071 12.0001C4.2071 11.793 4.3738 11.6263 4.7071 11.293L9 7.0001" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php
            $portfolio_posts = new WP_Query(array(
              'post_type' => 'portfolio',
              'tax_query' => array(
                array(
                  'taxonomy' => 'portfolio-category',
                  'field' => 'slug',
                  'terms' => $category->slug,
                ),
              ),
            ));

            if ($portfolio_posts->have_posts()) :
              while ($portfolio_posts->have_posts()) : $portfolio_posts->the_post();
                $gallery = get_field('gallery');
                ?>
                <div class="item swiper-slide portfolio-popup-toggle" data-id="<?php echo get_the_ID(  ); ?>">
                  <div class="thumb">
                    <img src="<?php echo esc_url($gallery[0]['sizes']['large']); ?>" alt="<?php the_title(); ?>">
                  </div>
                  <b><?php the_title(); ?></b>
                </div>
              <?php endwhile;
              wp_reset_postdata();
            endif; ?>
          </div>
        </div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19 11.9998H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15 6.99988L19.2929 11.2928C19.6262 11.6261 19.7929 11.7928 19.7929 11.9999C19.7929 12.207 19.6262 12.3737 19.2929 12.707L15 16.9999" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
</section>
<?php endif; ?>

<?php if (get_field('feed_title', 'options')) : ?>
<section class="feed-block">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title sub"><?php echo get_field('feed_title', 'options') ?></h2>
        <p class="subtitle"><?php echo get_field('feed_subtitle', 'options'); ?></p>
        <a href="<?php echo get_field('feed_link', 'options'); ?>" class="link-all">
          <span>Смотреть все</span>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M17 7L6 18" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#8D3595" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </a>
        <?php if (get_field('feed_ya_link', 'feed')) : ?>
          <a href="<?php echo get_field('feed_ya_link', 'feed'); ?>" class="yandex-rating" target="blank" rel="nofollow" noindex>
            <div class="icon star">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.88583 2.00269C8.34269 1.08244 9.65928 1.08244 10.1161 2.00269L11.9332 5.66273L15.998 6.25347C17.0146 6.40122 17.429 7.65048 16.6855 8.37051L13.7471 11.2161L14.4405 15.2354C14.6164 16.2556 13.5427 17.018 12.6362 16.5441L9.00099 14.6432L5.36573 16.5441C4.4593 17.018 3.38553 16.2556 3.56151 15.2354L4.25484 11.2161L1.31648 8.37051C0.572976 7.65048 0.987359 6.40122 2.00398 6.25347L6.06881 5.66273L7.88583 2.00269Z" fill="#F5AF40"/>
              </svg>
            </div>
            <b><?php echo get_field('feed_ya', 'feed'); ?></b>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M11.9984 21.6004C17.3004 21.6004 21.5984 17.3023 21.5984 12.0004C21.5984 6.69846 17.3004 2.40039 11.9984 2.40039C6.6965 2.40039 2.39844 6.69846 2.39844 12.0004C2.39844 17.3023 6.6965 21.6004 11.9984 21.6004Z" fill="#FC3F1D"/>
                <path d="M15.4737 18.0274H13.3663V7.60442H12.4275C10.7067 7.60442 9.80527 8.46484 9.80527 9.74924C9.80527 11.2064 10.427 11.8816 11.7132 12.742L12.7731 13.4563L9.72689 18.0257H7.46094L10.2025 13.9462C8.62598 12.8204 7.73884 11.7213 7.73884 9.86681C7.73884 7.5492 9.35457 5.97266 12.4132 5.97266H15.4595V18.0239H15.4737V18.0274Z" fill="white"/>
              </svg>
            </div>
            <p>Рейтинг организации в Яндексе</p>
          </a>
        <?php endif; ?>
      </div>
      <div class="right slider-wrap">
        <div class="arr arr-prev">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php $i = 0; if (have_rows('feed_text', 'feed')) : while(have_rows('feed_text', 'feed')) : the_row(); ?>
            <?php if ($i < 10) : ?>
              <div class="item swiper-slide <?php if (get_sub_field('feed_toggle') == 'none') { echo 'no-btn'; } ?>">
                <div class="top">
                  <div class="avatar">
                    <?php if (get_sub_field('avatar')) : ?>
                      <img src="<?php echo get_sub_field('avatar')['sizes']['thumbnail']; ?>" alt="<?php echo get_sub_field('name'); ?>">
                    <?php else : ?>
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.8063 14.8372C17.9226 14.9064 18.0663 14.9875 18.229 15.0793C18.9418 15.4814 20.0193 16.0893 20.7575 16.8118C21.2191 17.2637 21.6578 17.8592 21.7375 18.5888C21.8223 19.3646 21.4839 20.0927 20.8048 20.7396C19.6334 21.8556 18.2276 22.75 16.4093 22.75H7.59104C5.77274 22.75 4.36695 21.8556 3.1955 20.7396C2.51649 20.0927 2.17802 19.3646 2.26283 18.5888C2.34257 17.8592 2.78123 17.2637 3.2429 16.8118C3.98106 16.0893 5.05857 15.4814 5.77139 15.0793C5.93405 14.9876 6.07773 14.9064 6.19404 14.8372C9.74809 12.7209 14.2523 12.7209 17.8063 14.8372Z" fill="white"/>
                        <path opacity="0.4" d="M6.75 6.5C6.75 3.6005 9.1005 1.25 12 1.25C14.8995 1.25 17.25 3.6005 17.25 6.5C17.25 9.39949 14.8995 11.75 12 11.75C9.1005 11.75 6.75 9.39949 6.75 6.5Z" fill="white"/>
                      </svg>
                    <?php endif; ?>
                  </div>
                  <div class="meta">
                    <div class="name">
                      <b><?php echo get_sub_field('name'); ?></b>
                      <div class="date"><?php echo get_sub_field('date'); ?></div>
                    </div>
                    <div class="rating">
                      <?php 
                          $rating = get_sub_field('rating'); // Получаем рейтинг, число от 1 до 5
                      ?>

                      <?php for ($i = 1; $i <= 5; $i++): ?>
                          <?php if ($i <= $rating): ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.88583 2.00269C8.34269 1.08244 9.65928 1.08244 10.1161 2.00269L11.9332 5.66273L15.998 6.25347C17.0146 6.40122 17.429 7.65048 16.6855 8.37051L13.7471 11.2161L14.4405 15.2354C14.6164 16.2556 13.5427 17.018 12.6362 16.5441L9.00099 14.6432L5.36573 16.5441C4.4593 17.018 3.38553 16.2556 3.56151 15.2354L4.25484 11.2161L1.31648 8.37051C0.572976 7.65048 0.987359 6.40122 2.00398 6.25347L6.06881 5.66273L7.88583 2.00269Z" fill="#F5AF40"/>
                            </svg>
                          <?php else: ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.88583 2.00269C8.34269 1.08244 9.65928 1.08244 10.1161 2.00269L11.9332 5.66273L15.998 6.25347C17.0146 6.40122 17.429 7.65048 16.6855 8.37051L13.7471 11.2161L14.4405 15.2354C14.6164 16.2556 13.5427 17.018 12.6362 16.5441L9.00099 14.6432L5.36573 16.5441C4.4593 17.018 3.38553 16.2556 3.56151 15.2354L4.25484 11.2161L1.31648 8.37051C0.572976 7.65048 0.987359 6.40122 2.00398 6.25347L6.06881 5.66273L7.88583 2.00269Z" fill="#9CA3AF" />
                            </svg>
                          <?php endif; ?>
                      <?php endfor; ?>
                  </div>
                  </div>
                </div>
                <div class="content">
                  <?php echo get_sub_field('feed'); ?>
                </div>
                <?php if (get_sub_field('feed_toggle') != 'none') : ?>
                <div class="btn-row">
                  <?php if (get_sub_field('feed_toggle') == 'video') : ?>
                    <?php 
                      $video_link = get_sub_field('video_link');
                      if (get_sub_field('video_file') && get_sub_field('video_toggle') == true) {
                        $video_link = get_sub_field('video_file');
                      }
                    ?>
                    <div class="btn btn-video video-data" data-src="<?php echo $video_link; ?>">
                      <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                          <path d="M18.8906 12.846C18.5371 14.189 16.8667 15.138 13.5257 17.0361C10.296 18.8709 8.6812 19.7884 7.37983 19.4196C6.8418 19.2671 6.35159 18.9776 5.95624 18.5787C5 17.6139 5 15.7426 5 12C5 8.2574 5 6.3861 5.95624 5.42132C6.35159 5.02245 6.8418 4.73288 7.37983 4.58042C8.6812 4.21165 10.296 5.12907 13.5257 6.96393C16.8667 8.86197 18.5371 9.811 18.8906 11.154C19.0365 11.7084 19.0365 12.2916 18.8906 12.846Z" stroke="#885C8C" stroke-width="1.5" stroke-linejoin="round"/>
                        </svg>
                      </div>
                      <span>Смотреть видеоотзыв</span>
                    </div>
                  <?php endif; ?>
                  <?php if (get_sub_field('feed_toggle') == 'link') : ?>
                    <a target="blank" rel="nofollow" noindex class="btn btn-link" href="<?php echo get_sub_field('feed_link'); ?>">
                      <?php if (get_sub_field('feed_icon') != 'none') : ?>
                      <div class="icon">
                        <?php if (get_sub_field('feed_icon') == 'yandex') : ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M11.9984 21.6004C17.3004 21.6004 21.5984 17.3023 21.5984 12.0004C21.5984 6.69846 17.3004 2.40039 11.9984 2.40039C6.6965 2.40039 2.39844 6.69846 2.39844 12.0004C2.39844 17.3023 6.6965 21.6004 11.9984 21.6004Z" fill="#FC3F1D"/>
                            <path d="M15.4737 18.0274H13.3663V7.60442H12.4275C10.7067 7.60442 9.80527 8.46484 9.80527 9.74924C9.80527 11.2064 10.427 11.8816 11.7132 12.742L12.7731 13.4563L9.72689 18.0257H7.46094L10.2025 13.9462C8.62598 12.8204 7.73884 11.7213 7.73884 9.86681C7.73884 7.5492 9.35457 5.97266 12.4132 5.97266H15.4595V18.0239H15.4737V18.0274Z" fill="white"/>
                          </svg>
                        <?php else : ?>
                          <img src="<?php echo get_sub_field('feed_icon_file'); ?>" alt="icon">
                        <?php endif; ?>
                      </div>
                      <?php endif; ?>
                      <span>Оригинал отзыва</span>
                    </a>
                  <?php endif; ?>
                </div>
                <?php endif; ?>
              </div>
            <?php endif; ?>
            <?php $i++;  endwhile; endif; ?>
          </div>
        </div>
        <div class="arr arr-next">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M19 12H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M15 7L19.2929 11.2929C19.6262 11.6262 19.7929 11.7929 19.7929 12C19.7929 12.2071 19.6262 12.3738 19.2929 12.7071L15 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="dots" style="display: none"></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('partners_gall', 'options')) : ?>
<section class="partners">
  <div class="container">
    <div class="wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php $gallery = get_field('partners_gall', 'options'); if ($gallery) : ?>
          <?php foreach( $gallery as $img ): ?>
            <div class="swiper-slide item">
              <?php echo '<img src="' . esc_url($img['url']) . '" alt="Партнёр">'; ?>
            </div>
          <?php endforeach; endif; ?>
        </div>
      </div>
      <div class="swiper-pagination dots" style="display: none"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('filialy', 'options')) : ?>
<section class="map">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <?php if (have_rows('filialy', 'options')) : ?>
          <?php $first = true; ?>
          <?php while(have_rows('filialy', 'options')) : the_row(); ?>
          <div class="item<?php echo $first ? ' active' : ''; ?>" data-coordinat="<?php echo get_sub_field('koordinaty'); ?>">
            <b><?php echo get_sub_field('zagolovok'); ?></b>
            <p><?php echo get_sub_field('adres'); ?></p>
            <a href="tel:<?php echo get_sub_field('telefon'); ?>" class="phone" target="blank"><?php echo get_sub_field('telefon'); ?></a>
            <span><?php echo get_sub_field('rezhim_raboty'); ?></span>
          </div>
          <?php $first = false; ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="right">
        <!-- Карта будет выведена здесь -->
        <div id="yandex-map" style="width: 100%; height: 100%;"></div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>


<?php
get_footer();
