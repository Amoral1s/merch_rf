<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// Проверяем, находится ли пользователь на странице товара WooCommerce
if (is_singular('product')) {
    // Для страниц товаров выводим крошки с "Главная", "Каталог" и основной категорией
    if (function_exists('yoast_breadcrumb')) {
        // Получаем хлебные крошки от Yoast
        ob_start();
        yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
        $breadcrumb = ob_get_clean();

        // Получаем основную категорию товара
        $product_id = get_the_ID();
        $categories = wp_get_post_terms($product_id, 'product_cat');

        // Найти основную категорию (первая категория в списке)
        $main_category = !empty($categories) ? $categories[0] : null;

        // Создаем ссылку на основную категорию, если она есть
        $main_category_link = $main_category ? get_term_link($main_category) : '';

        // Удаляем возможные дублирующие ссылки на "Главная" из хлебных крошек
        $breadcrumb = preg_replace('/<a href="'.esc_url(home_url('/')).'">Главная<\/a>\s*\/?\s*/i', '', $breadcrumb);

        // Получаем название товара
        $product_name = get_the_title();

        // Формируем новые хлебные крошки
        $new_breadcrumbs = '<p class="breadcrumbs">'
            . '<a href="' . esc_url(home_url('/')) . '">Главная</a> / '
            . '<a href="' . esc_url(home_url('/catalog')) . '">Каталог</a> / '
            . ($main_category_link ? '<a href="' . esc_url($main_category_link) . '">' . esc_html($main_category->name) . '</a> / ' : '')
            . esc_html($product_name)
            . '</p>';

        // Выводим модифицированные хлебные крошки
        echo $new_breadcrumbs;
    }
} else {
    // Для всех остальных страниц выводим стандартные крошки
    if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p class="breadcrumbs">', '</p>');
    }
}