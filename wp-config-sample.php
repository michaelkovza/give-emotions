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
define('DB_NAME', 'database_name_here');

/** Имя пользователя MySQL */
define('DB_USER', 'username_here');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'password_here');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

define('WPCF7_AUTOP', false );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qVm]TOs!LtK;0EzdC+8[Di-OBr;s!G3Xx>YyW=K%jsl58y,?5yFH@r-*#2Mrj(]B');
define('SECURE_AUTH_KEY',  'r,.vS (oOBP*(+bf1VHGT.?A_7Jh+dH]l2{uM>1JRg(g;s3x507:qv@H):GLYtv~');
define('LOGGED_IN_KEY',    '0spt}[QqC4Z&t<FzBGpGG)6y=+wZqi:X&2/Bj_{1(+>H%{YaO56bcb{svH{$(/VO');
define('NONCE_KEY',        'srd$AvXNam`?=<33!]DvbH`Vi:l{fvbIKj&q<we g!8::rnAMo.-QSFXUBIJl*c>');
define('AUTH_SALT',        'SP/ra3PF]t[#)I2>lq7XEdM`V/G8e0kTKIy~l@7%;fa2<pg<=N~]Yugj5o{sb[a;');
define('SECURE_AUTH_SALT', '@%CwJ=VX T1I@&J|gBD&4&zf[^5F+bH)srA?B#%sb/6*T&~a?l4a//DiZu_,KW!:');
define('LOGGED_IN_SALT',   'fo$#tKG,Br+=t/>K=zR,GRXOTyhY4U8Z<N}So/2h%!S[QY/dQ=@oe=]BKt!&KvD.');
define('NONCE_SALT',       '.mbv@^KgarKY7E;YEFLLhG7y`R>uYh2A$V8c^H;Q^)l +@dJ5Xq6 )W|WAbYS8IM');

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
