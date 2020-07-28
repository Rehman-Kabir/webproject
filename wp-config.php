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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'rehman' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rehman@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'k^d`%Lf+{LLP$V/kb;nM+m:c<TNtQY7OGcs F9LX@pbo3~tez`K&O;$eH,HC0+S0' );
define( 'SECURE_AUTH_KEY',  '3%5=2l%S4)|jIOX:0Uzu8u}+QO>q}o 38bX5eHz~ly)/7BS1:1u$*?x/Z>wo[ G?' );
define( 'LOGGED_IN_KEY',    'pQAF;}w&d;0!h,`3c{?ZT_WDdzP}?zGtek;q0 .f1mOxCV~D.KDD[;BVNrtTJvL]' );
define( 'NONCE_KEY',        'PcPPW$QU%vTrP}7FcN!mV+s1[XR9[JRh6$I2!9N<)eW]-ZM$9sK/*p.{fp)v2tm_' );
define( 'AUTH_SALT',        '/] 0X2nhaXCj%!YGb(Y<NFz^L-:5EB-`$uqY[!s})4`)X/!UKJZb}xd9xKe8M9$R' );
define( 'SECURE_AUTH_SALT', ']A.NsF/fv._[c8W+<~0B]WU/R~qgb rD>{*bbO?W[c{>I67x8Qk$a,G@5&^Y<M-g' );
define( 'LOGGED_IN_SALT',   ' vVhr}$opPteU(b$nx0AFK~#~3|1Q[F,eW.gxt.1Pa<V}s}T3ByzVLfxsuA0=><;' );
define( 'NONCE_SALT',       '[KY,fBI/Q:*]q<bW,RVw}C(BYt,utan^eQ)q3ixZ+(.+4u-{@=];NWUh!VsZVF,V' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
