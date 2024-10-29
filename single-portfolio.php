<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>


<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>

<section itemid="<?php echo get_permalink(); ?>" itemscope itemtype="http://schema.org/BlogPosting" class="portfolio-single container">
  <meta itemprop="description" content="<?php the_excerpt(); ?>">
  <link itemprop="image" href="<?php the_post_thumbnail_url(); ?>">
  <meta itemprop="author" content="<?php echo get_field('imya'); ?>, <?php echo get_field('dolzhnost'); ?>">
  <meta itemprop="datePublished" content="<?php the_time('c'); ?>">
  <meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
  <div class="wrap">
    <?php
      $post_id = get_the_ID();
      // Получение галереи и других полей ACF
      $gallery = get_field('gallery', $post_id);
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
      <h2 class="title sub"><?php the_title(); ?></h2>
      <?php echo get_the_content(); ?>
      <div class="button call-portfolio" data-title="<?php echo get_the_title($post_id); ?>">
        Хочу так же
      </div>
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

<?php endwhile; ?>



<?php get_footer();

