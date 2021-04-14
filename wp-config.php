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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'hcL?J@Hns>@@f&w1?-&IJGj1;aAP[LNnl_xYJW#9E>nO_k#Z*JKNl&~Kxnu1_0Yq' );
define( 'SECURE_AUTH_KEY',  '`;5kV0>T,`+pJ6>UAbE&MA_b0ZJnw=%6Xwug:,*wo,+X&%XEW<}lzsuQB/~r/NzO' );
define( 'LOGGED_IN_KEY',    'a6)e-XnfyRB6_J9}0Jm!^ iZTC>^rRSe7C9R}KZK_F9oo,]R1Nlky@4s5vq%uwLR' );
define( 'NONCE_KEY',        '!%AGD#H;@Ai1yz/1aCiC[;+ZSI4yDAhTwdhxO($6>qBGg$RpjP-A)uW`<rSvN6dj' );
define( 'AUTH_SALT',        'Gz2pQ|TRv?}pxuktM%ij}ZW/Nsz(!tcYVN*h/lrtT.nBnMxXXt=oY8]K,wzG>{>2' );
define( 'SECURE_AUTH_SALT', '?$b_dXmKd3ypO!fW|qsP(HMlsBbafC?#N)nr$El7G!fy$P=&fZEP/lK5sK<$a>=-' );
define( 'LOGGED_IN_SALT',   '!fz{=^^RNdj,z7FV*$8gI( y79rTi+N/2;_x+wS7><u:y8:*Vp!Ih)__dGyjHwR,' );
define( 'NONCE_SALT',       '*0AYl!;|Z/%YI8?,{ot>*6Wn1cFX;o?IIny}!-540|#EL@%ntq$Eh.$z2QE(aQXI' );

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
