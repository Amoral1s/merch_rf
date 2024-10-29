<?php
/**
 Template Name: Как сделать заказ?
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

<section class="how-order-page">
  <div class="container">
    <h1 class="page-title sub"><?php echo get_the_title(); ?></h1>
    <p class="subtitle dark"><?php echo get_field('subtitle'); ?></p>
    <div class="wrap">
      <?php $i = 1; if (have_rows('steps')) : while(have_rows('steps')) : the_row(); ?>
        <div class="item">
          <div class="icon num">
            <?php echo $i; ?>
          </div>
          <b class="roboto"><?php echo get_sub_field('title'); ?></b>
          <p><?php echo get_sub_field('text'); ?></p>
        </div>
      <?php $i++; endwhile; endif; ?>
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

<?php if (get_field('faq_title')) : ?>
  <?php if (get_field('faq_toggle') == false) : ?>
    <section itemtype="https://schema.org/FAQPage"  class="faq">  
      <div class="container">
        <div class="title-row">
          <h2 class="title sub"><?php echo get_field('faq_title') ?></h2>  
          <a href="<?php echo get_the_permalink(318); ?>" class="link-all">
            <span>Смотреть все</span>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
        <div class="wrap">
          <?php if (have_rows('faq','faq')) : while(have_rows('faq','faq')) : the_row(); ?>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
              <h3 class="faq-title" itemprop="name">
                <?php echo get_sub_field('question'); ?>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
  <?php else : ?>
    <section itemtype="https://schema.org/FAQPage"  class="faq">
      <div class="container">
        <div class="title-row">
          <h2 class="title sub"><?php echo get_field('faq_title') ?></h2>
          <a href="<?php echo get_the_permalink(318); ?>" class="link-all">
            <span>Смотреть все</span>
            <div class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L14.2929 12.7071C14.6262 12.3738 14.7929 12.2071 14.7929 12C14.7929 11.7929 14.6262 11.6262 14.2929 11.2929L9 6" stroke="#71E69B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </a>
        </div>
        <div class="wrap">
          <?php if (have_rows('faq')) : while(have_rows('faq')) : the_row(); ?>
            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question"  class="item">
              <h3 class="faq-title" itemprop="name">
                <?php echo get_sub_field('question'); ?>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
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
  <?php endif; ?>
<?php endif; ?>


<?php
get_footer();
