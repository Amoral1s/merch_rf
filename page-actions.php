<?php
/**
 Template Name: Акции
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

<section class="actions-page">
  <div class="container">
    <h1 class="page-title "><?php the_title(); ?></h1>
    <div class="wrap">
      <?php if (have_rows('actions')) : while(have_rows('actions')) : the_row(); ?>
        <div class="item">
          <div class="thumb">
            <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
          </div>
          <b class="roboto mini-title"><?php echo get_sub_field('title'); ?></b>
          <p class="mini-subtitle"><?php echo get_sub_field('subtitle'); ?></p>
          <div class="popup">
            <div class="close">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19 5L5 19M5 5L19 19" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="popup-wrap">
              <div class="left">
                <img src="<?php echo get_sub_field('img'); ?>" alt="<?php echo get_sub_field('title'); ?>">
              </div>
              <div class="right">
                <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                <div class="content"><?php echo get_sub_field('content'); ?></div>
                <div class="button call-order">
                  Оставить заявку
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>
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
