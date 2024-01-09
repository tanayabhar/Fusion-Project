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
define( 'DB_NAME', 'fusion' );

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
define( 'AUTH_KEY',         'r.g$G0$;A-1Y`1.GU!}>-7j?o31B1k(`5QTs.Y4uy`!4|V1MBXi!4QdS<I!$^.[-' );
define( 'SECURE_AUTH_KEY',  ' 6>@KpSTr0/7]G`XdE6f$DHTs 0(h$;j(zDE@{6MU;YWb_g{/i+g$B6SYd~et7Dd' );
define( 'LOGGED_IN_KEY',    'q^Ow<OLJJjydKY(G(SzC/q|M!U+cf_Fceh-twXh&`_X]k~J>o%RDdaYO&4&&w}:e' );
define( 'NONCE_KEY',        '(qA,s~283R|9Y[X6Ti~$H~0+b?,^g`}zB%6SH@Rnej7P(Zu$da|v8[iOa|qb-cVC' );
define( 'AUTH_SALT',        '.4iw{S4OK(>Th6s~9XHv.kw7+wa5^`e&j5I4O:Cyt+dgw-VfpFv}]xQ61vz#[xc0' );
define( 'SECURE_AUTH_SALT', 'j&i!(sECyyt )5m@a0?:%Z<D<O TB0FT,ZjF|JSXnqN4IkSD/5Q3<=&l=4MiTKb3' );
define( 'LOGGED_IN_SALT',   '~rav[uweGEUsu$; 4+&uVw4G>Kf`Dx3je%NgvyS7ayY^Gq!]p(n+BaCE<3KPtpA-' );
define( 'NONCE_SALT',       '[L*!wi:{%*Y1s,!MC2aaCbfKju)PfKaZ=2L+k2Ce%fIo5=O-^U=oY{;y|/>Be^5i' );

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
