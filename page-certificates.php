<?php
/**
 Template Name: Сертификаты
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

<section class="sert-page pc-mb60">
  <div class="container">
    <h1 class="page-title "><?php the_title(); ?></h1>
    <div class="wrap mag-toggle">
      <?php $gallery = get_field('sert'); if ($gallery) : ?>
      <?php foreach( $gallery as $img ): ?>
        <a href="<?php echo esc_url($img['url']); ?>" class="item">
          <img src="<?php echo esc_url($img['sizes']['large']); ?>" alt="Сертификат" title="<?php echo $img['title']; ?>">
          <?php if ($img['title']) : ?>
            <b class="roboto"><?php echo $img['title']; ?></b>
          <?php endif; ?>
          <?php if ($img['caption']) : ?>
            <p><?php echo $img['caption']; ?></p>
          <?php endif; ?>
        </a>
      <?php endforeach; endif; ?>
    </div>
  </div>
</section>

<?php if (get_field('doc_title')) : ?>
<section class="sert-doc">
  <div class="container">
    <h2 class="title"><?php echo get_field('doc_title') ?></h2>
    <div class="wrap">
    <?php if (have_rows('doc')) : while(have_rows('doc')) : the_row(); ?>
      <a href="<?php echo get_sub_field('file'); ?>" download target="blank" class="item">
        <p><?php echo get_sub_field('name'); ?></p>
        <div class="meta">
          <div class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#0C0C0C" stroke-width="1.5"/>
              <path d="M12 16V8M12 16C11.2998 16 9.99153 14.0057 9.5 13.5M12 16C12.7002 16 14.0085 14.0057 14.5 13.5" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
          <span>Скачать</span>
        </div>
      </a>
    <?php endwhile; endif; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
get_footer();
