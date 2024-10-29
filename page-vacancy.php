<?php
/**
 Template Name: Вакансии
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

<section class="vacancy-page">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <p class="subtitle dark"><?php echo get_field('subtitle'); ?></p>
    <div class="wrap">
      <div class="left">
        <?php $count = 0; if(have_rows('vacancy')) : while(have_rows('vacancy')) : the_row(); ?>
          <?php if (get_sub_field('hide_toggle') == false) : ?>
            <div class="item">
              <div class="top">
                <b class="roboto"><?php echo get_sub_field('title'); ?></b>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M6 9L11.2929 14.2929C11.6262 14.6262 11.7929 14.7929 12 14.7929C12.2071 14.7929 12.3738 14.6262 12.7071 14.2929L18 9" stroke="#141B34" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </div>
              </div>
              <div class="content">
                <?php echo get_sub_field('content'); ?>
              </div>
            </div>
          <?php $count++; endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <?php if ($count == 0) : ?>
        <div class="no-vac">
          <img src="<?php echo get_field('no_img'); ?>" alt="Нет вакансий">
          <b class="roboto"><?php echo get_field('no_title'); ?></b>
          <div class="content">
            <?php echo get_field('no_content'); ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <div class="right">
        <div class="form">
          <b class="mini-title">Отправить резюме</b>
          <p class="mini-subtitle">Мы свяжемся с вами в течение рабочего дня</p>
          <?php echo do_shortcode('[contact-form-7 id="c49f3de" title="Отправить резюме"]'); ?>
        </div>
        <?php if (get_field('manager_name')) : ?>
        <div class="manager">
          <div class="avatar">
            <img src="<?php echo get_field('manager_avatar'); ?>" alt="<?php echo get_field('manager_name'); ?>">
          </div>
          <div class="manager-right">
            <div class="meta">
              <b class="roboto"><?php echo get_field('manager_name'); ?></b>
              <p><?php echo get_field('manager_place'); ?></p>
            </div>
            <a target="blank" href="mailto:<?php echo get_field('manager_email'); ?>" class="link"><?php echo get_field('manager_email'); ?></a>
          </div>
          
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>




<?php
get_footer();
