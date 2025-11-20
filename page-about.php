<?php
/**
 Template Name: О компании
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

<section class="big-video about-offer">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <p class="subtitle dark"><?php echo get_field('subtitle'); ?></p>
    <?php if (get_field('block_video_toggle') == true) : ?>
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
    <?php endif; ?>
  </div>
</section>

<?php if (get_field('history_title')) : ?>
<section class="about-history">
  <div class="container">
    <div class="title-row">
      <h2 class="title"><?php echo get_field('history_title'); ?></h2>
      <p class="text"><?php echo get_field('history_subtitle'); ?></p>
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
          <?php if (have_rows('history')) : while(have_rows('history')) : the_row(); ?>
            <div class="item swiper-slide">
              <b class="roboto"><?php echo get_sub_field('year'); ?></b>
              <p><?php echo get_sub_field('text'); ?></p>
            </div>
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

<?php if (get_field('help_brand_title')) : ?>
<section class="help-brand">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title"><?php echo get_field('help_brand_title') ?></h2>
        <div class="content">
          <?php echo get_field('help_brand_content', 'home'); ?>
        </div>
        <div class="row">
          <a href="<?php echo get_the_permalink(310); ?>" class="button">
            Подробнее о нас
          </a>
          <div class="meta">
            <b><?php echo get_field('help_brand_orders_num', 'home'); ?></b>
            <p><?php echo get_field('help_brand_orders_text', 'home'); ?></p>
          </div>
          <div class="meta">
            <b><?php echo get_field('help_brand_deliv_num', 'home'); ?></b>
            <p><?php echo get_field('help_brand_deliv_text', 'home'); ?></p>
          </div>
        </div>
      </div>
      <div class="right">
        <b class="roboto"><?php echo get_field('help_brand_brands_title', 'home'); ?></b>
        <div class="swiper">
          <div class="swiper-wrapper">
            <?php $gallery = get_field('help_brand_brands', 'home'); if ($gallery) : ?>
            <?php foreach( $gallery as $img ): ?>
              <div class="swiper-slide item">
                <?php echo '<img src="' . esc_url($img) . '"Бренд">'; ?>
              </div>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('mission_title')) : ?>
<section class="mission">
  <div class="container">
    <div class="wrap">
      <h2 class="title sub"><?php echo get_field('mission_title') ?></h2>
      <p class="subtitle"><?php echo get_field('mission_subtitle'); ?></p>
      <?php if (have_rows('mission')) : while(have_rows('mission')) : the_row(); ?>
        <div class="item">
          <b class="roboto"><?php echo get_sub_field('title'); ?></b>
          <p><?php echo get_sub_field('text'); ?></p>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('feed_title')) : ?>
<section class="feed-block">
  <div class="container">
    <h2 class="title"><?php echo get_field('feed_title') ?></h2>
    <div class="feed-block-gall slider-wrap">
      <b class="roboto">Реальные фотографии наших клиентов</b>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php $index = 0; $gallery = get_field('feed_gall', 'feed'); if ($gallery) : ?>
          <?php foreach( $gallery as $img ): ?>
            <?php if ($index < 6) : ?>
              <div class="swiper-slide item gall-item">
                <?php 
                  echo '<img src="' . esc_url($img['sizes']['medium']) . '" alt="Отзыв">';
                ?>
              </div>
            <?php endif; ?>
          <?php $index++; endforeach; endif; ?>
          <a href="<?php echo get_the_permalink(256); ?>" class="swiper-slide item link">
            <?php echo get_field('feed_gall_count', 'feed'); ?>
          </a>
        </div>
      </div>
    </div>
    <div class="hidden-gallery mag-toggle" style="display: none">
      <?php $gallery = get_field('feed_gall', 'feed'); if ($gallery) : ?>
        <?php foreach( $gallery as $img ): ?>
            <a href="<?php echo esc_url($img['url']); ?>" class="item">
              <?php 
                echo '<img src="' . esc_url($img['sizes']['medium']) . '" alt="Отзыв">';
              ?>
            </a>
        <?php endforeach; endif; ?>
    </div>
    <div class="feed-block-text slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('feed', 'feed')) : while(have_rows('feed', 'feed')) : the_row(); ?>
            <div class="item swiper-slide <?php if (get_sub_field('btn_toggle') == true) { echo 'with-btn'; } ?>" style="width: 100%">
              <div class="top">
                <div class="avatar">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M17.8063 14.8372C17.9226 14.9064 18.0663 14.9875 18.229 15.0793C18.9418 15.4814 20.0193 16.0893 20.7575 16.8118C21.2191 17.2637 21.6578 17.8592 21.7375 18.5888C21.8223 19.3646 21.4839 20.0927 20.8048 20.7396C19.6334 21.8556 18.2276 22.75 16.4093 22.75H7.59104C5.77274 22.75 4.36695 21.8556 3.1955 20.7396C2.51649 20.0927 2.17802 19.3646 2.26283 18.5888C2.34257 17.8592 2.78123 17.2637 3.2429 16.8118C3.98106 16.0893 5.05857 15.4814 5.77139 15.0793C5.93404 14.9875 6.07773 14.9064 6.19404 14.8372C9.74809 12.7209 14.2523 12.7209 17.8063 14.8372Z" fill="#71E69B"/>
                    <path d="M6.75018 6.5C6.75018 3.6005 9.10068 1.25 12.0002 1.25C14.8997 1.25 17.2502 3.6005 17.2502 6.5C17.2502 9.39949 14.8997 11.75 12.0002 11.75C9.10068 11.75 6.75018 9.39949 6.75018 6.5Z" fill="#71E69B"/>
                  </svg>
                </div>
                <div class="meta">
                  <b class="roboto"><?php echo get_sub_field('name'); ?></b>
                  <span><?php echo get_sub_field('date'); ?></span>
                  <div class="rating">
                    <?php 
                        $rating = get_sub_field('rating'); // Получаем рейтинг, число от 1 до 5
                    ?>
                    <?php for ($i = 1; $i <= 5; $i++): ?>
                        <?php if ($i <= $rating): ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_3026_2265)">
                              <path d="M8.99756 0.9375C9.78454 0.9375 10.4044 1.5319 10.8001 2.33393L12.1217 4.99887C12.1617 5.08135 12.2568 5.19748 12.3996 5.30373C12.5422 5.40986 12.6819 5.46841 12.7738 5.48385L15.166 5.8846C16.0302 6.0298 16.7544 6.45337 16.9896 7.19093C17.2245 7.92788 16.8803 8.6937 16.2588 9.3162L16.2582 9.31687L14.3998 11.1907C14.3262 11.2649 14.2437 11.4048 14.1919 11.587C14.1405 11.7681 14.136 11.933 14.1593 12.0395L14.1596 12.041L14.6913 14.359C14.9118 15.3238 14.8387 16.2805 14.1583 16.7807C13.4755 17.2825 12.5425 17.06 11.6949 16.5552L9.45244 15.2167C9.35824 15.1605 9.19654 15.1149 9.00131 15.1149C8.80751 15.1149 8.64244 15.1599 8.54209 15.2183L8.54066 15.2191L6.30265 16.5549C5.45602 17.0615 4.52414 17.28 3.84132 16.7776C3.16135 16.2774 3.08459 15.3225 3.30582 14.3585L3.83741 12.041L3.83773 12.0395C3.86104 11.933 3.85648 11.7681 3.80509 11.587C3.75334 11.4048 3.67083 11.2649 3.59717 11.1907L1.73737 9.31545C1.11997 8.69295 0.776894 7.9278 1.00995 7.19194C1.24368 6.45394 1.96656 6.02985 2.83123 5.88454L5.22148 5.48414L5.22223 5.48401C5.30986 5.46881 5.44751 5.41092 5.58985 5.30451C5.73244 5.19791 5.82768 5.08151 5.86783 4.99887L5.86985 4.99475L7.1897 2.33323L7.19023 2.33218C7.58974 1.53081 8.21149 0.9375 8.99756 0.9375Z" fill="#FFB800"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_3026_2265">
                                <rect width="18" height="18" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        <?php else: ?>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                            <g clip-path="url(#clip0_3026_2265)">
                              <path d="M8.99756 0.9375C9.78454 0.9375 10.4044 1.5319 10.8001 2.33393L12.1217 4.99887C12.1617 5.08135 12.2568 5.19748 12.3996 5.30373C12.5422 5.40986 12.6819 5.46841 12.7738 5.48385L15.166 5.8846C16.0302 6.0298 16.7544 6.45337 16.9896 7.19093C17.2245 7.92788 16.8803 8.6937 16.2588 9.3162L16.2582 9.31687L14.3998 11.1907C14.3262 11.2649 14.2437 11.4048 14.1919 11.587C14.1405 11.7681 14.136 11.933 14.1593 12.0395L14.1596 12.041L14.6913 14.359C14.9118 15.3238 14.8387 16.2805 14.1583 16.7807C13.4755 17.2825 12.5425 17.06 11.6949 16.5552L9.45244 15.2167C9.35824 15.1605 9.19654 15.1149 9.00131 15.1149C8.80751 15.1149 8.64244 15.1599 8.54209 15.2183L8.54066 15.2191L6.30265 16.5549C5.45602 17.0615 4.52414 17.28 3.84132 16.7776C3.16135 16.2774 3.08459 15.3225 3.30582 14.3585L3.83741 12.041L3.83773 12.0395C3.86104 11.933 3.85648 11.7681 3.80509 11.587C3.75334 11.4048 3.67083 11.2649 3.59717 11.1907L1.73737 9.31545C1.11997 8.69295 0.776894 7.9278 1.00995 7.19194C1.24368 6.45394 1.96656 6.02985 2.83123 5.88454L5.22148 5.48414L5.22223 5.48401C5.30986 5.46881 5.44751 5.41092 5.58985 5.30451C5.73244 5.19791 5.82768 5.08151 5.86783 4.99887L5.86985 4.99475L7.1897 2.33323L7.19023 2.33218C7.58974 1.53081 8.21149 0.9375 8.99756 0.9375Z" fill="#9CA3AF"/>
                            </g>
                            <defs>
                              <clipPath id="clip0_3026_2265">
                                <rect width="18" height="18" fill="white"/>
                              </clipPath>
                            </defs>
                          </svg>
                        <?php endif; ?>
                    <?php endfor; ?>
                  </div>
                </div>
              </div>
              <div class="content">
                <?php echo get_sub_field('content'); ?>
              </div>
              <?php if (get_sub_field('btn_toggle') == true) : ?>
              <a href="<?php echo get_sub_field('btn_link'); ?>" class="btn">
                <?php if (get_sub_field('btn_icon') == 'yandex') : ?>
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M12.0001 22.9256C18.0342 22.9256 22.9258 18.034 22.9258 11.9999C22.9258 5.96581 18.0342 1.07422 12.0001 1.07422C5.966 1.07422 1.0744 5.96581 1.0744 11.9999C1.0744 18.034 5.966 22.9256 12.0001 22.9256Z" fill="#FC3F1D"/>
                      <path d="M15.9536 18.8586H13.5552V6.99626H12.4868C10.5283 6.99626 9.50241 7.9755 9.50241 9.43726C9.50241 11.0957 10.21 11.8641 11.6738 12.8433L12.8801 13.6563L9.41321 18.8566H6.83435L9.95453 14.2138C8.16027 12.9325 7.15063 11.6816 7.15063 9.57107C7.15063 6.93341 8.98948 5.13916 12.4705 5.13916H15.9374V18.8546H15.9536V18.8586Z" fill="white"/>
                    </svg>
                  </div>
                <?php elseif (get_sub_field('btn_icon') == 'google') : ?>
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="48px" height="48px">
                      <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"/>
                      <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"/>
                      <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"/>
                      <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"/>
                    </svg>
                  </div>
                <?php endif; ?>
                <span>Оригинал отзыва</span>
              </a>
              <?php endif; ?>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 17.0001L19.2928 12.7072C19.6262 12.3739 19.7928 12.2072 19.7928 12.0001C19.7928 11.793 19.6262 11.6263 19.2928 11.293L15 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots" style="display: none"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('banner_vac_toggle') == false) : ?>
<section class="vacancy-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <img src="<?php echo get_field('vac_banner_bg', 'blocks'); ?>" alt="<?php echo get_field('vac_banner_title', 'blocks'); ?>">
      </div>
      <div class="center">
        <b class="roboto"><?php echo get_field('vac_banner_title', 'blocks'); ?></b>
        <p><?php echo get_field('vac_banner_subtitle', 'blocks'); ?></p>
      </div>
      <div class="right">
        <a href="<?php echo get_field('vac_banner_link', 'blocks'); ?>" class="button button-green">
          <span>Перейти</span>
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M17 7L6 18" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round"/>
              <path d="M11 6H17C17.4714 6 17.7071 6 17.8536 6.14645C18 6.29289 18 6.5286 18 7V13" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('best_cases_title')) : ?>
  <?php if (get_field('cases_toggle') == false) : ?>
  <section class="best-cases">
    <div class="container">
      <h2 class="title sub"><?php echo get_field('best_cases_title') ?></h2>
      <p class="subtitle"><?php echo get_field('best_cases_subtitle'); ?></p>
      <div class="wrap">
        <?php
          $cases_post_ids = get_field('best_cases', 'home');
          $args = array(
            'post_type'      => 'portfolio',
            'post__in'       => $slider_posts_id,
            'orderby'        => 'post__in',
            'posts_per_page' => 4
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
        ?>
        <div class="item">
          <div class="thumb">
            <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo get_the_title(); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php the_title(); ?></b>
            <p><?php echo get_field('excerpt'); ?></p>
            <?php if (get_field('mini_logo')) : ?>
            <div class="icon">
              <img src="<?php echo get_field('mini_logo'); ?>" alt="<?php echo get_the_title(); ?>">
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php } }  wp_reset_postdata(); ?>
        <div class="best-cases-link">
          <b class="roboto"><?php echo get_field('best_cases_banner_title', 'home') ?></b>
          <p><?php echo get_field('best_cases_banner_subtitle', 'home') ?></p>
          <a href="<?php echo get_the_permalink(163); ?>" class="link-all">
            <span>Смотреть все</span>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php else : ?>
  <section class="best-cases">
    <div class="container">
      <h2 class="title sub"><?php echo get_field('best_cases_title') ?></h2>
      <p class="subtitle"><?php echo get_field('best_cases_subtitle'); ?></p>
      <div class="wrap">
        <?php
          $cases_post_ids = get_field('best_cases');
          $args = array(
            'post_type'      => 'portfolio',
            'post__in'       => $slider_posts_id,
            'orderby'        => 'post__in',
            'posts_per_page' => 4
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
        ?>
        <div class="item">
          <div class="thumb">
            <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo get_the_title(); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php the_title(); ?></b>
            <p><?php echo get_field('excerpt'); ?></p>
            <?php if (get_field('mini_logo')) : ?>
            <div class="icon">
              <img src="<?php echo get_field('mini_logo'); ?>" alt="<?php echo get_the_title(); ?>">
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php } }  wp_reset_postdata(); ?>
        <div class="best-cases-link">
          <b class="roboto"><?php echo get_field('best_cases_banner_title') ?></b>
          <p><?php echo get_field('best_cases_banner_subtitle') ?></p>
          <a href="<?php echo get_the_permalink(163); ?>" class="link-all">
            <span>Смотреть все</span>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <?php endif; ?>
<?php endif; ?>

<?php if (get_field('team_title')) : ?>
<section class="team">
  <div class="container">
    <h2 class="title"><?php echo get_field('team_title') ?></h2>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('team','team')) : while(have_rows('team','team')) : the_row(); ?>
          <div class="item swiper-slide">
            <div class="meta">
              <b class="roboto"><?php echo get_sub_field('name'); ?></b>
              <p><?php echo get_sub_field('place'); ?></p>
            </div>
            <div class="thumb">
              <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('name'); ?>">
            </div>
          </div>
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
    <?php if (get_field('team_title', 'team')) : ?>
      <div class="team-bottom">
        <div class="left">
          <b class="roboto">
            <?php echo get_field('team_title', 'team'); ?>
          </b>
          <p>
            <?php echo get_field('team_subtitle', 'team'); ?>
          </p>
        </div>
        <div class="center">
          <div class="avatar">
            <img src="<?php echo get_field('leader_img', 'team'); ?>" alt="<?php echo get_field('team_title', 'team'); ?>">
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_field('leader_name', 'team'); ?></b>
            <p><?php echo get_field('leader_place', 'team'); ?></p>
          </div>
        </div>
        <div class="right">
          <svg xmlns="http://www.w3.org/2000/svg" width="163" height="129" viewBox="0 0 163 129" fill="none">
            <path d="M65.529 17.4868C55.252 42.1454 45.3854 66.9457 36.0579 91.9784C35.9234 92.3394 27.8357 114.272 26.7939 117.776C26.0824 120.169 25.2887 122.896 28.4172 120.286C30.861 118.247 41.9385 106.56 42.719 105.728C49.9769 97.9875 53.3458 94.1226 60.1833 86.5122C67.6604 78.1898 61.5947 84.8382 60.799 87.0699C60.4444 88.0646 62.8846 86.552 63.7937 86.0102C66.2674 84.5359 71.5222 81.1154 73.8133 79.5957C75.7885 78.2856 77.5411 76.5742 79.7188 75.6354C80.4272 75.33 79.1054 77.0554 78.6832 77.6992C77.7755 79.0836 73.7033 84.2089 78.5433 81.269C365.618 -93.1065 -203.657 252.302 85.5122 76.5837C86.4105 76.0378 88.3015 74.636 87.3594 76.8904C86.873 78.0545 83.9409 82.8421 83.4131 83.7233C82.89 84.5967 82.3322 85.4506 81.8458 86.3448C81.6683 86.6711 81.0551 87.4108 81.426 87.3767C82.0457 87.3198 82.4388 86.6529 82.9094 86.2472C84.1006 85.2203 85.2545 84.1508 86.4078 83.0818C88.989 80.6894 94.8171 75.1477 97.2951 72.7629C101.582 68.6366 105.127 65.3771 107.595 59.9339C114.261 45.2255 119.282 29.7642 124.135 14.3911C125.084 11.3851 126.021 8.37447 126.878 5.34115C127.272 3.9477 129.123 1.87402 127.886 1.11596C126.704 0.392027 126.11 3.24833 125.353 4.40687C122.991 8.0219 120.752 11.7161 118.538 15.423C103.397 40.7751 88.8503 66.5964 76.6121 93.4844C75.596 95.7169 74.6194 97.9732 73.8133 100.289C73.6511 100.756 73.2735 101.96 73.7294 101.767C74.8437 101.296 75.4572 100.077 76.3182 99.2296C77.8268 97.7441 79.3285 96.2516 80.8383 94.7673C86.7177 88.987 92.6225 83.2314 98.5265 77.4761" stroke="#71E69B" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('about_gall_title')) : ?>
<section class="about-gallery">
  <div class="container">
    <h2 class="title"><?php echo get_field('about_gall_title') ?></h2>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper mag-toggle">
          <?php $gallery = get_field('about_gall'); if ($gallery) : ?>
          <?php foreach( $gallery as $img ): ?>
            <a href="<?php echo esc_url($img['url']) ?>" class="swiper-slide item">
              <img src="<?php echo esc_url($img['sizes']['large']); ?>" alt="Галерея">
            </a>
          <?php endforeach; endif; ?>
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

<?php if (get_field('banner_title')) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title') ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle'); ?></p>
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
