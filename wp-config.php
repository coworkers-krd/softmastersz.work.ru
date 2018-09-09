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
define('DB_NAME', 'softmasters');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '$uW+<pK[VA/sW1%?x7M4JOL*D7k5/[dEUedwhDB9o)%{3n>&*s=i(sMtWxq`I*sy');
define('SECURE_AUTH_KEY',  'v~qX&zsJ{4*3)Gg9qZ#TJpKmcabFQms%XH{Ldt$^Xo%q|A=gAvdwAkr)7{tW.7v|');
define('LOGGED_IN_KEY',    'Z:IBSX7gDFS.>Y!#_-taMt2a6xxNH2|Zju/<lvWKy55$%`[lb}M*);6QI_$D=`zP');
define('NONCE_KEY',        'K/_z7Kmq#vI[xU,QdqCB$u*n.R+uIgDkWVc&k mE#-kY0ymk~@2Nb$&.L9m$}Dy,');
define('AUTH_SALT',        '@]*NGsX%u.C8]ud%dB/G4>wit|p&Am?.wIY|%h@OMqd%U~+zD>J]5S}IGmX)[X(o');
define('SECURE_AUTH_SALT', '.WNy]8jQmFS2](q,{W0Y?fY eoTB1[AQ+!%gVc>INJQbVf@)IuKSF)|T?a-(}?Hi');
define('LOGGED_IN_SALT',   'VlG4^2veu{vpH&&^ye6jIgB4znfWMH9P|FtG~bp^ST9-7)u=mUz,q_r}g(O6OD/2');
define('NONCE_SALT',       'PL9u&aQx59-k5fE4)tjOe`^GBF6+5a;:>lgw,8^qE)soxgoe9~|zB{BC/:G-$R[;');

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
