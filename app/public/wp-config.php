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
define('AUTH_KEY',         '04CkZVwQvaswrh9ekYc9BZLalJiMmaw6Y7YC7vt77rbbdL+Arfeurp09PFTjJDVnUuZ0o4PLFphP2KTMjTii9Q==');
define('SECURE_AUTH_KEY',  'UFHSc368NKPuvBjZGniUyb6YGAhW5VKKoN61gfu7lhD2ugNB4ZE8Zy5yCarg28QZTB3Ln/ISlEnY11fvm3vL9w==');
define('LOGGED_IN_KEY',    'BZI20sIn855btc7IGadY5pG+x2K2KUbjthHBXIgZ0LKmeJhyHKazX5+Pq6mUeIdDttE+ujLtIRcouoz9UkaKSA==');
define('NONCE_KEY',        'sUAtBxCEt1JYifguy4Ny1l3dvls1w8nql9Zh+dcJj5wvw33uz4zgCAZhV4czm1t4RCH/MAoWA4Bcw3WhuGysOw==');
define('AUTH_SALT',        'EF+5rYnsrhVYzi8M+JcsLsVqN4cWmLphfJanY4gb0Rq6Il+oX/H/PhBLBn0H+nGYm1ZOySCMoL/XQ2YMprKWHg==');
define('SECURE_AUTH_SALT', 'oeZgQo9wAhooANbAo5oVeM83aVnnwwhxVBcDwyxWJbrhzQqyqzw1WIib4gSwujX28Y931tI+bx1qMDbxysvYCA==');
define('LOGGED_IN_SALT',   'riKzEz+zhSH5aUH7XMDtUi/1vsrC5vTEyY80PPC3Sy+pDb+QTmMxi76eyIpk+JWsTEHjSiJPRXSZMiTgWlVtWg==');
define('NONCE_SALT',       'qgsQzUzyy3nRmaAVHGfr439NPyz8fWQ7llEWCf1nfC120LPK1xp8oz0ulsMdVQHhgUardP6KbBfsyVpV3MY9Gg==');

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
