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
define( 'DB_NAME', 'Spa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '.EQ`f8cQE6<|:Vp2Zo6LkP@~urTwhpwxo={mgC]8wvE7KVXY*&_N6ccG%S:M;9tt' );
define( 'SECURE_AUTH_KEY',  'T#g_sk[%fgP1;{!H?1hI*7 _Aww_!<bRfUlK&XeY/A4?$h?%sVGx,n<W<z:ZZ8xD' );
define( 'LOGGED_IN_KEY',    'F){?<l=~^$,jT#B~#GT^),p)te,{[X(!ckL}/FQB9!d%GNq6FUo[~z)a&/XE8sbC' );
define( 'NONCE_KEY',        '%-Brw;BjbN|&C410:`Z{wR#WLQ9dqE$L6muT~_.FUo|S*y7/W$(&uw2T`AO`erBF' );
define( 'AUTH_SALT',        '*t;@x(0l%~:+B-R-7q-`YZs R!(,q])O{nVLybq+js;YXXEvw4=A`jV^ZOP82ZzA' );
define( 'SECURE_AUTH_SALT', '2*FE-EBx}<v/;JtbCx^vTY&QA$:>K$1O]vU)-rA;!<d-# d4oZd>rLH3{xpG5G^T' );
define( 'LOGGED_IN_SALT',   'V!`N]Z/AjW7rmT7XBxH_`Gb{T5?k!k<Om0&tQ1OApW<!WZ0@V[Qwxm*/wif#BJ?)' );
define( 'NONCE_SALT',       'igVMG28Y;Wq4t`!jsgTiz+83{^|5~gR^N.+wvtUz]+lk&7z2[A}KxGFz[R$@;NvU' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
