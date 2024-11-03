<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product', $product ); ?>>
	
	<div class="single-product-left">
		<?php if (get_field('labels')) : ?>
			<div class="labels">
				<?php if (have_rows('labels')) : while(have_rows('labels')) : the_row(); ?>
					<div class="label roboto">
						<?php echo get_sub_field('label'); ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		<?php endif; ?>
	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>
	</div>

	<div class="summary entry-summary single-product-right">
		<div class="sku">
			Арт. <?php echo $product->get_sku(); ?>
		</div>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
		<div class="single-product-bottom">
			<div class="button call-cart">
				Оставить заявку
			</div>
			<div class="price-wrap">
				<?php show_minimum_variation_price(); ?>
				<?php if (get_field('count')) : ?>
				<div class="count"><?php echo get_field('count'); ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</section>

<?php if (get_field('table_title')) : ?>
<section class="price-table">
	<div class="title-row">
		<h2 class="title"><?php echo get_field('table_title') ?></h2>
		<?php if (get_field('table_file')) : ?>
		<a href="<?php echo get_field('table_file'); ?>" class="link" target="blank" download>
			<div class="icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#0C0C0C" stroke-width="1.5"/>
					<path d="M12 16V8M12 16C11.2998 16 9.99153 14.0057 9.5 13.5M12 16C12.7002 16 14.0085 14.0057 14.5 13.5" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</div>
			<span>Скачать файлом</span>
		</a>
		<?php endif; ?>
	</div>
	<div class="wrap">
		<?php
			$table = get_field( 'table');
			if ( ! empty ( $table ) ) {
					echo '<table border="0">';
						if ( ! empty( $table['header'] ) ) {
							echo '<thead>';
								echo '<tr>';
									foreach ( $table['header'] as $th ) {
										echo '<th>';
											echo $th['c'];
										echo '</th>';
									}
								echo '</tr>';
							echo '</thead>';
						}
						echo '<tbody>';
							foreach ( $table['body'] as $tr ) {
								echo '<tr>';
									foreach ( $tr as $td ) {
										echo '<td>';
											echo $td['c'];
										echo '</td>';
									}
								echo '</tr>';
							}
						echo '</tbody>';
					echo '</table>';
			}
		?>
	</div>
</section>
<?php endif; ?>

<?php if (get_the_content()) : ?>
<section class="single-content">
	<h2 class="title sub">Описание продукции</h2>
	<div class="wrap content">
		<?php the_content(); ?>
	</div>
</section>
<?php endif; ?>

<?php woocommerce_output_related_products(); ?>

<?php if (get_field('release_title', 'home')) : ?>
<section class="release-block">
	<h2 class="title sub"><?php echo get_field('release_title', 'home') ?></h2>
	<p class="subtitle"><?php echo get_field('release_subtitle', 'home') ?></p>
	<div class="wrap">
		<div class="item left">
			<div class="black">
				<b><?php echo get_field('release_title_1', 'home') ?></b>
				<p><?php echo get_field('release_text_1', 'home') ?></p>
			</div>
			<div class="gall-block">
				<b><?php echo get_field('release_title_2', 'home') ?></b>
				<p><?php echo get_field('release_text_2', 'home') ?></p>
				<div class="gall-block-wrap">
					<?php $gallery = get_field('release_gall_2', 'home'); if ($gallery) : ?>
					<?php foreach( $gallery as $img ): ?>
						<div class="gall-block-item">
							<?php 
								echo '<img src="' . esc_url($img) . '" alt="brand">';
							?>
						</div>
					<?php endforeach; endif; ?>
				</div>
			</div>
		</div>
		<div class="item center" style="background-image: url(<?php echo get_field('release_bg_3', 'home') ?>)">
			<b><?php echo get_field('release_title_3', 'home') ?></b>
			<p><?php echo get_field('release_text_3', 'home') ?></p>
		</div>
		<div class="item right">
			<div class="gray-block" style="background-image: url(<?php echo get_field('release_bg_4', 'home') ?>)">
				<b><?php echo get_field('release_title_4', 'home') ?></b>
				<p><?php echo get_field('release_text_4', 'home') ?></p>
			</div>
			<div class="black">
				<b><?php echo get_field('release_title_5', 'home') ?></b>
				<p><?php echo get_field('release_text_5', 'home') ?></p>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>


<section itemtype="https://schema.org/FAQPage"  class="faq">
	<div class="title-row">
		<h2 class="title sub"><?php echo get_field('faq_title', 'home') ?></h2>  
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
</section>

<?php if (get_field('cat_slider_title','home')) : ?>
<section class="cat-slider">
	<h2 class="title sub"><?php echo get_field('cat_slider_title', 'home'); ?></h2>
	<p class="subtitle"><?php echo get_field('cat_slider_subtitle', 'home'); ?></p>
	<div class="wrap slider-wrap">
      <div class="arr arr-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M5 12L20 11.9998" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M9.00004 6.99988L4.70715 11.2928C4.37381 11.6261 4.20715 11.7928 4.20715 11.9999C4.20715 12.207 4.37381 12.3737 4.70715 12.707L9.00004 16.9999" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            // Получаем значения из поля 'cat_slider'
            $category_ids = get_field('cat_slider', 'home'); // Замените 'home' на нужный ID или объект

            // Проверяем, если поле 'cat_slider' заполнено
            if (!empty($category_ids) && is_array($category_ids)) {
              // Если 'cat_slider' заполнен, выводим категории по указанным ID, включая родительские и дочерние
              $product_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'include'    => $category_ids, // Только категории из 'cat_slider'
              ));
            } else {
              // Если 'cat_slider' пуст, выводим только родительские категории
              $product_categories = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
                'parent'     => 0, // Только родительские категории
              ));
            }

            if (!empty($product_categories) && !is_wp_error($product_categories)) :
              foreach ($product_categories as $category) :
                // Получаем URL категории
                $category_link = get_term_link($category);
                
                // Получаем изображение категории или стандартную заглушку WooCommerce
                $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
                $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : wc_placeholder_img_src();
                
                // Название категории
                $category_name = $category->name;
            ?>
                <a href="<?php echo esc_url($category_link); ?>" class="item swiper-slide">
                    <div class="thumb">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($category_name); ?>">
                    </div>
                    <b class="roboto"><?php echo esc_html($category_name); ?></b>
                </a>
            <?php
              endforeach;
            endif;
          ?>
        </div>
      </div>
      <div class="arr arr-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M19 12L4 12.0002" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M15 17.0001L19.2928 12.7072C19.6262 12.3739 19.7928 12.2072 19.7928 12.0001C19.7928 11.793 19.6262 11.6263 19.2928 11.293L15 7.0001" stroke="#0C0C0C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
</section>
<?php endif; ?>


<?php do_action( 'woocommerce_after_single_product' ); ?>
