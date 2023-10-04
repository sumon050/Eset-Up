<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'eset' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'H|k}AQW7s:!)CR`w`@A/i.(3$_]41YiZ8k)]6178`?x-cz}#t)D]{0X/R@.mwL2d' );
define( 'SECURE_AUTH_KEY',  '<Q1O, A<91#V 5G-B9TV]aQcE1iMou} <O;o}499K?Ohb}ArXc%6SUlEIlDDtQ*F' );
define( 'LOGGED_IN_KEY',    'vbWc~F*sQ^4tU=:f+fvtZ0b-Y,^f>?.lO?Qy+,`|e0m$YS*m>d^N>P^2&0Uzk%q?' );
define( 'NONCE_KEY',        'cfk.6Lo/^fP~G+^=[9dG/FC @b-KK-=7Hk66I.W^u)Q8R:#=.J*W8K!B}0ZdlCM.' );
define( 'AUTH_SALT',        'c]5?PWP2ySj4tjM`-8v!`IkZ6]SFtP`huR^vC?sB_DFv~5XirM|H|{R.xIJK13uO' );
define( 'SECURE_AUTH_SALT', '},YZhy4&G{)B=Cz1jO-3Ovd.yP;%n~{|=reoLv{ OyC2T$O3^t|M~1=?^j]d[h|m' );
define( 'LOGGED_IN_SALT',   'XSDWjDVFfP;o3E?u>E}IkcfRQlB@tNFMi0~eP~g{Mh2:q:K=^a&o}CO9Zi/K% +`' );
define( 'NONCE_SALT',       'fZxsX|d.B-5DsVVF!6 1:h&(eN1?^vI$uSKGvfx2q/Xab$SZ{2{k<L2OQOVlv7I4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
