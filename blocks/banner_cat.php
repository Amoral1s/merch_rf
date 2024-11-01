<?php if (get_field('banner_cat_title')) : ?>
<div class="block_banner-cat">
    <div class="block_banner-cat__left">
      <?php if (get_field('banner_cat_img')) : ?>
        <img src="<?php echo get_field('banner_cat_img'); ?>" alt="<?php echo get_field('banner_cat_title'); ?>">
      <?php endif; ?>
      <div class="meta">
        <b class="roboto"><?php echo get_field('banner_cat_title'); ?></b>
        <p><?php echo get_field('banner_cat_subtitle'); ?></p>
      </div>
    </div>
  <?php if (get_field('banner_cat_link')) : ?>
    <div class="block_banner-cat__right">
      <a href="<?php echo get_field('banner_cat_btn_text'); ?>" class="button">
        <?php echo get_field('banner_cat_link'); ?>
      </a>
    </div>
  <?php endif; ?>
</div>
<?php endif; ?>