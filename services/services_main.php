
<?php $main_post_id = get_the_ID(); ?>

<section class="services-offer">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h1 class="page-title sub"><?php the_title(); ?></h1>
        <p class="subtitle"><?php echo get_field('subtitle', $main_post_id); ?></p>
        <div class="button call-order">
          Рассчитать стоимость
        </div>
      </div>
      <div class="right">
        <?php if (get_the_post_thumbnail_url()) : ?>
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/services/default.png" alt="<?php echo get_the_title(); ?>">
        <?php endif; ?>
      </div>
      <?php if (get_field('services_features_toggle', $main_post_id) == false) : ?>
        <?php if (get_field('services_features_toggle_uniq', $main_post_id) == false) : ?>
          <div class="bottom">
            <?php if (have_rows('services_features', 'blocks')) : while(have_rows('services_features', 'blocks')) : the_row(); ?>
              <div class="item">
                <div class="icon">
                  <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                </div>
                <div class="meta">
                  <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                  <p><?php echo get_sub_field('text'); ?></p>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        <?php else : ?>
          <div class="bottom">
            <?php if (have_rows('services_features', $main_post_id)) : while(have_rows('services_features', $main_post_id)) : the_row(); ?>
              <div class="item">
                <div class="icon">
                  <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                </div>
                <div class="meta">
                  <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                  <p><?php echo get_sub_field('text'); ?></p>
                </div>
              </div>
            <?php endwhile; endif; ?>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<?php if (get_field('products_title', $main_post_id)) : ?>
<section class="products-slider">
  <div class="container">
    <h2 class="title"><?php echo get_field('products_title', $main_post_id) ?></h2>
    <div class="wrap">
    
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('material_title', $main_post_id)) : ?>
  <?php if (get_field('material_toggle', $main_post_id) == false) : ?>
    <section class="material">
      <div class="container">
        <h2 class="title sub"><?php echo get_field('material_title', $main_post_id) ?></h2>
        <p class="subtitle"><?php echo get_field('material_subtitle', $main_post_id); ?></p>
        <div class="wrap slider-wrap">
          <div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php if (have_rows('material', 'blocks')) : while(have_rows('material', 'blocks')) : the_row(); ?>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                  </div>
                  <div class="meta">
                    <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                    <p><?php echo get_sub_field('text'); ?></p>
                    <div class="rat">
                      <?php 
                        $count_warm = get_sub_field('warm');
                        $count_width = get_sub_field('width');
                        $count_strength = get_sub_field('strength');
                        if ( !is_numeric($count_warm) ) {
                            $count_warm = 1;
                        } else {
                            $count_warm = (int) $count_warm;
                        }
                        if ( !is_numeric($count_width) ) {
                            $count_width = 1;
                        } else {
                            $count_width = (int) $count_width;
                        }
                        if ( !is_numeric($count_strength) ) {
                            $count_strength = 1;
                        } else {
                            $count_strength = (int) $count_strength;
                        }

                        // Ограничиваем значение от 1 до 3
                        $count_warm = max(1, min($count_warm, 3));
                        $count_width = max(1, min($count_width, 3));
                        $count_strength = max(1, min($count_strength, 3));
                      ?>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_warm; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Теплота</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_width; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Толщина</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_strength; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Прочность</span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>
    </section>
  <?php else : ?>
    <section class="material">
      <div class="container">
        <h2 class="title sub"><?php echo get_field('material_title', $main_post_id) ?></h2>
        <p class="subtitle"><?php echo get_field('material_subtitle', $main_post_id); ?></p>
        <div class="wrap slider-wrap">
          <div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <div class="swiper">
            <div class="swiper-wrapper">
              <?php if (have_rows('material', $main_post_id)) : while(have_rows('material', $main_post_id)) : the_row(); ?>
                <div class="item">
                  <div class="thumb">
                    <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
                  </div>
                  <div class="meta">
                    <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                    <p><?php echo get_sub_field('text'); ?></p>
                    <div class="rat">
                      <?php 
                        $count_warm = get_sub_field('warm');
                        $count_width = get_sub_field('width');
                        $count_strength = get_sub_field('strength');
                        if ( !is_numeric($count_warm) ) {
                            $count_warm = 1;
                        } else {
                            $count_warm = (int) $count_warm;
                        }
                        if ( !is_numeric($count_width) ) {
                            $count_width = 1;
                        } else {
                            $count_width = (int) $count_width;
                        }
                        if ( !is_numeric($count_strength) ) {
                            $count_strength = 1;
                        } else {
                            $count_strength = (int) $count_strength;
                        }

                        // Ограничиваем значение от 1 до 3
                        $count_warm = max(1, min($count_warm, 3));
                        $count_width = max(1, min($count_width, 3));
                        $count_strength = max(1, min($count_strength, 3));
                      ?>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_warm; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Теплота</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_width; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Толщина</span>
                      </div>
                      <div class="rat-item">
                        <div class="rat-item-stars">
                          <?php
                            for ($i = 0; $i < $count_strength; $i++) : ?>
                              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M8.75086 11.0382L11.4615 15.2623L14.17 13.5286L10.9918 9.52865L15.7287 8.19031L14.7741 5.23391L10.2612 7.04028L10.5759 2.1452L7.25369 2.08895L7.40253 6.99188L2.9533 5.03376L1.89915 7.95616L6.58801 9.45409L3.25054 13.3437L5.89833 15.1939L8.75086 11.0382Z" fill="#71E69B"/>
                              </svg>
                          <?php endfor; ?>
                        </div>
                        <span>Прочность</span>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; endif; ?>
            </div>
          </div>
          <div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>

<?php if (get_field('color_title', $main_post_id)) : ?>
  <?php if (get_field('color_toggle', $main_post_id) == false) : ?>
    <section class="colors">
      <div class="container">
        <div class="wrap">
          <h2 class="title sub"><?php echo get_field('color_title', $main_post_id) ?></h2>
          <p class="subtitle dark"><?php echo get_field('color_subtitle', $main_post_id); ?></p>
          <div class="gall">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php $gallery = get_field('color', 'blocks'); if ($gallery) : ?>
                <?php foreach( $gallery as $img ): ?>
                  <div class="item swiper-slide">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Цвет">
                    <?php if ($img['title']) : ?>
                    <span><?php echo $img['title']; ?></span>
                    <?php endif; ?>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  <?php else : ?>
    <section class="colors">
      <div class="container">
        <div class="wrap">
          <h2 class="title sub"><?php echo get_field('color_title', $main_post_id) ?></h2>
          <p class="subtitle dark"><?php echo get_field('color_subtitle', $main_post_id); ?></p>
          <div class="gall">
            <div class="swiper">
              <div class="swiper-wrapper">
                <?php $gallery = get_field('color', $main_post_id); if ($gallery) : ?>
                <?php foreach( $gallery as $img ): ?>
                  <div class="item">
                    <img src="<?php echo esc_url($img['url']); ?>" alt="Цвет">
                    <?php if ($img['title']) : ?>
                    <span><?php echo $img['title']; ?></span>
                    <?php endif; ?>
                  </div>
                <?php endforeach; endif; ?>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  <?php endif; ?>

<?php endif; ?>

<?php if (get_field('portfolio_title', $main_post_id)) : ?>
<section class="portfolio-slider">
  <div class="container">
    <div class="title-block">
      <h2 class="title sub"><?php echo get_field('portfolio_title', $main_post_id) ?></h2>
      <p class="subtitle"><?php echo get_field('portfolio_subtitle', $main_post_id); ?></p>
      <a href="<?php the_permalink(163); ?>" class="link-all">
        <span>Смотреть все</span>
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
      </a>
    </div>
      <?php
        // Создаем пустой массив для всех категорий
        $all_categories = [];

        // Запрашиваем все записи портфолио
        $portfolio_posts = get_posts([
            'post_type' => 'portfolio',
            'numberposts' => -1,
        ]);

        // Проходим по каждой записи и собираем значения из поля filter_type
        foreach ( $portfolio_posts as $post ) {
            $filter_types = get_field('filter_type', $post->ID);

            if ( $filter_types ) {
                // Разделяем строку по запятой и удаляем пробелы после запятых
                $categories = array_map('trim', explode(',', $filter_types));

                // Добавляем категории в общий массив
                $all_categories = array_merge($all_categories, $categories);
            }
        }

        // Оставляем только уникальные категории
        $unique_categories = array_unique($all_categories);
      ?>
    <div class="tabs">
        <?php foreach ( $unique_categories as $category ) : ?>
            <div class="tab"><?php echo esc_html( $category ); ?></div>
        <?php endforeach; ?>
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
            
            $args = array(
              'posts_per_page' => -1, // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
              'post_type'      => 'portfolio',
              'orderby' => 'date',
              'order' => 'DESC'
            );
            query_posts( $args );
            while(have_posts()): the_post(); 
          ?>
          <div class="item portfolio-popup-toggle swiper-slide" data-id="<?php echo get_the_ID(); ?>" data-type="<?php echo get_field('filter_type'); ?>" data-brand="<?php echo get_field('filter_branding'); ?>">
            <div class="thumb">
              <?php  if (has_post_thumbnail()) : ?>
                  <img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php the_title(); ?>">
              <?php else : ?>
                  <img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
              <?php endif; ?>
            </div>
            <div class="meta">
              <a href="<?php the_permalink(); ?>"  class="roboto"><?php the_title(); ?></a>
              <p><?php echo get_field('excerpt'); ?></p>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
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

<?php if (get_field('feedback_title', $main_post_id)) : ?>
<section class="feed-block">
  <div class="container">
    <h2 class="title"><?php echo get_field('feedback_title', $main_post_id) ?></h2>
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
              <a href="<?php echo get_sub_field('link'); ?>" class="btn">
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

<?php if (get_field('help_brand_title', $main_post_id)) : ?>
<section class="help-brand">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <h2 class="title"><?php echo get_field('help_brand_title', $main_post_id) ?></h2>
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

<?php if (get_field('banner_title', $main_post_id)) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title', $main_post_id) ?></b>
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

<?php if (get_field('table_title', $main_post_id)) : ?>
<section class="price-table">
  <div class="container">
    <h2 class="title"><?php echo get_field('table_title', $main_post_id) ?></h2>
    <div class="wrap">
      <?php
        $table = get_field( 'table', $main_post_id);
        if ( ! empty ( $table ) ) {
            echo '<table border="0">';
              if ( ! empty( $table['header'] ) ) {
                echo '<thead>';
                  echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                      echo '<th>';
                        echo $th['c'];
                      echo '</th>';
                    }
                  echo '</tr>';
                echo '</thead>';
              }
              echo '<tbody>';
                foreach ( $table['body'] as $tr ) {
                  echo '<tr>';
                    foreach ( $tr as $td ) {
                      echo '<td>';
                        echo $td['c'];
                      echo '</td>';
                    }
                  echo '</tr>';
                }
              echo '</tbody>';
            echo '</table>';
        }
      ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('seo_title_double', $main_post_id)) : ?>
	<section class="seo-double">
		<div class="container">
			<div class="wrap">
				<div class="left">
					<h2 class="title"><?php echo get_field('seo_title_double', $main_post_id) ?></h2>
					<div class="content">
						<?php echo get_field('seo_content_double', $main_post_id); ?>
					</div>
				</div>
				<?php if (get_field('seo_img_double', $main_post_id)) : ?>
				<div class="right">
					<img src="<?php echo get_field('seo_img_double', $main_post_id); ?>" alt="<?php echo get_field('seo_title_double', $main_post_id) ?>">
				</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>

<section class="banner-treb">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <svg xmlns="http://www.w3.org/2000/svg" width="127" height="116" viewBox="0 0 127 116" fill="none">
          <rect x="7.46966" y="6.72259" width="89.0716" height="101.396" stroke="url(#paint0_linear_5001_11099)" stroke-width="3.36119"/>
          <rect x="1.6806" y="1.6806" width="12.8846" height="12.8846" fill="white" stroke="#37D7D0" stroke-width="3.36119"/>
          <rect x="1.47097" y="100.627" width="13.3038" height="13.3038" fill="white" stroke="#E6776D" stroke-width="2.94194"/>
          <rect x="89.0712" y="1.6806" width="12.8846" height="12.8846" fill="white" stroke="#38D7CF" stroke-width="3.36119"/>
          <rect x="89.0712" y="100.836" width="12.8846" height="12.8846" fill="white" stroke="#B08194" stroke-width="3.36119"/>
          <path d="M120.511 32.1678L110.949 32.7748L116.374 45.2332L113.004 46.7232L107.579 34.2649L100.646 40.9424L100.66 13.7769L120.511 32.1678Z" fill="white"/>
          <path d="M126.347 34.2368L114.566 34.9956L119.58 46.502L111.757 49.9511L106.743 38.4447L98.2217 46.6675L98.2354 8.21631L126.347 34.2368ZM110.949 32.7743L120.511 32.1673L100.66 13.7764L100.647 40.9419L107.579 34.2644L113.004 46.7227L116.374 45.2327L110.949 32.7743Z" fill="#0C0C0C"/>
          <defs>
            <linearGradient id="paint0_linear_5001_11099" x1="52.0055" y1="5.04199" x2="52.0055" y2="109.799" gradientUnits="userSpaceOnUse">
              <stop stop-color="#65E5A5"/>
              <stop offset="0.328555" stop-color="#07C8FA"/>
              <stop offset="0.725" stop-color="#5A91D2"/>
              <stop offset="1" stop-color="#EF7566"/>
            </linearGradient>
          </defs>
        </svg>
      </div>
      <div class="center">
        <b class="title sub">Требования к макетам</b>
        <p>
          Ознакомьтесь с требованиям к передаче файлов в печать, это обеспечит максимально быстрый и четкий результат
        </p>
      </div>
      <a href="<?php the_permalink(421); ?>" class="button button-green btn-arr">
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
</section>

<?php if (get_field('how_title', $main_post_id)) : ?>
  <?php if (get_field('how_toggle', $main_post_id) == false) : ?>
    <section class="how">
      <div class="container">
        <div class="title-block">
          <h2 class="title sub"><?php echo get_field('how_title', $main_post_id) ?></h2>
          <p class="subtitle"><?php echo get_field('how_subtitle', $main_post_id); ?></p>
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
          <h2 class="title sub"><?php echo get_field('how_title', $main_post_id) ?></h2>
          <p class="subtitle"><?php echo get_field('how_subtitle', $main_post_id); ?></p>
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
              <?php $i = 1; if (have_rows('how', $main_post_id)) : while(have_rows('how', $main_post_id)) : the_row(); ?>
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

<?php if (get_field('video_on', $main_post_id) == true) : ?>
<section class="big-video">
  <div class="container">
    <?php 
      $video_image = 'background-image: url('.get_field('video_img', $main_post_id).')';
      if (!get_field('video_img', $main_post_id)) {
        $video_image = '';
      }
      $video_link = get_field('video_link', $main_post_id); 
      if (get_field('video_toggle', $main_post_id) == true) {
        $video_link = get_field('video_file', $main_post_id); 
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

<?php if (get_field('cat_slider_title', $main_post_id)) : ?>
<section class="cat-slider">
  <div class="container">
    <h2 class="title"><?php echo get_field('cat_slider_title', $main_post_id); ?></h2>
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

<?php if (get_field('equip_title', $main_post_id)) : ?>
<section class="equip-slider">
  <div class="container">
    <div class="title-block">
      <h2 class="title sub"><?php echo get_field('equip_title', $main_post_id) ?></h2>
      <p class="subtitle"><?php echo get_field('equip_subtitle', $main_post_id); ?></p>
      <a href="<?php the_permalink(449); ?>" class="link-all">
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
          <?php if (have_rows('equip', 449)) : while(have_rows('equip', 449)) : the_row(); ?>
            <div class="item swiper-slide">
              <div class="thumb">
                <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
              <b class="roboto"><?php echo get_sub_field('title'); ?></b>
              <p><?php echo get_sub_field('content'); ?></p>
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

<?php if (get_field('tech_title', $main_post_id)) : ?>
<section class="tech-dark tech">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('tech_title', $main_post_id) ?></h2>
    <p class="subtitle"><?php echo get_field('tech_subtitle', $main_post_id); ?></p>
    <div class="wrap slider-wrap">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем поле с ID записей
            $services_ids = get_field('tech', $main_post_id);
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

<?php if (get_field('all_services_title', $main_post_id)) : ?>
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

<?php if (get_field('seo_title', $main_post_id)) : ?>
<section class="seo">
  <div class="container">
    <h2 class="title"><?php echo get_field('seo_title', $main_post_id) ?></h2>
    <div class="content">
      <?php echo get_field('seo_content', $main_post_id); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('news_title', $main_post_id)) : ?>
<section class="news news-slider">
  <div class="container">
    <div class="title-row">
      <h2 class="title"><?php echo get_field('news_title', $main_post_id) ?></h2>
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
              <img src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo get_the_title(); ?>">
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

<?php 
  $term_id = 'city';
?>
<?php if (get_field('city_title', $main_post_id)) : ?>
  <?php if (get_field('city_toggle', $main_post_id) == false) : ?>
    <section class="city">
      <div class="container">
        <h2 class="title"><?php echo get_field('city_title', $main_post_id) ?></h2>
        <ul class="wrap">
          <?php if (have_rows('city', $term_id)) : while(have_rows('city', $term_id)) : the_row(); ?>
            <li class="item">
              <?php if (get_sub_field('link')) : ?>
                <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('name'); ?></a>
              <?php else : ?>
                <span><?php echo get_sub_field('name'); ?></span>
              <?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
        </ul>
        <div class="moar-btn" style="display: none">
          Показать все
        </div>
      </div>
    </section>
  <?php else : ?>
    <section class="city">
      <div class="container">
        <h2 class="title"><?php echo get_field('city_title', 'home') ?></h2>
        <ul class="wrap">
          <?php if (have_rows('city', $main_post_id)) : while(have_rows('city', $main_post_id)) : the_row(); ?>
            <li class="item">
              <?php if (get_sub_field('link')) : ?>
                <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('name'); ?></a>
              <?php else : ?>
                <span><?php echo get_sub_field('name'); ?></span>
              <?php endif; ?>
            </li>
          <?php endwhile; endif; ?>
        </ul>
        <div class="moar-btn" style="display: none">
          Показать все
        </div>
      </div>
    </section>
  <?php endif; ?>
<?php endif; ?>



