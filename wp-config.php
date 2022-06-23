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
define( 'DB_NAME', 'html5_blank' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' m(,H> ?q?uRJY1X[zdw_UB-B6g9hoR(JeA-Bqk-So5T,a F>&{l`jTy%W7Un-6<' );
define( 'SECURE_AUTH_KEY',  'up1!#mki}WAR6#Gmk,Pr.ef/`[I&LjLG:##|N=Sp.+lg:e&6h]y.;}rN[6 ?B|fl' );
define( 'LOGGED_IN_KEY',    'WR2@PG!xOhea~cuJi#wlWi^)3tG`(Dj 9~lX6M?]xz+acyj{4.9n|mod9POV&Iv1' );
define( 'NONCE_KEY',        'jr&uj~aDIIgyU_Hmh!(:M]m?p4P}6cXHy mAW7Z/fHY]90?{Lui>kV=nT{v!x^DA' );
define( 'AUTH_SALT',        'S?^[+~C]`b~RvQ,k^B1c~5KnwHc)z_L};`R$#=cQ`u|R!5g?PZ~F?WkSRoe==8el' );
define( 'SECURE_AUTH_SALT', ',`Y2cBsU^tt^&SE!h^}&0D6z/YG<+O5Vv|lD+bTO[Q(PLyj:P{)Yxb^Gz:EUb`>K' );
define( 'LOGGED_IN_SALT',   'W|O]DFmq2&LRMy>aW-)c0&-!N6kDS# $s,yLr:/fz<6GX>6F;>oQu^*lM@u%~W>0' );
define( 'NONCE_SALT',       'oIkV&_at5T63wxQ#qyjw}Q>?5{i[,JquQ2/[L#vziczsATsQ3~Od)2{aC1oDdM{m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bl_';

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
