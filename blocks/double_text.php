<?php if (get_field('seo_title_double')) : ?>
<section class="seo-double">
    <div class="wrap">
      <div class="left">
        <h2 class="title"><?php echo get_field('seo_title_double') ?></h2>
        <div class="content">
          <?php echo get_field('seo_content_double'); ?>
        </div>
      </div>
      <?php if (get_field('seo_img_double')) : ?>
      <div class="right">
        <img src="<?php echo get_field('seo_img_double'); ?>" alt="<?php echo get_field('seo_title_double') ?>">
      </div>
      <?php endif; ?>
    </div>
</section>
<?php endif; ?>