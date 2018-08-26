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


/**
 * __________________________________________________________________________________________________
 * Проверка поля "Ваше имя" на странице отзывов
 */
add_comment_meta($comment_id, $meta_key, $meta_value, $unique = false);


add_filter('preprocess_comment', 'require_comment_author');
function require_comment_author($commentdata) {
    if ('' == $commentdata['comment_author'])
        wp_die(
            '<strong>ОШИБКА</strong>: Введите валидное имя.'
            . '<p></p>'
            . '<p><a href="javascript:history.back()">← Назад</a></p>'
        );
    return $commentdata;
}

// Save the comment meta data along with comment
add_action( 'comment_post', 'save_comment_meta_data' );
function save_comment_meta_data( $comment_id ) {
    if ( ( isset( $_POST['phone'] ) ) && ( $_POST['phone'] != '') )
        $phone = wp_filter_nohtml_kses($_POST['phone']);
    add_comment_meta( $comment_id, 'phone', $phone );
}
get_comment_meta( $comment_id, $meta_key, $single = false );

// Add the comment meta (saved earlier) to the comment text
// You can also output the comment meta values directly to the comments template
add_filter( 'comment_text', 'modify_comment');
function modify_comment( $text ){

    $plugin_url_path = WP_PLUGIN_URL;

    if( $commenttitle = get_comment_meta( get_comment_ID(), 'title', true ) ) {
        $commenttitle = '<strong>' . esc_attr( $commenttitle ) . '</strong><br/>';
        $text = $commenttitle . $text;
    }

    if( $commentrating = get_comment_meta( get_comment_ID(), 'rating', true ) ) {
        $commentrating = '<p class="comment-rating">  <img src="'. $plugin_url_path .
            '/ExtendComment/images/'. $commentrating . 'star.gif"/><br/>Rating: <strong>'. $commentrating .' / 5</strong></p>';
        $text = $text . $commentrating;
        return $text;
    } else {
        return $text;
    }
}

// Add an edit option to comment editing screen (в Админке сайта)
add_action( 'add_meta_boxes_comment', 'extend_comment_add_meta_box' );
function extend_comment_add_meta_box() {
    add_meta_box( 'title', __( 'Comment Metadata - Extend Comment' ), 'extend_comment_meta_box', 'comment', 'normal', 'high' );
}

function extend_comment_meta_box ( $comment ) {
    $phone = get_comment_meta( $comment->comment_ID, 'phone', true );
    wp_nonce_field( 'extend_comment_update', 'extend_comment_update', false );
    ?>
    <p>
        <label for="phone"><?php _e( 'Ваш e-mail или контактный телефон' ); ?></label>
        <input type="text" name="phone" value="<?php echo esc_attr( $phone ); ?>" class="widefat" />
    </p>
    <?php
}

// Update comment meta data from comment editing screen (в Админке сайта)
add_action( 'edit_comment', 'extend_comment_edit_metafields' );
function extend_comment_edit_metafields( $comment_id ) {
    if( ! isset( $_POST['extend_comment_update'] ) || ! wp_verify_nonce( $_POST['extend_comment_update'], 'extend_comment_update' ) ) return;

    if ( ( isset( $_POST['phone'] ) ) && ( $_POST['phone'] != '') ) :
        $phone = wp_filter_nohtml_kses($_POST['phone']);
        update_comment_meta( $comment_id, 'phone', $phone );
    else :
        delete_comment_meta( $comment_id, 'phone');
    endif;
}