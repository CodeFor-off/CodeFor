<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'codefor-bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'codefor-bd' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'bC0fZ6lV4x' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KkqauJ0]H?NE)|iY;]8m;*0osZ% N=8%`OZJ!+.53p7`0ji={TX2R?r^l.i--8Px' );
define( 'SECURE_AUTH_KEY',  '/V5<A@{de.an#=8K*F;kw`|[1]y{h,q+)RhJyL7B@P!6[)3~AwrxVER%aFJ.rxrg' );
define( 'LOGGED_IN_KEY',    'pab_WZ@^l`G;CBVsiqb*&}3r s[C9Gl*>!K`!Yc+2O$Ta^|%lsb{2U2I<t!MBU~v' );
define( 'NONCE_KEY',        'UKSC[pbU@Xs=5N%rQ3{$E-f{?s8q,gbtA1+B#4uMdPK_p$<GWArT,4Kwb802#cVQ' );
define( 'AUTH_SALT',        ',l!N.On7oa&,30ydPPJ[0{XHZ}}j-_#0}FRPrg6n|`R53vdxl32.^q,5aFMx}<~h' );
define( 'SECURE_AUTH_SALT', 'g2Uu_%eB}qpPb?yY1fgn5FXZ_[sQ?Q1+j[6.CErhll8-UGHIPgkR:j<1JAr+g^p#' );
define( 'LOGGED_IN_SALT',   'EB7|%6y]OX]*#sg_Rv`a%.ssfh^x$Fkk}6L$N~O0f~GU,d?V&xC1v2D)V9OIua]=' );
define( 'NONCE_SALT',       '7XIN&5NhQ.D5YeQ^><KHSsKppFu60w3Qm;V?/}B6Y`>94Wbdnhx6t5iH{{xS(JbJ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
