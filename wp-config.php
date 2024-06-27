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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myportfolio_db' );

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
define( 'AUTH_KEY',         '>n5%C)aL|]+[TX0LDWL(_Ivc8Px,Ib(KOnON>kTX*{G*98QO*P@AhC%zi3(F;`]f' );
define( 'SECURE_AUTH_KEY',  '[I`3k7 S<<,szDqj4d-{ 20gB)+@sn GXS`Z<wV&W%E%&_jW1Z0|_{#0W&Dh45f9' );
define( 'LOGGED_IN_KEY',    'K-(m5lH!8h-@h_OqOxQ~2=bOA1q;|NBr#{Gq[eY]cgQdUpM.oX ozL:(!N:.ENbr' );
define( 'NONCE_KEY',        'k3_/3wbIc28O76f|es32Yo4ecA*Rf gR%>be7I(*bpCh]6@DMZZo9cm-<gyHh~y5' );
define( 'AUTH_SALT',        'f*dwF>+4Pkt*8nd9#PtV7$^<K-(T9frx&e,Zt32xwxp9aV5Sx,@!aMJOD5$8[/4K' );
define( 'SECURE_AUTH_SALT', 'iF-UvHq0?ndjfK>+Y`gl1JohH#q$R_oSCv_t~0O;TiJLX+HkeSPgz 1J8> u2HKn' );
define( 'LOGGED_IN_SALT',   'z!r=U)oX#v@hM-Qo)9CF{FC/Nta.65c^$n9{1yB15XR~>*h1:(w[21iT+3vqi&]r' );
define( 'NONCE_SALT',       'mse8(4HYhQQXW$cNTzI]x`,bGr<MapmI|0Ejy8H)E`#RR.%zleGoI=f9&v=sSbO+' );

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
