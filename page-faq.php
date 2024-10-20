<?php
/**
 Template Name: Вопрос - ответ
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

<section class="faq">
  <div class="container">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div itemscope itemtype="https://schema.org/FAQPage" class="wrap">
      <?php if (have_rows('answers')) : while(have_rows('answers')) : the_row(); ?>
        <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
          <h3 class="faq-title" itemprop="name">
            <?php echo get_sub_field('question'); ?>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </h3>
          <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" class="content">
            <?php echo get_sub_field('answer'); ?>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<section class="faq-form">
  <div class="container">
    <div class="wrap">
      <b class="title sub">Задайте ваш вопрос</b>
      <p class="subtitle">
        Если вы не нашли ответа на ваш вопрос, мы с удовольствием вас проконсультируем
      </p>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="92c996b" title="Задайте ваш вопрос (Баннер)"]'); ?>
      </div>
    </div>
  </div>
</section>

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

<?php
get_footer();
