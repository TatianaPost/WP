<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/


/************************************************************************************************/
function new_meta_box() {
    add_meta_box(
        'new_meta_box', // Идентификатор(id)
        'Файл pdf', // Заголовок области с мета-полями(title)
        'show_my_new_metabox', // Вызов(callback)
        'certificates', // где будет отображаться, post означает в форме стандартного добавления записи
        'normal',
        'high');
}
add_action('add_meta_boxes', 'new_meta_box'); // Запускаем функцию

$new_meta_fields = array(
    array(
        'name'  => 'File',
        'label' => 'Файл PDF',
        'desc'  => '',
        'id'    => 'pfdFile',
        'type'  => 'file'
    ),
);

function show_my_new_metabox() {
    global $new_meta_fields; // Обозначим наш массив с полями глобальным
    global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
    echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    echo '<table class="form-table">';
    foreach ($new_meta_fields as $field) {
// Получаем значение если оно есть для этого поля
        $meta = get_post_meta($post->ID, $field['id'], true);
// Начинаем выводить таблицу
        echo '<tr>
    <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
    <td>';
        switch($field['type']) {
            case 'file':
                echo    '<input name="'.$field['id'].'" type="hidden" class="custom_upload_file" value="'.$meta.'" />
            <a href="'.$meta.'" class="custom_file_prev">'.$meta.'</a><br />
            <input class="custom_upload_file_button button" type="button" value="Выберите файл" />
            <small> <a href="#" class="custom_clear_file_button">Убрать файл</a></small>
            <br clear="all" /><span class="description">'.$field['desc'].'</span>';
                break;
        }
        echo '</td></tr>';
    }
    echo '</table>';
}

function save_my_new_meta_fields($post_id) {
    global $new_meta_fields;  // Массив с нашими полями

    // проверяем наш проверочный код
    if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // Проверяем авто-сохранение
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // Проверяем права доступа
    if ('new_book' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
    } elseif (!current_user_can('edit_post', $post_id)) {
        return $post_id;
    }

    // Если все отлично, прогоняем массив через foreach
    foreach ($new_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {  // Если данные новые
            update_post_meta($post_id, $field['id'], $new); // Обновляем данные
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
        }
    } // end foreach
}
add_action('save_post', 'save_my_new_meta_fields'); // Запускаем функцию сохранения

if(is_admin()) {
    wp_enqueue_script('newmeta', get_template_directory_uri().'/js/newmeta.js'); // Новая строчка, пропишите свой путь к файлу!!!
}