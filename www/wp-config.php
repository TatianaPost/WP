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
define('DB_USER', 'user');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'test');

/** Имя сервера MySQL */
define('DB_HOST', 'db');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'paQR$*~,nK1,7aYy~<7e4ed|_+s<m7e:5p.AMxRpzB/G4-zB@#oXnm%n#:/]<G45');
define('SECURE_AUTH_KEY',  '(<690cp*aC=0)dnKpskr%BOX5n0#4El[PD2+RtG_mU]sJ)kC&.c [)Q(W[qS%W2-');
define('LOGGED_IN_KEY',    'UH5):XEc+BqQGAq>k]m504qzY-[H8eb$o]vp+{_Pet%,lB9E?T91YT|Tbke>H63t');
define('NONCE_KEY',        '$O)AKfZOv^*4s9{~<Q>I]fW.{Dg!TQ.<Dwgmvtt8e*d}6=>6G2si7KjU{($#!g z');
define('AUTH_SALT',        'H(k$-BK0sOqKc~K YKr&1!11kRp3^14CJr]zgkJZO^9]Dq6_PgL+?><_G{Ao6=TN');
define('SECURE_AUTH_SALT', 'q~!3xQ7Bc61`7X*s`BJ<_4#+b9fy+P0Qw$Wt_a_ N.X1Hy.6m>wLW_Xr%_9Ij|gM');
define('LOGGED_IN_SALT',   '|@nuqUL@n9%@{Pl+}ygcz!T;}2-El2;*l*WQ;fGm:O1GXpAl#`/?s[vzipYMxtI]');
define('NONCE_SALT',       ']1!&V9M5$5@w;i)l_Xf|b7=%^RODH;UlHvzQ5|I:i</cB8BOCgd:@> 228n/WfCu');

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
