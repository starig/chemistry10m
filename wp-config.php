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
define('DB_NAME', 'himiya');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'kesha123');

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
define('AUTH_KEY',         'az(jI6&dy:VTMyzW%x<wzTL=xue-KMpc.=<-BmMC@2:MUX_>$W&jO(?tLCb*2E$J');
define('SECURE_AUTH_KEY',  'KZlW-$Gy3#KZVAL&h|c1!^km%?WfnYfG|pDEFw/8[,}DUv+>BwI},LvM2,bUJ^/&');
define('LOGGED_IN_KEY',    'S^dl_t{jMD,,Zf+Kh?7v:ahS<gXV42&t@IqQEnk4aIN1p:xy0=U_2bR&j/4*J7z!');
define('NONCE_KEY',        '3kA^*.P^i_b.>G!%tr[l`AE?%Tw~zXdZggfT?iu)QI=3t+HpkR)*1]}S6bd}v:tB');
define('AUTH_SALT',        'nQRh1RRC]J~$l;S1#KxPp^Hhn&EQ=3;MN3-J%-<x=ue :K8d0S Vb+[/b-3$i)<P');
define('SECURE_AUTH_SALT', 'V:Vcda*a[_%es%~B{zI;`&}sFw|OCM|%d&Tv-Msai?X5}(VD) avsQNazlOcMI*P');
define('LOGGED_IN_SALT',   'B)962$sw_OtNH69yd:Doe>G.^Ufwu>vfVH/f57prjfZ4 ,XcpZRb>?*pKZg[)`gp');
define('NONCE_SALT',       '*@Rt-%zM}bD[2{l2Mk|Zl<v~YxCqOQw_>x`>N-.}P=c*QVxWC!;=>^?A}qi6C}NP');

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
