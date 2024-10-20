<?php get_header(); ?>

<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>

<section class="error-404 not-found">
	<div class="container">
		<div class="wrap">
			<div class="left">
        <h1 class="page-title sub">Страница не найдена</h1>
        <p class="subtitle">
          Так уж получилось, что из множества страниц нашего сайта вы оказались как раз на той, которая уже не существует
        </p>
        <a href="/" class="button">На главную</a>
      </div>
      <div class="right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/404.png" alt="404">
      </div>
		</div>
	</div>
</section><!-- .error-404 -->

<?php if (get_field('prod_title','options')) : ?>
<section class="prod-home">
  <div class="container">
    <h2 class="title ">Возможно, вас интересует:</h2>
    <div class="wrap slider-wrap prod-home-slider">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12.0002L20 12.0002" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9 17.0001L4.7071 12.7072C4.3738 12.3739 4.2071 12.2072 4.2071 12.0001C4.2071 11.793 4.3738 11.6263 4.7071 11.293L9 7.0001" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php if (have_rows('prod_cats','options')) : while(have_rows('prod_cats','options')) : the_row(); ?>
          <a href="<?php echo get_sub_field('link'); ?>" class="item swiper-slide">
            <?php if (get_sub_field('img')) : ?>
              <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
            <?php else : ?>
              <img src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php echo get_sub_field('title'); ?>">
            <?php endif; ?>
            <b><?php echo get_sub_field('title'); ?></b>
          </a>
          <?php endwhile; endif; ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 11.9998H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 6.99988L19.2929 11.2928C19.6262 11.6261 19.7929 11.7928 19.7929 11.9999C19.7929 12.207 19.6262 12.3737 19.2929 12.707L15 16.9999" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
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

<?php get_footer(); ?>
