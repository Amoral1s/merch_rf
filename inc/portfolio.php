<?php 
function enqueue_portfolio_scripts() {
  // Регистрация скрипта
  wp_register_script(
    'portfolio-script', // Название скрипта
    get_template_directory_uri() . '/js/portfolio-popup.js', // Путь к скрипту
    array('jquery'), // Зависимости (в данном случае jQuery)
    null, // Версия скрипта, можно оставить null
    true // Загружаем в футере
  );

  // Подключение скрипта
  wp_enqueue_script('portfolio-script');

  // Передача переменных в скрипт
  wp_localize_script('portfolio-script', 'portfolioAjax', array(
    'ajaxurl' => admin_url('admin-ajax.php')
  ));
}

add_action('wp_enqueue_scripts', 'enqueue_portfolio_scripts');
function load_portfolio_popup() {
  $post_id = intval($_POST['post_id']);

  // Проверка валидности ID и типа записи
  if (!$post_id && get_post_type($post_id) !== 'portfolio' && get_post_type($post_id) !== 'equipment') {
    wp_send_json_error('Invalid post ID');
  }

  // Получение галереи и других полей ACF
  $gallery = get_field('gallery', $post_id);
  
  ob_start();
  ?>
    <div class="left slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 12.0002" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M8.99992 17L4.70703 12.7071C4.37369 12.3738 4.20703 12.2071 4.20703 12C4.20703 11.7929 4.37369 11.6262 4.70703 11.2929L8.99992 6.99998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper mag-toggle">
          <?php if ( has_post_thumbnail($post_id) ): ?>
              <!-- Добавляем миниатюру как первое изображение -->
              <a href="<?php echo get_the_post_thumbnail_url( $post_id, 'full' ); ?>" class="swiper-slide">
                  <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo get_the_title( $post_id ); ?>">
              </a>
          <?php endif; ?>
          <?php foreach( $gallery as $img ): ?>
              <a href="<?php echo esc_url( $img['url'] ); ?>" class="swiper-slide">
                  <img src="<?php echo esc_url( $img['sizes']['large']); ?>" alt="<?php echo get_the_title( $post_id ); ?>">
              </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15.0001 17L19.293 12.7071C19.6263 12.3738 19.793 12.2071 19.793 12C19.793 11.7929 19.6263 11.6262 19.293 11.2929L15.0001 6.99998" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="dots"></div>
    </div>
    <div class="right content">
      <h2 class="title sub"><?php echo apply_filters('the_title', get_post_field('post_title', $post_id)); ?></h2>
      <?php echo apply_filters('the_content', get_post_field('post_content', $post_id)); ?>
      <div class="button call-portfolio" data-title="<?php echo get_the_title($post_id); ?>">
        Хочу так же
      </div>
    </div>
  <?php
  $output = ob_get_clean();
  wp_send_json_success($output);
}

add_action('wp_ajax_load_portfolio_popup', 'load_portfolio_popup');
add_action('wp_ajax_nopriv_load_portfolio_popup', 'load_portfolio_popup');