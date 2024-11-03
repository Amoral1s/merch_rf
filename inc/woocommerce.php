<?php 


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce', array(
        'pagination' => array(
            'type' => 'plain',
        ),
    ) );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

add_filter('woocommerce_pagination_args', 'change_pagination_text');
function change_pagination_text($args){
    $args['prev_text'] = 'Назад';
    $args['next_text'] = 'Дальше';
    return $args;
}

function set_products_per_page($query) {
    if (!is_admin() && $query->is_main_query() && (is_shop() || is_product_category() || is_product_tag())) {
        $query->set('posts_per_page', 12);
    }
}
add_action('pre_get_posts', 'set_products_per_page');