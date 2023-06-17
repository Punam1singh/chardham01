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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myweb' );

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
define( 'AUTH_KEY',         'Df8%/*`AcLr<DvT_=R+#d%MX4qM`L>ST?%$xSMf5~Zolw}tZ?_LkZSk6nUhhj.Ng' );
define( 'SECURE_AUTH_KEY',  '*o.Ej|T!s>>`Mn%:t}o0i7KF=hr&{+ 2SAmtJEh@niPQn.Lj|Y LFwS6B(Z0<eH.' );
define( 'LOGGED_IN_KEY',    'zk^)~t[<MkqR>#cUd4WU)Sy=uAvqj(%O/$aL-c%:H+pZ0zSgWp6vI;Q3bL*jkQ>&' );
define( 'NONCE_KEY',        'G|L<U%v/*AY4D0B_Ou@Qzz(}/:vw6pX#B_9|5p%x^&&YcApW xUlkH5QrJLY__u1' );
define( 'AUTH_SALT',        'kz`Y)%?U =_YT_%l9|tj80&p3zt#xneKH ~MuiJX(O4uB!rYZ}rkBHG4O L^H: 3' );
define( 'SECURE_AUTH_SALT', '-0pGKgx{a:;eStKecYP9_l&VqvpDXleIlSQ&z^pT8Et|ssxW|4O64<a 5KgypQn%' );
define( 'LOGGED_IN_SALT',   '9wP6~W|X&o;dW;;]A/AaJ)uzELZ|PW!)x*}?; &QO}0o?qz&Hwi64mJro%<T~A9=' );
define( 'NONCE_SALT',       'K h/0b3.Hd5ck9i(7B#g`kq+C6_mDS}f TP?T[=bN;OkGrFn&1Jm#W~K`f|vTi:2' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
