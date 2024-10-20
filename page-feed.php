<?php
/**
 Template Name: Отзывы
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

<section class="feed-videos page-feed">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <div class="content"><?php the_content(); ?></div>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('video_feed', 'feed')) : while(have_rows('video_feed', 'feed')) : the_row(); ?>
          <?php 
            $video_image = 'background-image: url('.get_sub_field('prevyu_video').')';
            if (!get_sub_field('prevyu_video')) {
              $video_image = '';
            }
            $video_link = get_sub_field('video_link'); 
            if (get_sub_field('video_toggle') == true) {
              $video_link = get_sub_field('video_file'); 
            }
          ?>
          <div class="item swiper-slide video-data" data-src="<?php echo $video_link; ?>" style="<?php echo $video_image; ?>">
            <div class="play">
              <svg xmlns="http://www.w3.org/2000/svg" width="34" height="37" viewBox="0 0 34 37" fill="none">
                <path d="M31.847 15.0186C34.554 16.5502 34.554 20.4498 31.847 21.9814L6.46977 36.3399C3.80326 37.8486 0.500002 35.9223 0.500002 32.8585L0.500003 4.14146C0.500004 1.07772 3.80326 -0.848629 6.46978 0.660095L31.847 15.0186Z" fill="white"/>
              </svg>
            </div>
            <div class="meta">
              <b><?php echo get_sub_field('imya'); ?></b>
              <p><?php echo get_sub_field('data_gorod'); ?></p>
            </div>
          </div>
          <?php endwhile; endif; ?>
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
</section>

<?php if (get_field('feed_ya_title', 'feed')) : ?>
<section class="feed-block">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title sub"><?php echo get_field('feed_ya_title', 'feed') ?></h2>
        <p class="subtitle"><?php echo get_field('feed_ya_subtitle', 'feed'); ?></p>
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

<?php if (get_field('blag_title', 'feed')) : ?>
<section class="sertificates">
  <div class="container">
    <h2 class="title"><?php echo get_field('blag_title', 'feed'); ?></h2>
    <div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper mag-toggle">
          <?php $gallery = get_field('blag', 'feed'); if ($gallery) : ?>
          <?php foreach( $gallery as $img ): ?>
            <a href="<?php echo esc_url($img['url']); ?>" class="swiper-slide item">
              <?php if ($img['alt']) {
                echo '<img src="' . esc_url($img['sizes']['large']) . '" alt="' . esc_attr($img['alt']) . '">';
              } else {
                echo '<img src="' . esc_url($img['sizes']['large']) . '" alt="Благодарность">';
              } ?>
            </a>
          <?php endforeach; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 7L19.2929 11.2929C19.6262 11.6262 19.7929 11.7929 19.7929 12C19.7929 12.2071 19.6262 12.3738 19.2929 12.7071L15 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots filled" style="display: none"></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('page_feed_title', 'feed')) : ?>
<section class="only-feed-text">
  <div class="container">
    <h2 class="title"><?php echo get_field('page_feed_title', 'feed'); ?></h2>
    <div class="wrap">
      <?php if (have_rows('feed_text_page', 'feed')) : while(have_rows('feed_text_page', 'feed')) : the_row(); ?>
        <div class="item">
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
        </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="button moar-btn">Показать еще</div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('get_feed_title', 'feed')) : ?>
<section class="get-feedback">
  <div class="container">
    <div class="wrap">
      <h2 class="title sub"><?php echo get_field('get_feed_title', 'feed') ?></h2>
      <p class="subtitle"><?php echo get_field('get_feed_subtitle', 'feed'); ?></p>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="799a87a" title="Оставить отзыв (Страница)"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('consult_banner_title', 'options')) : ?>
<section class="consult-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="title sub"><?php echo get_field('consult_banner_title', 'options'); ?></b>
        <p class="subtitle"><?php echo get_field('consult_banner_subtitle', 'options'); ?></p>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="89d9af1" title="Бесплатная консультация (Баннер)"]'); ?>
        </div>
      </div>
      <div class="right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/consult/phone.png" alt="Консультация">
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
get_footer();
