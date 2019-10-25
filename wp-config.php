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
define( 'DB_NAME', 'ramil' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'ramil' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '6KVF7UbFZB5Q3HGO' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '.UOG+e|}^3GyrQe`Ik >c6QTTbl}[:$e~^5 5;qb&t?eU]O2KD=heR@,8D2@]({f' );
define( 'SECURE_AUTH_KEY',  'R|&W+`s{,*TeKb>~|}^bmnnnU[~H(V)442!20;sO0X/MD?@mB41KeT@Kv*9pfAW!' );
define( 'LOGGED_IN_KEY',    '7t<#^y@*4LGKFtEJ_9r)]-44MC86Zs`l`*XaIWEl,m9tHn,>(/f?:[=B|m4:*d[{' );
define( 'NONCE_KEY',        '>OCm0fqWOFW!iVU_4t>h.;-6!@uRp6<|$tbl| dj|z9X({F6:h(~9[iYS@3g6/yd' );
define( 'AUTH_SALT',        'MOv9OK~&m `P.g[f88f~;&cAda)$3jz[0<&j%{K:RX8Ric|=l4~janbs39PZj@(`' );
define( 'SECURE_AUTH_SALT', 'y&mM!Y3lf>`Qoy{b)qB;d<Y7Hf#>4-,/#F];$4mu#X3n&dFKkdhpo4T.7P?uV( W' );
define( 'LOGGED_IN_SALT',   '3DR!MC[BS~yccBad8LAmDY^-G<-fj0*;b;!2^v.;C#W%r<IjXrWY@9Q{b]Q8OWzp' );
define( 'NONCE_SALT',       ':o@dc8:dKhX8L2oL<>mMA{F$z2Z}Q{,5|S_8cg<m>BO(B7?B_.^=OV)kiTst|0&v' );

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
