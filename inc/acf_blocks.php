<?php 

function register_blocks() {
 
    // Проверяем, что функция доступна.
    if( function_exists( 'acf_register_block_type' ) ) {
 
        // Регистрируем блок 
        acf_register_block_type(array(
            'name'              => 'important_text',
            'title'             => __('Важный текст (NEW)'),
            'description'       => __('Важный текст для статьи (NEW)'),
            'render_template'   => '/blocks/important_text.php',
            'category'          => 'formatting',
        ));
        // Регистрируем блок 
        acf_register_block_type(array(
            'name'              => 'banner',
            'title'             => __('Баннер (NEW)'),
            'description'       => __('Баннер (NEW)'),
            'render_template'   => '/blocks/banner.php',
            'category'          => 'formatting',
        ));
    }
}
add_action('acf/init', 'register_blocks');