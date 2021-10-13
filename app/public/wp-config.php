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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'Iv5R0MX4kC8rKzN+OHC7LOLeS4HnpGrs//C6OeunjUR4yst9kS0UT9cp/Gp03IRQRLJkrpQENow9S2ogau3PlQ==');
define('SECURE_AUTH_KEY',  '/eMUD8gczu5yCaF20NeV8fYg9dEcmBk9qd2y4sZUU/umis5XClyCw3JCLMj5VPialY0tOgyMd8i3PgdfrwLbJA==');
define('LOGGED_IN_KEY',    'u0TQHzBq69ZfhYnauoNt6wtIISxdNA+n1hG51pz37t9GCXoSi59MgMf4eLdFyN72QIgvbd8WRvuhV8a5byeZsg==');
define('NONCE_KEY',        'Qqg13utz1icIE+jh63yIZWhCspOM0Ln8G6sKd48RwwXhUQjsdUdGnl9th+wdSkeJF8C3lE19JTB3oU8rEl0mLw==');
define('AUTH_SALT',        '9aYCuxIoWN+mrX4Dq0VNKUY+s+roDdMiXiaRF6LKf3cgeyu8MXOD1BsZQ9i0iJvgvdgatf/BwoRv5BBHAx3m9w==');
define('SECURE_AUTH_SALT', 'rWuE4Ri5KBN/cn4/83ndGnRliO12e2RTH/MECUxM/3vwzIdVF2RddHtcwxdSOWAqlRLLTydTjxxU8QqmKLedOw==');
define('LOGGED_IN_SALT',   'uB9jvVu+hUPcl4WATqin5XQFCSnvnrcf18YN3T/ygiz0/iENCjJ8LBeC6U9ZzllRQhCP9TnmIRPnhuHXGmEOew==');
define('NONCE_SALT',       'uyECJKOyUDRW0qdoRSC62Z4WJYFh3CVR0Sf2ACPXGiknZ9bgbx3ctt6wT5aMl9Sp8CzE4hxPDiuY+5Aq5HUZ6Q==');

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
