<?php
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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'DYmy5nAwXEBQA)FU');

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
define( 'AUTH_KEY',         'gER-yv}&}I&z:d8M.,CgGdl{x&8^Q,&.2NW6?G+P/,bi`dIWp+ut~?tCi(njAq?y' );
define( 'SECURE_AUTH_KEY',  'rNCj+_*0?rlwTm$n~Wx/e~:QdagIy=$H:>%4Lk:0|L]FTm`:)^BRDLrP7%xcw^YF' );
define( 'LOGGED_IN_KEY',    'a{|]BwPF#1S|<&[^& X[^#bep7WLSJVL=tdh#WNv>uJw!x8?i-%otuvx?b;g9tKP' );
define( 'NONCE_KEY',        'R7Y`/~SDRXd(/lJz3xlim_6i=(!NBzfRdNc}cei]{Wc&}*Rh)g@,d~%t7$@bW6:$' );
define( 'AUTH_SALT',        '_~8LTrh}%OZj#W!L1:$H/ObCA8VM?=WlC<35!uSfPqb#d*>edCxvJ)u6e Tt4.EN' );
define( 'SECURE_AUTH_SALT', '-WFT>7X9&*nR>*oKro9e~e<kQ&INlH$}[g]y;+6 ),zB*~abe$D0?K7Q8tdKo>)D' );
define( 'LOGGED_IN_SALT',   '$4||^Y4RML{(=OT_bYF40F)Wyl;*YR7M0stYhHw`MI^Qu%OEDXLZ>yPMH F8B/OR' );
define( 'NONCE_SALT',       'ok970ZZtuoBr&yI ^e8P#qskKBCz4+Q% |xJfw &iZcj9Mx[+gqnqMN2pr3)rM-j' );

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
