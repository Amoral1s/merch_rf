<?php 

function transliterate($text) {
  $transliteration_table = array(
      'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
      'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
      'У' => 'U', 'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
      'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya', 'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo',
      'ж' => 'zh', 'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p',
      'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
      'ь' => '', 'ы' => 'y', 'ъ' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya', ' ' => '-', '.' => '-', ',' => '-', '/' => '-'
  );
  return strtr($text, $transliteration_table);
}

// Создаем ссылку на автора, используя транслитерацию имени автора
function custom_author_link_from_custom_name($link, $author_id) {
    // Получаем значение поля "Имя автора"
    $author_name = get_the_author_meta('author_name', $author_id);

    // Если "Имя автора" задано, транслитерируем его; если нет — используем ID
    if ($author_name) {
        $author_slug = transliterate($author_name); // Транслитерация имени автора
        $author_slug = sanitize_title($author_slug); // Приводим к формату URL
        return home_url('/author/' . $author_slug);
    } else {
        return home_url('/author/' . $author_id); // Fallback на ID автора
    }
}
add_filter('author_link', 'custom_author_link_from_custom_name', 10, 2);


// Подключаем скрипт медиабиблиотеки WordPress и добавляем JavaScript для загрузки аватара
function custom_user_profile_media_scripts() {
    wp_enqueue_media();
    
    $script = <<<JS
    jQuery(document).ready(function($) {
        $('#upload_author_avatar_button').on('click', function(e) {
            e.preventDefault();
            
            // Создаем медиазагрузчик
            var frame = wp.media({
                title: 'Выберите или загрузите аватар',
                button: {
                    text: 'Использовать это изображение'
                },
                multiple: false
            });

            // Если изображение выбрано, вставляем URL в поле
            frame.on('select', function() {
                var attachment = frame.state().get('selection').first().toJSON();
                $('#author_avatar').val(attachment.url); // Сохраняем URL в скрытое поле
                $('#author_avatar_preview').attr('src', attachment.url); // Обновляем превью аватара
            });

            // Открываем медиазагрузчик
            frame.open();
        });
    });
    JS;

    wp_add_inline_script('jquery', $script); // Встраиваем скрипт на страницу
}
add_action('admin_enqueue_scripts', 'custom_user_profile_media_scripts');

// Добавление дополнительных полей в профиль пользователя
function add_custom_user_profile_fields($user) {
    ?>
    <h3>Дополнительная информация об авторе</h3>
    
    <table class="form-table">
        <tr>
            <th><label for="author_name">Имя автора</label></th>
            <td>
                <input type="text" name="author_name" id="author_name" value="<?php echo esc_attr(get_the_author_meta('author_name', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
        <tr>
            <th><label for="author_avatar">Аватар автора</label></th>
            <td>
                <?php 
                $avatar_url = get_the_author_meta('author_avatar', $user->ID);
                ?>
                <img id="author_avatar_preview" src="<?php echo $avatar_url ? esc_url($avatar_url) : esc_url(get_avatar_url($user->ID, ['size' => 96])); ?>" style="width: 96px; height: 96px; display: block; margin-bottom: 10px;">
                <input type="hidden" name="author_avatar" id="author_avatar" value="<?php echo esc_attr($avatar_url); ?>" />
                <button type="button" class="button" id="upload_author_avatar_button">Загрузить аватар</button>
            </td>
        </tr>
        <tr>
            <th><label for="author_position">Должность автора</label></th>
            <td>
                <input type="text" name="author_position" id="author_position" value="<?php echo esc_attr(get_the_author_meta('author_position', $user->ID)); ?>" class="regular-text" />
            </td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'add_custom_user_profile_fields');
add_action('edit_user_profile', 'add_custom_user_profile_fields');

// Сохранение дополнительных полей профиля
function save_custom_user_profile_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    update_user_meta($user_id, 'author_name', sanitize_text_field($_POST['author_name']));
    update_user_meta($user_id, 'author_avatar', esc_url_raw($_POST['author_avatar']));
    update_user_meta($user_id, 'author_position', sanitize_text_field($_POST['author_position']));
}
add_action('personal_options_update', 'save_custom_user_profile_fields');
add_action('edit_user_profile_update', 'save_custom_user_profile_fields');