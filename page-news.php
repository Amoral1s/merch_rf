<?php
/**
 Template Name: Блог
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

<section  itemscope itemtype="http://schema.org/Blog" class="blog-page news-slider">
  <link itemprop="image" href="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
	<link itemprop="url" href="<?php echo get_permalink(); ?>">
	<meta itemprop="description" content="<?php the_excerpt(); ?>">
	<meta itemprop="author" content="<?php the_author(); ?>">
	<meta itemprop="datePublished" content="<?php the_time('c'); ?>">
	<meta itemprop="dateModified" content="<?php the_modified_date('c'); ?>">
  <div class="container">
    <?php 
      $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
    ?>
    <h1 class="page-title sub"><?php the_title(); ?> <?php  
				if ($current_page != 1 && !is_search()) {
					echo ' - страница ' . $current_page; 
				}
			?>
    </h1>
    <div class="wrap">
      <?php
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
        $args = array(
          'posts_per_page' => get_option('posts_per_page'), // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
          'paged'          => $current_page, // текущая страница
          'post_type'      => 'post',
          'orderby' => 'date',
          'order' => 'DESC'
        );
        query_posts( $args );
        $wp_query->is_archive = true;
        $wp_query->is_home = false;
        while(have_posts()): the_post();
      ?>
      <a itemprop="blogPosts" itemscope itemtype="http://schema.org/BlogPosting" itemprop="url" href="<?php the_permalink(); ?>" class="item">
        <?php if (has_post_thumbnail()) : ?>
            <img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'medium'); ?>" alt="<?php the_title(); ?>">
        <?php else : ?>
            <img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
        <?php endif; ?>
        <div class="meta">
          <b><?php the_title(); ?></b>
          <div class="date"><?php echo get_the_date('d M Y') ?></div>
        </div>
      </a>
      <?php endwhile; ?>
    </div>
    <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); ?>
  </div>
</section>

<?php if (get_field('subscribe_banner_title', 'options')) : ?>
<section class="subscribe-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/subscribe/subscribe.png" alt="Подписка на рассылку">
      </div>
      <div class="right">
        <b class="title sub"><?php echo get_field('subscribe_banner_title', 'options'); ?></b>
        <p class="subtitle"><?php echo get_field('subscribe_banner_subtitle', 'options'); ?></p>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="92b59f6" title="Подписка на email рассылку (Баннер)"]'); ?>
        </div>
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
