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
define( 'DB_NAME', 'tikibar' );

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
define( 'AUTH_KEY',         'hePsvtzM9s{OPFb:I|iFi#~hfGARo1T:#.=O:kIKs2L/}b?9YSRWzjT/l8pKgsr*' );
define( 'SECURE_AUTH_KEY',  'C/;F_ncbE<!+C0=bS*Ih`JF!?73+v$jXn[,h=?^63F7|]9&hvE=v!^;j@P1-H0zm' );
define( 'LOGGED_IN_KEY',    'T*I%;n0F+v?M%A}AY5a%-aA/z/@-|VQURc.aOtl36+&,K[Ndhg??mb1i(a{M|Z/V' );
define( 'NONCE_KEY',        'o!c{>ko%6y(O;l<AG0&pX*K]Z9dp/M&[h#JkT?IT !wv<j4]50%^her3SJ$%dNHW' );
define( 'AUTH_SALT',        ' CR4k/aa|nw LgP5s`084Y ^[A/jR%?dnU, OE7cm<h,nse(mN^w=;mF,{`6|+#.' );
define( 'SECURE_AUTH_SALT', 'p9J+h[JAI50(+&??SG:,,wO<auY<3H]H!6DTjQ={o (#*W(QV*{/acx{FUH6$v-_' );
define( 'LOGGED_IN_SALT',   'kyiV:e:nn=$zMcT-g]0NO8N9p>H6f+&);/>::8zDT+q=KF_t[m0cbZ-=cQH_l}dz' );
define( 'NONCE_SALT',       'xjDwq=<}]Ngi)).YsCEU1o77tQ?:H{f7A;*1,QF$p[|xc#)sD|KeDk!P92HJ_/Qd' );

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
