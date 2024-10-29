<?php
/**
 Template Name: Доставка
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

<section class="delivery-page pc-mb40">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <p class="subtitle dark"><?php echo get_field('subtitle'); ?></p>
    <div class="wrap">
      <?php if (have_rows('delivery_type')) : while(have_rows('delivery_type')) : the_row(); ?>
        <div class="item">
          <div class="item-gall">
            <?php $gallery = get_sub_field('gall'); if ($gallery) : ?>
            <?php foreach( $gallery as $img ): ?>
              <div class="thumb">
                <?php 
                  echo '<img src="' . esc_url($img) . '" alt="Доставка">';
                ?>
              </div>
            <?php endforeach; endif; ?>
          </div>
          <b class="roboto"><?php echo get_sub_field('title'); ?></b>
          <p><?php echo get_sub_field('price'); ?></p>
        </div>
      <?php endwhile; endif; ?>
      <div class="item date">
        <b class="roboto"><?php echo get_field('delivery_date_title'); ?></b>
        <?php if (have_rows('delivery_date')) : while(have_rows('delivery_date')) : the_row(); ?>
          <p><?php echo get_sub_field('text'); ?></p>
        <?php endwhile; endif; ?>
        <small><?php echo get_field('delivery_date_small'); ?></small>
      </div>
    </div>
  </div>
</section>

<?php if (get_field('pickup_title')) : ?>
<section class="delivery-map pc-mb60">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('pickup_title') ?></h2>
    <p class="subtitle dark"><?php echo get_field('pickup_subtitle'); ?></p>
    <div class="contacts-row">
      <div class="item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.0015 1.25C8.17538 1.25 4.52505 3.51303 2.99714 7.08468C1.57518 10.4086 2.34496 13.2373 3.94771 15.6595C5.26177 17.6454 7.17835 19.4178 8.90742 21.0168L8.90824 21.0175C9.23768 21.3222 9.56031 21.6206 9.87066 21.9129L9.87231 21.9145C10.4473 22.4528 11.2112 22.75 12.0015 22.75C12.7919 22.75 13.5558 22.4528 14.1308 21.9144C14.4243 21.6396 14.7286 21.3592 15.039 21.0732C16.7869 19.4627 18.7304 17.672 20.0582 15.6609C21.6591 13.2362 22.4261 10.4045 21.0059 7.08468C19.478 3.51303 15.8277 1.25 12.0015 1.25ZM12 7C9.79086 7 8 8.79086 8 11C8 13.2091 9.79086 15 12 15C14.2091 15 16 13.2091 16 11C16 8.79086 14.2091 7 12 7Z" fill="#141B34"/>
          </svg>
        </div>
        <div class="meta">
          <b class="roboto"><?php echo get_field('pickup_address'); ?></b>
          <span><?php echo get_field('pickup_address_time'); ?></span>
        </div>
      </div>
      <div class="item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M5.31726 1.28657C5.88395 1.40369 6.33524 1.78443 6.61564 2.28746L7.50885 3.88991C7.83786 4.48011 8.11473 4.9768 8.29554 5.40857C8.48735 5.86658 8.60126 6.31824 8.54919 6.8176C8.49711 7.31696 8.29246 7.7354 8.01029 8.14399C7.74428 8.52917 7.37088 8.95804 6.92718 9.46767L5.61417 10.9759C5.37889 11.2461 5.26124 11.3812 5.25049 11.5501C5.23974 11.719 5.33616 11.8633 5.529 12.1518C7.17259 14.6109 9.38773 16.8268 11.8488 18.4718C12.1374 18.6647 12.2816 18.7611 12.4505 18.7503C12.6194 18.7396 12.7546 18.6219 13.0248 18.3866L14.5331 17.0736C15.0427 16.6299 15.4716 16.2565 15.8568 15.9905C16.2653 15.7083 16.6838 15.5036 17.1831 15.4516C17.6825 15.3995 18.1342 15.5134 18.5922 15.7052C19.0239 15.886 19.5206 16.1629 20.1107 16.4918L21.7133 17.3851C22.2163 17.6655 22.5971 18.1168 22.7142 18.6835C22.8325 19.2561 22.658 19.8316 22.2724 20.3047C20.8735 22.021 18.6322 23.1139 16.281 22.6396C14.8358 22.348 13.4098 21.8623 11.6851 20.8732C8.2197 18.8858 5.11263 15.777 3.12755 12.3157C2.13843 10.591 1.65272 9.165 1.36118 7.71974C0.886878 5.36852 1.97971 3.12724 3.69608 1.72833C4.16911 1.34279 4.74466 1.16822 5.31726 1.28657Z" fill="#0C0C0C"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14 2C14.5523 2 15 2.44772 15 3V5.8C15 6.35228 14.5523 6.8 14 6.8C13.4477 6.8 13 6.35228 13 5.8V3C13 2.44772 13.4477 2 14 2ZM19.6573 4.34367C20.0478 4.7342 20.0478 5.36736 19.6573 5.75789L17.6774 7.73779C17.2869 8.12831 16.6537 8.12831 16.2632 7.73779C15.8727 7.34726 15.8727 6.7141 16.2632 6.32357L18.2431 4.34367C18.6336 3.95315 19.2668 3.95315 19.6573 4.34367ZM17.2 10C17.2 9.44772 17.6477 9 18.2 9H21C21.5523 9 22 9.44772 22 10C22 10.5523 21.5523 11 21 11H18.2C17.6477 11 17.2 10.5523 17.2 10Z" fill="#0C0C0C"/>
          </svg>
        </div>
        <div class="meta">
          <a class="roboto" target="blank" href="tel:<?php echo get_field('pickup_address_phone'); ?>"><?php echo get_field('pickup_address_phone'); ?></a>
          <span><?php echo get_field('pickup_address_text'); ?></span>
        </div>
      </div>
    </div>
    <div class="map">
      <iframe src="<?php echo get_field('pickup_map'); ?>" frameborder="0"></iframe>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('package_title')) : ?>
<section class="seo delivery pc-mb60">
  <div class="container">
    <h2 class="title"><?php echo get_field('package_title') ?></h2>
    <div class="content">
      <?php echo get_field('package_content'); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('lift_title')) : ?>
<section class="seo delivery pc-mb60">
  <div class="container">
    <h2 class="title"><?php echo get_field('lift_title') ?></h2>
    <div class="content">
      <?php echo get_field('lift_content'); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('safe_title')) : ?>
<section class="seo delivery pc-mb60">
  <div class="container">
    <h2 class="title"><?php echo get_field('safe_title') ?></h2>
    <div class="content">
      <?php echo get_field('safe_content'); ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('problem_title')) : ?>
<section class="delivery-troubles">
  <div class="container">
    <h2 class="title sub"><?php echo get_field('problem_title') ?></h2>
    <p class="subtitle dark"><?php echo get_field('problem_subtitle'); ?></p>
    <div class="wrap">
    <?php $i = 1; if (have_rows('problem')) : while(have_rows('problem')) : the_row(); ?>
      <div class="item">
        <div class="num icon"><?php echo $i; ?></div>
        <p><?php echo get_sub_field('text'); ?></p>
      </div>
    <?php $i++; endwhile; endif; ?>
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
