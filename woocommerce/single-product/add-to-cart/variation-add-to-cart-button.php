<?php
/**
 * Single variation cart button
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined( 'ABSPATH' ) || exit;

global $product;
?>
<?php if (get_field('meta')) : ?>
<div class="meta-vars">
	<?php if (have_rows('meta')) : while(have_rows('meta')) : the_row(); ?>
		<div class="meta-vars-item">
			<b><?php echo get_sub_field('name'); ?></b>
			<?php $title = get_sub_field('name'); ?>
			<ul class="meta-vars-item-values">
				<?php if (have_rows('values')) : while(have_rows('values')) : the_row(); ?>
					<li class="val" data-val="<?php echo get_sub_field('val'); ?>" data-title="<?php echo $title; ?>">
						<?php echo get_sub_field('val'); ?>
					</li>
				<?php endwhile; endif; ?>
			</ul>
			
		</div>
	<?php endwhile; endif; ?>
</div>
<?php endif; ?>

<!-- <div class="woocommerce-variation-add-to-cart variations_button">
	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

	<?php
	do_action( 'woocommerce_before_add_to_cart_quantity' );

	woocommerce_quantity_input(
		array(
			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
		)
	);

	do_action( 'woocommerce_after_add_to_cart_quantity' );
	?>

	<button type="submit" class="single_add_to_cart_button button alt<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?>"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	<input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
	<input type="hidden" name="variation_id" class="variation_id" value="0" />
</div> -->
