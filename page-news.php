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




<section  itemscope itemtype="http://schema.org/Blog" class="blog-page">
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
    <div class="search">
      <?php echo do_shortcode('[wd_asp id=1]'); ?>
    </div>
    <div class="wrap">
      <?php
        $index = 0;
        $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1; // определяем текущую страницу блога
        $args = array(
          'posts_per_page' => 12, // значение по умолчанию берётся из настроек, но вы можете использовать и собственное
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
      <a href="<?php echo get_the_permalink(); ?>" class="item">
        <div class="thumb">
          <?php if (has_post_thumbnail()) : ?>
              <img itemprop="image" src="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>" alt="<?php echo get_the_title(); ?>">
          <?php else : ?>
              <img itemprop="image" src="<?php echo wc_placeholder_img_src(); ?>" alt="<?php the_title(); ?>" style="border: 1px solid #F6F8FA">
          <?php endif; ?>
        </div>
        <div class="meta">
          <div class="date"><?php echo get_the_date('d M Y') ?></div>
          <b class="roboto"><?php the_title(); ?></b>
          <?php 
            $subtitle = get_field('subtitle'); // Получаем значение поля ACF
            $word_limit = 10; // Указываем количество слов

            // Проверяем, если текст не пустой
            if ($subtitle) {
                $words = explode(' ', $subtitle); // Разделяем текст на слова
                if (count($words) > $word_limit) {
                    $subtitle = implode(' ', array_slice($words, 0, $word_limit)) . '...'; // Обрезаем текст и добавляем троеточие
                }
                echo '<p>'.$subtitle.'</p>'; // Выводим ограниченный текст
            }
          ?>
        </div>
      </a>
      <?php if ($index == 5) : ?>
      <div class="social-banner">
        <b class="roboto"><?php echo get_field('social_banner_title', 'blocks'); ?></b>
        <?php if (get_field('banner_social', 'blocks')) : ?>
        <div class="social">
          <?php if (have_rows('banner_social', 'blocks')) : while(have_rows('banner_social', 'blocks')) : the_row(); ?>
            <a href="<?php echo get_sub_field('link'); ?>" target="blank" rel="nofollow" noindex>
              <img src="<?php echo get_sub_field('icon'); ?>" alt="Соц сеть">
            </a>
          <?php endwhile; endif; ?>
        </div>
        <?php endif; ?>
      </div>
      <?php endif; ?>
      <?php $index++; endwhile; ?>
    </div>
    <?php if( function_exists('wp_pagenavi') ) wp_pagenavi(); ?>
  </div>
</section>

<?php if (get_field('uni_title', 'blocks')) : ?>
<section class="unisender-banner">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <b class="roboto"><?php echo get_field('uni_title', 'blocks'); ?></b>
        <p><?php echo get_field('uni_subtitle', 'blocks'); ?></p>
      </div>
      <div class="right">
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="b0f62b8" title="Подписка на рассылку"]'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php if (get_field('banner_title', 'home')) : ?>
<section class="form-big">
  <div class="container">
    <div class="wrap">
      <div class="left">
        <div class="title-block">
          <b class="title sub"><?php echo get_field('banner_title', 'home') ?></b>
          <p class="subtitle"><?php echo get_field('banner_subtitle', 'home'); ?></p>
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
