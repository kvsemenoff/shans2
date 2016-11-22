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

//define('DB_NAME', 'kvsemeno87');
//define('DB_USER', 'kvsemeno87');
//define('DB_PASSWORD', 'a123456a');
//define('DB_HOST', 'localhost');
//define('DB_CHARSET', 'utf8');
//define('DB_COLLATE', '');

// define('DB_NAME', 'shans');
// define('DB_USER', 'root');
 //define('DB_PASSWORD', '');
// define('DB_HOST', 'localhost'); 
// define('DB_CHARSET', 'utf8');
// define('DB_COLLATE', '');

define('DB_NAME', 'shans');
define('DB_USER', 'roott');
define('DB_PASSWORD', '1111');
define('DB_HOST', '192.168.1.189:3308'); 
define('DB_CHARSET', 'utf8');
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
define('AUTH_KEY',         '9`vOw?oL=23sBY!_t-o|@JSRW;~S*%>2w,C;uuLvh3#JE:I_[Xcy)=eGX/v+p-9B');
define('SECURE_AUTH_KEY',  'u0jx3KUd+qp:a-2|Hk{;+V)k<nLn,/`<t3e=+2L8 ~4x-@hl}_-_pPmP%K-$>DUY');
define('LOGGED_IN_KEY',    '}8;llMwdGqunG<-i|L=Py>4P|WCGv!CqRog@Fuw!liTOTD:>$@MOXrNm=?73):b/');
define('NONCE_KEY',        'y]Z*7N3!o-PD6j7pr&a~Em<3}OR2H~0>`<I n1o!eG3-P,#^eTsb:_&E,x.Bl `j');
define('AUTH_SALT',        'QO38K5nv+v^Nf.=EDzXTSB(DAUJc9i</SOC2VzPKBa4sjY-%ceZv+Z>r1wy&w=~<');
define('SECURE_AUTH_SALT', 'pP/?Do{NePR+*/-eqT3[dxLBeJ!n4*kLmHAf28C]aXW=qU;-g8gK]E`bM=;Gv)UA');
define('LOGGED_IN_SALT',   'Iqc`y[yP$#>M?_#$j?~3y^/D4Q~#D-OPb$-aKDX!`l<IE:?apP_#QcM2aR@Ko1.~');
define('NONCE_SALT',       'v8&ol|AUhT9%qqM1iiNJI3k3zhBKE?-#D, O9A;sj!j~x&C-3T.?G,[`TudBzwd|');


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
