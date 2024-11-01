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
            'name'              => 'banner_cat',
            'title'             => __('Баннер категории (NEW)'),
            'description'       => __('Баннер категории (NEW)'),
            'render_template'   => '/blocks/banner_cat.php',
            'category'          => 'formatting',
        ));
        // Регистрируем блок 
        acf_register_block_type(array(
            'name'              => 'double_text',
            'title'             => __('Текст двойной с img (NEW)'),
            'description'       => __('Текст двойной с img (NEW)'),
            'render_template'   => '/blocks/double_text.php',
            'category'          => 'formatting',
        ));
        // Регистрируем блок 
        acf_register_block_type(array(
            'name'              => 'big_video',
            'title'             => __('Блок видео (NEW)'),
            'description'       => __('Блок видео (NEW)'),
            'render_template'   => '/blocks/big_video.php',
            'category'          => 'formatting',
        ));
    }
}
add_action('acf/init', 'register_blocks');