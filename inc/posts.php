<?php 
//новая длина размера цитаты start
function wph_excerpt_length($length) {
	return 20; 
}
add_filter('excerpt_length', 'wph_excerpt_length');


add_filter('excerpt_more', function($more) {
	return '...';
});

add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ) {
    // Проверяем архивы категорий
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }
    // Проверяем архивы тегов
    elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    }
    // Проверяем архив пользовательского типа записи 'portfolio'
    elseif ( is_post_type_archive('portfolio') ) {
        $title = post_type_archive_title( '', false );
    }
    // Проверяем таксономию 'portfolio-category'
    elseif ( is_tax('portfolio-category') ) {
        $title = single_term_title( '', false );
    }
    return $title;
}

function quote() {
  ob_start();
  get_template_part('shortcodes/quote');
  return ob_get_clean();
}
add_shortcode('quote', 'quote');

function mini_banner() {
  ob_start();
  get_template_part('shortcodes/mini-banner');
  return ob_get_clean();
}
add_shortcode('mini_banner', 'mini_banner');

function big_banner() {
  ob_start();
  get_template_part('shortcodes/big-banner');
  return ob_get_clean();
}
add_shortcode('big_banner', 'big_banner');

/* Выводим кол-во просмотров поста */
function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count == '') {
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
      return "0";
  }
  return $count;
}
function setPostViews($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  }else{
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}

// подключаем расчет чтения
if ( ! function_exists( 'gp_read_time' ) ) {
  function gp_read_time() {
  $text = get_the_content( '' );
  $words = str_word_count( strip_tags( $text ), 0, 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' );
  if ( !empty( $words ) ) {
  $time_in_minutes = ceil( $words / 200 );
  return $time_in_minutes;
  }
  return false;
  }
  }


add_action( 'after_setup_theme', 'fix_month_abbrev', 0 );
function fix_month_abbrev(){
  global $wp_locale;

  $wp_locale->month_abbrev = [
    'Январь'    => 'января',
    'Февраль'   => 'феврал.',
    'Март'      => 'марта',
    'Апрель'    => 'апреля',
    'Май'       => 'мая',
    'Июнь'      => 'июня',
    'Июль'      => 'июля',
    'Август'    => 'августа',
    'Сентябрь'  => 'сентября',
    'Октябрь'   => 'октября',
    'Ноябрь'    => 'ноября',
    'Декабрь'   => 'декабря',

  ] + $wp_locale->month_abbrev;
} 

function custom_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_archive()) {
        $post_types = array('post', 'portfolio', 'equipment'); // Типы постов, для которых нужно установить лимит
        if (in_array($query->get('post_type'), $post_types) || (is_archive() && !isset($query->query_vars['post_type']))) {
            $query->set('posts_per_page', 9);
        }
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');