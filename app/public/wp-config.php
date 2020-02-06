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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'y97x3H3w+7i87LNSQVqJ6luY1Qy4nhrx5p+O9sPHy/86ZE7hNggIqLSDQsEDgYTx49MeUTfHbZdXNRmKijUJbw==');
define('SECURE_AUTH_KEY',  'SKYoUd46agfMiLTTjXdpbv8Ad4Ou7+3xWl6dkskGRWsNdTtB9PHJYoCblYU9ysYO8ttPX1znCc8NmT8ke6JDjg==');
define('LOGGED_IN_KEY',    'Lq/vFJ6yoZq8C0d4Plza1ysHeXLIBBTPOyk7UfE5Yep2heFyQq6lQa7ge/7KoUmS9CT/0ASJXRuE0N1TbOB9iw==');
define('NONCE_KEY',        'uwHS9os5anmYbul8A8EvOsprXMZXdHwt/CM5+WftcN2Xi8uCnMuz10FmqJ9gMpBpBRlYcdWyIg5XZV2A17lu9g==');
define('AUTH_SALT',        'YaRAs6xJhXbEyD0Mht7D1VxaWOi1cUiODyHK9r3ozmrybzhSb46gCCvx+/2jkgi1YjZjlhfRPxfwI9dUHqPN+A==');
define('SECURE_AUTH_SALT', 'b+61V6ZCSaieSrh1vuDHOSo2BF0hvHPlMaWSKPFC/lRONbPeFqgU9Muf6/ATPS/aTJBXx3TYSs0plxctjfk4OA==');
define('LOGGED_IN_SALT',   'DK/GdcznO96BSqE2IlID+kfyrjOzT2WmL5KsOBHuFi0KcuPTBwU5cF1MCcizjjd7FISCN/dls67MJnGb/9BN3Q==');
define('NONCE_SALT',       'yVr9TG0nn6xUXl8Xhvqfd89MEcDHUY1/GJ9otIbspaNi/vYVwYVnvvINw8z28XaDY+LDFvj9vJ05L6VG+9/Svw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
