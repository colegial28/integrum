<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T7WMhdtKLWeayNRI++ir1rdSs5jBbPKpcsrHg6nvg046sAwSc848WqqWPQcBO/OUS+wbOY24YyNz+R42IUo4UA==');
define('SECURE_AUTH_KEY',  '3zSSR2ubfN016bw5XXia07wa7YY0rQLcOGmPu/AncduwpdpDayKlyx8TbuW+6BJMmc/ueoYOCLGKPgON9yiAiA==');
define('LOGGED_IN_KEY',    'yi6AaSD7/V3ImwsexImGlnW+LQ1au9HBT7MfHULWpyRLVTUD4X/ll5pViHqm/FBu4XPlq9b7qeE8cebG+zUl3A==');
define('NONCE_KEY',        '6Jf8zbfwIRE8vQmuwJJhL6W0ZyeaG+2uPzrJlQ2gr+0D9+gl2+ULJrazUhi5Zgexy+3h0rPwv83bN3SDrLS4Jw==');
define('AUTH_SALT',        'iuycMEw43cEFKMVWHTn4i0V7NhJGXcxkTfd88J2NnU2XTP17VKxevyyrmg3/PWN52DGhGMzjY/UK/RJ7odLQvQ==');
define('SECURE_AUTH_SALT', 'SisHA2xN7HuxncUHWxU3hx7uUAfyIwJsiVTu1SaYnu4Frjx+WuKVGML3xlQIZB7v8XEkIuDm05S6u9G5yYpLwA==');
define('LOGGED_IN_SALT',   'lXy0V93ge8yPGVCS+wvoUOK638HQm+Qxjk6QXKrgvgBBRsc0EUbxCi7Jz4dDEKJk73liBoEXWE3Vc5jTmFsfmg==');
define('NONCE_SALT',       'KURiMYHUiVQMHRnV52DKa7Yyg3xLwMmm+sOn1IdiMQ2ZwFnuouFb62c/5g0eZv9TJHsNllZX8LeOrQHMoNhoVg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
