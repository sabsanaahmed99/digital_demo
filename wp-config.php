<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digedubd' );

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
define( 'AUTH_KEY',         '/j+vg8H<X6=LQ%k:_)OROA W~[9}7:<gvKb^a`aHD|uM/(k;s-qdJsdO<@|* aK4' );
define( 'SECURE_AUTH_KEY',  'T~FD%+]Na;y>1qOvuE:reKm%MSV%8;b/f&6W]6e)Dd*Kkoq:]ZHo~p7pPz~].Q:K' );
define( 'LOGGED_IN_KEY',    'XmPiKLz@-sh-%[J%/({5Gv#mTrg[ udkHB,&f`.s?~^O(ZYeQ0EtTUuE11AX:2bz' );
define( 'NONCE_KEY',        'dTd,giy2bw@>?UOmIWW^jN]Yh)6D5P1J1]@$cOGC4i:$*Lovw~$ae1$DjvnBj;{p' );
define( 'AUTH_SALT',        'zhDB5uLi}F;@uwJmXfX6!,x|2Vm.+t2FFaGa!jXD%V|Aj8S?O :,j^Opaa)Fq|H]' );
define( 'SECURE_AUTH_SALT', 'hh+iT5|<A.W^^jLA,ak$WI}j5c*plm3mNlv_uP<b~a@ak84`<A{qb5f(8FBWGo[Z' );
define( 'LOGGED_IN_SALT',   'ao gi.>0:*W$iww-^HYraZZs^BD0lLQvY>9?I.kl[5M?bs,)D3AhC#M#z8!2z]d-' );
define( 'NONCE_SALT',       '=)$<CC?M79(l;F<E~SZEy@d|E<(RO~G1xM?@3v*_=%TZO!TDGg4em|&4%LYs.KlG' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
