<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     3.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

global $product;

$current_product_id = $product->get_id();
$product_categories = wp_get_post_terms( $current_product_id, 'product_cat' );
$category_ids = array();

foreach ( $product_categories as $category ) {
    $category_ids[] = $category->term_id;
    if ( $category->parent != 0 && !in_array($category->parent, $category_ids) ) {
        $category_ids[] = $category->parent;
    }
}

// Получаем все продукты из текущей категории и родительской категории
$args_all = array(
    'post_type'      => 'product',
    'posts_per_page' => -1, // Получаем все записи
    'orderby'        => 'date',
    'order'          => 'DESC',
    'post__not_in'   => array($current_product_id),
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $category_ids,
            'operator' => 'IN',
        ),
    ),
);
$all_products = new WP_Query( $args_all );

$current_index = -1;
$related_products = array();

if ( $all_products->have_posts() ) {
    $products_array = $all_products->posts;

    foreach ( $products_array as $index => $post ) {
        if ( $post->ID == $current_product_id ) {
            $current_index = $index;
            break;
        }
    }

    // Если не нашли текущий продукт, добавим его в массив для корректного поиска
    if ( $current_index == -1 ) {
        $products_array[] = get_post($current_product_id);
        $current_index = count($products_array) - 1;
    }

    // Добавляем записи после текущего
    for ( $i = $current_index + 1; $i < $current_index + 11 && $i < count( $products_array ); $i++ ) {
        $related_products[] = $products_array[$i];
    }

    // Если недостаточно, добавляем записи до текущего в обратном порядке
    if ( count( $related_products ) < 20 ) {
        for ( $i = $current_index - 1; $i >= 0 && count( $related_products ) < 20; $i-- ) {
            array_unshift($related_products, $products_array[$i]);
        }
    }
}
if ( !empty( $related_products ) ) : ?>

<section class="related">
	<?php
	$heading = apply_filters( 'woocommerce_product_related_products_heading', __( 'Вам может быть интересно', 'woocommerce' ) );

	if ( $heading ) :
			?>
	<h2 class="title"><?php echo esc_html( $heading ); ?></h2>
	<?php endif; ?>
	<div class="wrap slider-wrap">
		<div class="arr arr-prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M5 12H20" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
		</div>
		<div class="swiper">
			<?php woocommerce_product_loop_start(); ?>
				<?php foreach ( $related_products as $related_product ) : ?>
						<?php
								$post_object = get_post( $related_product->ID );
								setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found
								wc_get_template_part( 'content', 'product' );
						?>
				<?php endforeach; ?>
			<?php woocommerce_product_loop_end(); ?>
		</div>
		<div class="arr arr-next">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M19 12H4" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 7L19.2929 11.2929C19.6262 11.6262 19.7929 11.7929 19.7929 12C19.7929 12.2071 19.6262 12.3738 19.2929 12.7071L15 17" stroke="#885C8C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
		</div>
	</div> 
</section>
<?php
endif;

wp_reset_postdata();
?>