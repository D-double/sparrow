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
define( 'DB_NAME', 'e6y0m4c2dferongc' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'utgywjat11vvwrar' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'jy9wwl8b9pmkvsek' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'jw0ch9vofhcajqg7.cbetxkdyhwsb.us-east-1.rds.amazonaws.com' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^QDW0q.?!4J^M-c&rJ8STjH{{.E%>iy4CQAoy[+oL6kHg*)>jf~qo<*[T8b~f%a_' );
define( 'SECURE_AUTH_KEY',  '/b-?0{~yq8*qrtloXsru/YxNplyL0:GPvur`hM)d>XHB`XkY}RYWFcnRAHwI!Gbq' );
define( 'LOGGED_IN_KEY',    'aN%:rp~Ti/8an{9PB>%=4T/4-Ck}tDuxFl5OA,i+IOZ{{ckr.I}nRs#tpzV&iBO/' );
define( 'NONCE_KEY',        'sK3Ic|dS)@6ikUo,2HkD`cab2v,W?|WJKD_1l_b|C$!at$.]J*w66z_u*[emE-mP' );
define( 'AUTH_SALT',        '8zJ@Cgytf& lP~iTIvfZqj!4[ZZ*3F.]kuMa)Fws^{Ljl8W_asu2^+%12NKPaK?,' );
define( 'SECURE_AUTH_SALT', '/7My:L{f2 -6ds1Tx6Ye#e*!eQEhUwv~,$h)!i@%v7o.wf5a$/]&ecePD<?5i&OL' );
define( 'LOGGED_IN_SALT',   '7@1d`pb A7|fqL^_> {LSRFx)s<$VRZc/0WK5&+D>c(O:RHtRXgQNg`UhI-<j@FA' );
define( 'NONCE_SALT',       '}bEAPcFw;G:(][H.p-[dEd[o:CV5WOpL#6Z.[O10IVkb}&BWoJ4u@oucN|`dJ|>)' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
