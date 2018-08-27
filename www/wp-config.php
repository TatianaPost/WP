<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'myDb');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'db');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define( 'FS_METHOD', 'direct' );
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>3OCk/]K<nOjk6S#_p[ZPRhgklXHaEB&ivYG:yOgS`.jQ7)Nwx9_odnyq}PL8jyI');
define('SECURE_AUTH_KEY',  '}xJAXZgYE{8%7F@r;/aAwz^x $5C>f4>!j?ik.V=Me3[2DOPymd1q,F-[4/XU3w4');
define('LOGGED_IN_KEY',    ':Rog/#P-*G+B8@_gQuipG6LITqQC}GWiz?MvK9YJM[vAk4OMOnrp2Z;A{KKLAi60');
define('NONCE_KEY',        'i|j#4l8+7)%K_ESQQzxFOCC->.l13s$e<f8@vrx^Sj#{{X&-[5zmX,1_0qz0j^E3');
define('AUTH_SALT',        '_GN^0~fWm94Y^4pR//8B )JHqJsJa5SJwal=Az+N,LNd)@aW?;7~3(ZS@o?<-~B(');
define('SECURE_AUTH_SALT', 'E]t0G`^y~+#AXc[DVjfkrQ&{*]cHPY(KIGW#O.13P0@3A#OTXYk%[;Vp|n{B&_ic');
define('LOGGED_IN_SALT',   'T>ZqXG9jY|(U;Lx6>Ub,}~H%PeU:1Gt3AkpCC58p)xBo1oaY0U}(EY)nfC6@T:89');
define('NONCE_SALT',       'u}GR-Q0o5?*1!]8%7Jh8@#gSJ<G~8T9!rbXZgPM|6jlA<Z,dYjo))Vlhd~g/:b6P');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
