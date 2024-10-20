<?php if (get_field('banner_title')) : ?>
<div class="block_banner">
  <?php if (get_field('banner_img')) : ?>
    <img src="<?php echo get_field('banner_img'); ?>" alt="<?php echo get_field('banner_title'); ?>">
  <?php endif; ?>
  <div class="meta">
    <b><?php echo get_field('banner_title'); ?></b>
    <p><?php echo get_field('banner_subtitle'); ?></p>
  </div>
  <div class="button call-sample" data-title="Баннер из статьи" data-banner="<?php echo get_field('banner_title'); ?>">
    Получить образец
  </div>
</div>
<?php endif; ?>