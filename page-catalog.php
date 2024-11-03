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

<section class="catalog-main">
  <div class="container">
    <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>
    <div class="wrap">
      <?php
        // Получаем все родительские категории товаров
        $product_categories = get_terms(array(
          'taxonomy'   => 'product_cat',
          'hide_empty' => true,
          'parent'     => 0, // Только родительские категории
        ));

        if (!empty($product_categories) && !is_wp_error($product_categories)) :
          foreach ($product_categories as $category) :
            // Получаем URL категории
            $category_link = get_term_link($category);
            
            // Получаем изображение категории или стандартную заглушку WooCommerce
            $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
            $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : wc_placeholder_img_src();
            
            // Название категории
            $category_name = $category->name;
            
            // Количество товаров с правильным склонением
            $product_count = $category->count;
            $count_text = $product_count . ' ' . get_declension($product_count, 'товар', 'товара', 'товаров');
        ?>
            <a href="<?php echo esc_url($category_link); ?>" class="item">
                <div class="thumb">
                    <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category_name); ?>">
                </div>
                <b class="roboto"><?php echo esc_html($category_name); ?></b>
                <p><?php echo esc_html($count_text); ?></p>
            </a>
        <?php
          endforeach;
        endif;

        // Функция для склонения слова "товар"
        function get_declension($number, $one, $two, $five) {
          $number = abs($number) % 100;
          $n1 = $number % 10;
          
          if ($number > 10 && $number < 20) return $five;
          if ($n1 > 1 && $n1 < 5) return $two;
          if ($n1 == 1) return $one;
          
          return $five;
        }
      ?>
    </div>
  </div>
</section>

<?php 
  $term_id = 'city';
?>
<?php if (get_field('city_title', 'home')) : ?>
<section class="city">
	<div class="container">
		<h2 class="title"><?php echo get_field('city_title', 'home') ?></h2>
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
