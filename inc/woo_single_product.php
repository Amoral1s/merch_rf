<?php

//Своя галерея для сингл товара
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);
add_action('woocommerce_before_single_product_summary', 'custom_product_gallery', 20);
function custom_product_gallery() {
    global $product;
    $product_image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'large' );
    $gallery_images = $product->get_gallery_image_ids();

    // Выводим только если есть основное изображение или изображения в галерее
    if( $product_image || $gallery_images ) : ?>
        <div class="single-product-gallery">
            <div class="slider-wrap">
                <div class="arr-prev arr">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M5.0001 12L20.0001 12" stroke="#01BEA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 7L4.7071 11.2929C4.3738 11.6262 4.2071 11.7929 4.2071 12C4.2071 12.2071 4.3738 12.3738 4.7071 12.7071L9 17" stroke="#01BEA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="swiper">
                    <div class="swiper-wrapper mag-toggle">
                        <!-- Основное изображение товара -->
                        <?php if ( $product_image ) : ?>
                            <a href="<?php echo esc_url( $product_image[0] ); ?>" class="swiper-slide">
                                <img src="<?php echo esc_url( $product_image[0] ); ?>" alt="<?php the_title(); ?>">
                            </a>
                        <?php endif; ?>

                        <!-- Галерея товара -->
                        <?php if ( $gallery_images ) :
                            foreach ( $gallery_images as $gallery_image_id ) :
                                $image_url = wp_get_attachment_image_src( $gallery_image_id, 'large' ); ?>
                                <a href="<?php echo esc_url( $image_url[0] ); ?>" class="swiper-slide">
                                    <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php the_title(); ?>">
                                </a>
                            <?php endforeach;
                        endif; ?>
                    </div>
                </div>
                <div class="arr arr-next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M18.9999 12L3.99988 12" stroke="#01BEA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15 7L19.2929 11.2929C19.6262 11.6262 19.7929 11.7929 19.7929 12C19.7929 12.2071 19.6262 12.3738 19.2929 12.7071L15 17" stroke="#01BEA3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="dots"></div>
            </div>

            <?php if ( !empty($gallery_images) ) : ?>
                <div class="slider-thumbs">
                    <!-- Миниатюра основного изображения -->
                    <?php if ( $product_image ) : 
                        $thumb_image = wp_get_attachment_image_src( get_post_thumbnail_id( $product->get_id() ), 'medium' ); ?>
                        <div class="slider-thumb">
                            <img src="<?php echo esc_url( $thumb_image[0] ); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endif; ?>

                    <!-- Миниатюры галереи -->
                    <?php foreach ( $gallery_images as $gallery_image_id ) :
                        $thumb_image = wp_get_attachment_image_src( $gallery_image_id, 'medium' ); ?>
                        <div class="slider-thumb">
                            <img src="<?php echo esc_url( $thumb_image[0] ); ?>" alt="<?php the_title(); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif;
}

//summary
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
remove_action('woocommerce_single_variation', 'woocommerce_template_single_sharing', 50);
//remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);

//bototm
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);









