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

<section class="vacancy-offer">
  <div class="container">
    <h1 class="page-title sub"><?php the_title(); ?></h1>
    <div class="tabs">
      <?php $i = 0; if (have_rows('vacancy')) : while(have_rows('vacancy')) : the_row(); ?>
        <div class="tab <?php if ($i == 0) { echo 'active'; } ?>">
          <?php echo get_sub_field('tab_name'); ?>
        </div>
      <?php $i++; endwhile; endif; ?>
    </div>
    <?php $i = 0; if (have_rows('vacancy')) : while(have_rows('vacancy')) : the_row(); ?>
      <div class="wrap <?php if ($i == 0) { echo 'active'; } ?>">
        <?php if (get_sub_field('vac_toggle') == false) : ?>
          <?php if (have_rows('vacancy_list')) : while(have_rows('vacancy_list')) : the_row(); ?>
            <div class="item">
              <h2 class="title sub"><?php echo get_sub_field('title'); ?></h2>
              <div class="content"><?php echo get_sub_field('content'); ?></div>
              <div class="button call-vacancy" data-vacancy="<?php echo get_sub_field('title'); ?>">
                Заполнить анкету
              </div>
            </div>
          <?php endwhile; endif; ?>
        <?php else : ?>
          <div class="no-vacancy">
            <b>В данный момент у нас нет открытых вакансий, но...</b>
            <p>
              Но мы всегда рады рассмотреть предложения от соискателей. Если вы считаете, что можете быть полезны нашей компании, присылайте свое резюме <a target="blank" href="mailto:<?php echo get_field('email_vacancy'); ?>"><?php echo get_field('email_vacancy'); ?></a>
            </p>
            <div class="button call-vacancy" data-vacancy="Вакансий нет">
              Заполнить анкету
            </div>
          </div>
        <?php endif; ?>
      </div>
    <?php $i++; endwhile; endif; ?>
  </div>
</section>

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
