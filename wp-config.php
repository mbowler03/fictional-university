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

if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {

/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

} else {
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbqfk34ixassff' );

/** MySQL database username */
define( 'DB_USER', 'uufak1gkzgohyt' );

/** MySQL database password */
define( 'DB_PASSWORD', '1[215%1u41_b' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
}


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
define('AUTH_KEY',         '8OqPioKmzQrPRuSBnyMLFLo5M9u6ZissLvfadpEg3fiVw846Cr3d132C7HeYCBLDEoi5iQ0pTvC3tcccPVJB2g==');
define('SECURE_AUTH_KEY',  'wcR4jprxSnZPxKIdEBi6mAOjrI8fEqWo4jjDD+18LmXN8XCJLM1dCBZavtA1Ei/zA/j3+cnQvnED7Jz8DnDBGA==');
define('LOGGED_IN_KEY',    'JjUSHIlPO0gi1RuCaDrk9EZ/QCyRyOREtNLzT0uqLwSk929tmKa49vn8yZWB3QFkFy2ymkMZHKVoshkn/B8BMw==');
define('NONCE_KEY',        'IzCjl+/atj+ydgu8/7sfnEqAcNApFY0Y6s48LvNa/db2HOjuSfsYTRSf7ZVv+8h7enQrsKJOAAIwMnRKvmch/Q==');
define('AUTH_SALT',        '56zNhg4+Wb0oRwzh467/uk3v/+lwxEYXCsth4PHMr/E3ZKPhbRgdrTwWzuuLB/eT67+G2WVIHExxhBNE20fBhw==');
define('SECURE_AUTH_SALT', 'rXVcrq1P0ASm+sAkXB/92xa+Wi/oagCErjORDrmQ48vQpaP1hIYU5YAg1dqwKymtVdtpDzoBSDC1UoG4b5IoAw==');
define('LOGGED_IN_SALT',   'w9l3p804XfjgZzNZkEFrP6Vx3QCDniR2LnDre7esi8LyStKi7TcGrotUgTbiFivFLUJWLN+4vwVgtNzjnavrqg==');
define('NONCE_SALT',       'Ov0Miux1/Jgb6r1tlxXOvXWLJg/vsV53UPZN1+mZIUg9QdQlmtpLQ1Cih1ScqgKvJpAYRcuXfaQrSWYcSFDjzQ==');

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
