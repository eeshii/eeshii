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
define( 'DB_NAME', 'baikal' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0$@P-d@v1{{<zR.]l=u6s[9 Teu#[2,zI+pz^Z[t<L*w&p(nv6!^/A9hrnYNW)e:' );
define( 'SECURE_AUTH_KEY',  '>!^bGOtJqwzr}@7.i#lncALvXnp^)s2@lg40,grbV.ES!i/: :1i|^wWTvP;Y$~w' );
define( 'LOGGED_IN_KEY',    'Q+SvsJ2Dy#=|y5wXJ7?Y]**^Li9^4  `|6BR`qnyhsm}<$`?4T_y.Vq7C =4 o9=' );
define( 'NONCE_KEY',        'Qo?N;N`t`zIAFWrBud1>=vqTWy;zOU]#n;$Ks2lHg^Qxvxn?iSYcf3zS ;hKKU M' );
define( 'AUTH_SALT',        'Ox&{n7)5$]2[!Rb:&gRjEb${xrp7mE*guxpQqI[z*|7VT7~!,C{vJ?Th2-B/w$0/' );
define( 'SECURE_AUTH_SALT', 'lZ95wv{Z9}+r(*/iY)|-,EHcUDpa3cxQ.^E@pL+@4%6nwEg.%3J_Bu&ZQ]Cmn~:J' );
define( 'LOGGED_IN_SALT',   'bd~pbgaibV^?-kbjxDdv;w$-mn0C<]O39<&Kdcz:Y,B%@(|%_!M55@u-WuOqxLF4' );
define( 'NONCE_SALT',       'I|arAb${KkF1qnoq(F3QVp-p//01^*I8*cL/@6e-0g:tFWxgm.F{l{]$_rd!ENhS' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'shop_';

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
