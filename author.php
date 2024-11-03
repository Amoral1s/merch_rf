<?php get_header(); ?>

<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>

<section class="author-page">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="avatar">
          <?php 
            // Получаем URL профиля автора
            $author_id = get_the_author_meta('ID');
            $author_url = get_author_posts_url($author_id); 
            $user_id = 'user_' . $author_id;
            $author_name = get_field('author_name', $user_id);
            $author_avatar = get_field('author_avatar', $user_id);
            $author_position = get_field('author_place', $user_id);
          ?>
          <div class="author">
              <div class="avatar">
                  <?php
                  // Если аватар не задан, используем SVG-заглушку
                  if ($author_avatar) {
                      echo '<img src="' . esc_url($author_avatar) . '" alt="Аватар автора">';
                  } else {
                      // SVG-заглушка
                      echo '<svg width="96" height="96" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <circle cx="12" cy="12" r="10" stroke="#333" stroke-width="2"/>
                          <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4z" fill="#333"/>
                          <path d="M6 18c1.33-2 3.67-3 6-3s4.67 1 6 3" stroke="#333" stroke-width="2" stroke-linecap="round"/>
                          </svg>';
                  }
                  ?>
              </div>
              <div class="meta">
                <div itemprop="author" class="name">
                    <h1 class="page-title sub"><?php echo esc_html($author_name ? $author_name : 'Администратор'); ?></h1>
                    <span><?php echo esc_html($author_position ? $author_position : 'Автор статьи'); ?></span>
                </div>
                <div class="row">
                  <?php if (get_field('author_count_rew', $user_id)) : ?>
                    <div class="item">
                      <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                          <g clip-path="url(#clip0_3126_8015)">
                            <path d="M8.99658 0.9375C9.78356 0.9375 10.4034 1.5319 10.7991 2.33393L12.1207 4.99887C12.1608 5.08135 12.2558 5.19748 12.3986 5.30373C12.5412 5.40986 12.681 5.46841 12.7728 5.48385L15.165 5.8846C16.0292 6.0298 16.7535 6.45337 16.9886 7.19093C17.2235 7.92788 16.8793 8.6937 16.2579 9.3162L16.2573 9.31687L14.3988 11.1907C14.3252 11.2649 14.2427 11.4048 14.1909 11.587C14.1396 11.7681 14.135 11.933 14.1583 12.0395L14.1586 12.041L14.6903 14.359C14.9109 15.3238 14.8377 16.2805 14.1573 16.7807C13.4745 17.2825 12.5415 17.06 11.6939 16.5552L9.45146 15.2167C9.35726 15.1605 9.19556 15.1149 9.00033 15.1149C8.80653 15.1149 8.64146 15.1599 8.54111 15.2183L8.53968 15.2191L6.30167 16.5549C5.45505 17.0615 4.52316 17.28 3.84034 16.7776C3.16038 16.2774 3.08361 15.3225 3.30484 14.3585L3.83643 12.041L3.83676 12.0395C3.86007 11.933 3.85551 11.7681 3.80411 11.587C3.75236 11.4048 3.66985 11.2649 3.59619 11.1907L1.7364 9.31545C1.119 8.69295 0.775917 7.9278 1.00897 7.19194C1.2427 6.45394 1.96558 6.02985 2.83026 5.88454L5.2205 5.48414L5.22126 5.48401C5.30889 5.46881 5.44653 5.41092 5.58887 5.30451C5.73147 5.19791 5.8267 5.08151 5.86685 4.99887L5.86887 4.99475L7.18872 2.33323L7.18925 2.33218C7.58876 1.53081 8.21051 0.9375 8.99658 0.9375Z" fill="#FFB800"/>
                          </g>
                          <defs>
                            <clipPath id="clip0_3126_8015">
                              <rect width="18" height="18" fill="white"/>
                            </clipPath>
                          </defs>
                        </svg>
                      </div>
                      <div class="ratingValue">
                        <?php echo get_field('author_rew_average', $user_id); ?>
                      </div>
                      <div class="votes">
                        <?php echo get_field('author_count_rew', $user_id); ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <?php if (get_field('author_worktime', $user_id)) : ?>
                    <div class="item">
                      <p><?php echo get_field('author_worktime', $user_id); ?></p>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
              
          </div>
        </div>
      </div>
      <?php if (get_field('author_social', $user_id)) : ?>
        <div class="right">
          <b class="roboto">Соцсети автора</b>
          <div class="social">
            <?php if (have_rows('author_social', $user_id)) : while(have_rows('author_social', $user_id)) : the_row(); ?>
              <a href="<?php echo get_sub_field('link'); ?>" target="blank" rel="nofollow" noindex>
                <img src="<?php echo get_sub_field('icon'); ?>" alt="icon">
              </a>
            <?php endwhile; endif; ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if (get_field('author_content', $user_id)) : ?>
        <div class="bottom content">
          <?php echo get_field('author_content', $user_id); ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
    
</section>

<?php if (get_field('author_avard_title', $user_id)) : ?>
<section class="about-history author-avards">
  <div class="container">
    <h2 class="title"><?php echo get_field('author_avard_title', $user_id) ?></h2>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('author_avards', $user_id)) : while(have_rows('author_avards', $user_id)) : the_row(); ?>
            <div class="item swiper-slide">
              <b class="roboto"><?php echo get_sub_field('title'); ?></b>
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

<section class="news news-slider">
  <div class="container">
    <div class="title-row">
      <h2 class="title">Статьи автора</h2>
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
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="item swiper-slide">
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
          <?php endwhile; else : ?>
              <p>У данного автора пока нет публикаций.</p>
          <?php endif; ?>
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


<section class="author-feed">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title">Отзывы об авторе</h2>
        <div class="feed-block">
          <?php if (have_rows('author_feed', $user_id)) : while(have_rows('author_feed', $user_id)) : the_row(); ?>
          <div class="item" style="width: 100%">
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
              <?php echo get_sub_field('feed'); ?>
            </div>
          </div>
          <?php endwhile; endif; ?>
          <?php if (!get_field('author_feed', $user_id)) : ?>
          <div class="no-feed">
            Отзывов об этом авторе пока нету...
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="right form">
        <b class="mini-title">Оставить отзыв</b>
        <?php echo do_shortcode('[contact-form-7 id="ec8d01f" title="Отзыв (Автор)"]'); ?>
      </div>
    </div>
  </div>
</section>


<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title', 'home') ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle', 'home'); ?></p>
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



<?php get_footer(); ?>