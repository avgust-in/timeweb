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
define( 'DB_NAME', 'cd28667_5004' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cd28667_5004' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'qazwsx' );

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
define( 'AUTH_KEY',         'fvaqTjoP6-BV)iaK!2RY Ej_/p0Nn`;b34c3D_bzw|b:50tW^[<f.BQg$|/u=aw%' );
define( 'SECURE_AUTH_KEY',  'hV;A)SEvg,QgW2*;IUe,g0k$1UEY+T}*9o]2 d!RK+0;EuJc@`_D]V-<lt$>WWM1' );
define( 'LOGGED_IN_KEY',    '-Si./aZAB2|=~ux{+)Wivb.V&`~VlT>Ori^z|RAV}@R{r3jR1)kE*Ce<63@EO:<c' );
define( 'NONCE_KEY',        'IEh.`gA78M&8%hb+JH#~nP&1jq6r1-)T5AZGY.< u;h@nOkXPB*`aY]2H aD($.D' );
define( 'AUTH_SALT',        '.VQ!+.3dYMMLk-4Y8~u>jP;}9q0$!4GLp)G*~Ug:2pi`t|26 *.+e0vNlTm9BZDh' );
define( 'SECURE_AUTH_SALT', 't98g6d]tk.KJjMZRtBfKdNti]%cgH`o_uRxa/))Eyb^HtYJXB<}#g!aSX81>Jgao' );
define( 'LOGGED_IN_SALT',   '%+5y])YiInzOyM6BfWrxqy9^CU$]sF`bIl=XFL5}>ZhK }S/RQ>r[7O(p8M/747K' );
define( 'NONCE_SALT',       ']R~g=,4:mR9&2wiK@37C=6D;Wabe=7}Q-u[Rk ifJat HYXv|lOE4n}_YQ!uHy6;' );

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
