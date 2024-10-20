<?php get_header(); ?>

<?php if (have_posts()) : while ( have_posts() ) : the_post(); ?>

<div class="page-top">
  <div class="container">
    <?php
      if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb('<p class="breadcrumbs">', '</p>'); }
    ?>
  </div>
</div>
<section class="page">
	<div class="page-wrap container">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<div class="content">
			<?php the_content(); ?>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

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