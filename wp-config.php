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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'soovi2' );

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
define( 'AUTH_KEY',         'F=_eWe_GFb S@2 +)Q4*sY6Oy*b(5W{4XHD`kVH0FEU}x 9hh@=02wiM:L~4k)<}' );
define( 'SECURE_AUTH_KEY',  'G124oiC8XUu)<.:(Xz%nVA7bY;K_nSPth[[@ECQvHc9mD^.(/Ef(Agl@Y:j_<-h~' );
define( 'LOGGED_IN_KEY',    'zBtJrsl~pAy{s)?@H/)OV~cmC12LqL~hI]Qery?+){zu>He]N=U[Lp<H_/^!+Bri' );
define( 'NONCE_KEY',        'd0#,~shIOm8w5F+[[kg[Sj{T6h-!_6/]46Vo#}5KLC@P!4^^blCU(j2gfYjhZkQ6' );
define( 'AUTH_SALT',        '6.xspZ=js:rvN )|0>8BKPmB~FYt20I|+gi%ZVq2WSc>hJHd53P1alEkxia}(cHu' );
define( 'SECURE_AUTH_SALT', '^7ePjU6C/r#1nKJ] C5. _il@NyE0:mzZ?^i?)n(K[Z(huuy$WNo!LIwB~Bup3M`' );
define( 'LOGGED_IN_SALT',   'sVM`ys8Yk[1=)~jCRnTA2EV1s<peD(y(x61-vf-4cI-w5{7*]9*v2GotHX`vj@Cm' );
define( 'NONCE_SALT',       '{b%I [F`0DUI<N(DW4jb $Sf(%qufZ{2j!tK%vRDLb/j_^6&RDrpSHo?]<zu0rAz' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
