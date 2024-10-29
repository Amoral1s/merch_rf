<?php
/**
 Template Name: Оплата и гарантии
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

<section class="payment-page pc-mb40">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <p class="subtitle dark"><?php echo get_field('subtitle'); ?></p>
    <div class="wrap">
      <?php if (have_rows('payment')) : while(have_rows('payment')) : the_row(); ?>
        <div class="item">
          <div class="item-gall">
            <?php $gallery = get_sub_field('icons'); if ($gallery) : ?>
            <?php foreach( $gallery as $img ): ?>
              <div class="thumb">
                <?php 
                  echo '<img src="' . esc_url($img) . '" alt="Оплата">';
                ?>
              </div>
            <?php endforeach; endif; ?>
          </div>
          <div class="meta">
            <b class="roboto"><?php echo get_sub_field('title'); ?></b>
            <p><?php echo get_sub_field('content'); ?></p>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php if (get_field('garanty_title')) : ?>
<section class="payment-garanty pc-mb60">
  <div class="container">
    <h2 class="title"><?php echo get_field('garanty_title') ?></h2>
    <div class="wrap">
      <?php if (have_rows('garanty')) : while(have_rows('garanty')) : the_row(); ?>
        <div class="item">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
              <path d="M29.3346 16C29.3346 8.63622 23.365 2.66669 16.0013 2.66669C8.6375 2.66669 2.66797 8.63622 2.66797 16C2.66797 23.3638 8.6375 29.3334 16.0013 29.3334C23.365 29.3334 29.3346 23.3638 29.3346 16Z" stroke="#0C0C0C" stroke-width="2"/>
              <path d="M10.668 16.6667L14.0013 20L21.3346 12" stroke="#0C0C0C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <p><?php echo get_sub_field('text'); ?></p>
        </div>
      <?php endwhile; endif; ?>
    </div>
    <div class="important">
      <div class="left">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.2687 3.35829C19.0427 2.76941 20.9547 2.76941 22.7287 3.35829C24.4955 3.94474 25.8827 5.33564 27.2762 7.28987C28.6652 9.23762 30.2 11.9534 32.1784 15.4541L32.256 15.5916C34.2349 19.0928 35.7695 21.8085 36.726 24.0108C37.687 26.2238 38.1657 28.1345 37.7839 29.9701C37.3992 31.8185 36.451 33.4991 35.07 34.7695C33.6924 36.0366 31.8165 36.5713 29.4547 36.828C27.1062 37.0833 24.034 37.0833 20.08 37.0833H19.9175C15.9634 37.0833 12.8913 37.0833 10.5427 36.828C8.18082 36.5713 6.30502 36.0366 4.9274 34.7695C3.5464 33.4991 2.59817 31.8185 2.21362 29.9701C1.8317 28.1345 2.31037 26.2238 3.27145 24.0108C4.2279 21.8085 5.76262 19.0928 7.74133 15.5915L7.819 15.4541C9.79738 11.9534 11.3322 9.23762 12.7211 7.28987C14.1147 5.33564 15.5019 3.94474 17.2687 3.35829ZM18.332 28.3333C18.332 27.4128 19.0749 26.6666 19.9912 26.6666H20.0062C20.9225 26.6666 21.6654 27.4128 21.6654 28.3333C21.6654 29.2538 20.9225 30 20.0062 30H19.9912C19.0749 30 18.332 29.2538 18.332 28.3333ZM18.332 21.6666C18.332 22.5871 19.0782 23.3333 19.9987 23.3333C20.9192 23.3333 21.6654 22.5871 21.6654 21.6666V15C21.6654 14.0795 20.9192 13.3333 19.9987 13.3333C19.0782 13.3333 18.332 14.0795 18.332 15V21.6666Z" fill="#FC1D60"/>
          </svg>
        </div>
        <b class="roboto"><?php echo get_field('important_title'); ?></b>
      </div>
      <div class="right">
        <?php if (have_rows('important')) : while(have_rows('important')) : the_row(); ?>
          <div class="item">
            <div class="icon">
              <img src="<?php echo get_sub_field('icon'); ?>" alt="icon">
            </div>
            <p><?php echo get_sub_field('text'); ?></p>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('back_title')) : ?>
<section class="seo pc-mb60">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('back_title') ?></h2>
    <div class="content">
      <?php echo get_field('back_content'); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('how_title')) : ?>
  <?php if (get_field('how_toggle') == false) : ?>
    <section class="how">
      <div class="container">
        <div class="title-block">
          <h2 class="title sub"><?php echo get_field('how_title') ?></h2>
          <p class="subtitle"><?php echo get_field('how_subtitle', 'home'); ?></p>
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
          <h2 class="title sub"><?php echo get_field('how_title') ?></h2>
          <p class="subtitle"><?php echo get_field('how_subtitle'); ?></p>
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
              <?php $i = 1; if (have_rows('how')) : while(have_rows('how')) : the_row(); ?>
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
