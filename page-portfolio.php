<?php
/**
 Template Name: Портфолио
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


<section class="portfolio-page">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <?php
      // Создаем пустой массив для всех категорий
      $all_categories = [];
      $all_brands = [];
      // Запрашиваем все записи портфолио
      $portfolio_posts = get_posts([
          'post_type' => 'portfolio',
          'numberposts' => -1,
      ]);
      // Проходим по каждой записи и собираем значения из поля filter_type
      foreach ( $portfolio_posts as $post ) {
          $filter_types = get_field('filter_type', $post->ID);
          $filter_brands = get_field('filter_branding', $post->ID);

          if ( $filter_types ) {
              // Разделяем строку по запятой и удаляем пробелы после запятых
              $categories = array_map('trim', explode(',', $filter_types));

              // Добавляем категории в общий массив
              $all_categories = array_merge($all_categories, $categories);
          }
          if ( $filter_brands ) {
              // Разделяем строку по запятой и удаляем пробелы после запятых
              $brands = array_map('trim', explode(',', $filter_brands));

              // Добавляем категории в общий массив
              $all_brands = array_merge($all_brands, $brands);
          }
      }
      // Оставляем только уникальные категории
      $unique_categories = array_unique($all_categories);
      $unique_brands = array_unique($all_brands);
    ?>
    <div class="main-cats">
      <div class="item active">
        По типу продукции
      </div>
      <div class="item">
        По виду брендинга
      </div>
    </div>
    <div class="sub-cats">
      <div class="item active">
        <?php foreach ( $unique_categories as $category ) : ?>
          <div class="tab"><?php echo esc_html( $category ); ?></div>
        <?php endforeach; ?>
      </div>
      <div class="item">
        <?php foreach ( $unique_brands as $brand ) : ?>
          <div class="tab"><?php echo esc_html( $brand ); ?></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="wrap">
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
      <div class="item portfolio-popup-toggle" data-id="<?php echo get_the_ID(); ?>" data-type="<?php echo get_field('filter_type'); ?>" data-brand="<?php echo get_field('filter_branding'); ?>">
        <div class="thumb">
          <?php if (has_post_thumbnail()) : ?>
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
      <?php endwhile; ?>
    </div>
  </div>
</section>


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
