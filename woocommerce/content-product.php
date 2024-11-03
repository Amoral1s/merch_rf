<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<li <?php wc_product_class( 'swiper-slide', $product ); ?>>
    <a class="product-top" href="<?php the_permalink(); ?>">
				<?php if (get_field('labels')) : ?>
				<div class="labels">
					<?php if (have_rows('labels')) : while(have_rows('labels')) : the_row(); ?>
						<div class="label roboto">
							<?php echo get_sub_field('label'); ?>
						</div>
					<?php endwhile; endif; ?>
				</div>
				<?php endif; ?>
        <div class="product-thumb">
            <?php 
            if ( has_post_thumbnail( $product->get_id() ) ) {
                echo get_the_post_thumbnail( $product->get_id(), 'woocommerce_thumbnail' );
            } else {
                echo wc_placeholder_img( 'woocommerce_thumbnail' );
            }
            ?>
        </div>
        <b class="product-title roboto">
            <?php echo $product->get_name(); ?>
        </b>
				<div class="product-bottom">
					<?php 
						if ($product->is_type('variable')) {
								// Получаем минимальную и максимальную цены вариаций
								$min_price = $product->get_variation_price('min', true);
								$max_price = $product->get_variation_price('max', true);
								
								// Если минимальная и максимальная цены разные, выводим "Цена от"
								if ($min_price != $max_price) {
										echo '<div class="product-price">от ' . wc_price($min_price) . '</div>';
								} else {
										// Если цены одинаковы, выводим одну цену
										echo '<div class="product-price">' . wc_price($min_price) . '</div>';
								}
						} else {
								// Для простых товаров оставляем ваш оригинальный код
								if ((float)$product->get_price() != 1) : ?>
										<div class="product-price">
												<?php echo $product->get_price_html(); ?>
										</div>
								<?php endif; 
						}
					?>
					<div class="product-count">
						<?php echo get_field('count'); ?>
					</div>
				</div>
    </a>
    <?php
    do_action( 'woocommerce_before_shop_loop_item' );
    do_action( 'woocommerce_before_shop_loop_item_title' );
    do_action( 'woocommerce_shop_loop_item_title' );
    do_action( 'woocommerce_after_shop_loop_item_title' );
    do_action( 'woocommerce_after_shop_loop_item' );
    ?>
</li>
