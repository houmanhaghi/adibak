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
define( 'DB_NAME', 'adibak' );

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
define( 'AUTH_KEY',         'V[Hqv_McThrm^LQ2k~Q6Fn)R;xAEzv[|o{1}=0vYyuVL6K*2=l3[Y8QQsjQJ5&n?' );
define( 'SECURE_AUTH_KEY',  'brX,`HQf+(:&6:32ZR+VoO1/)qHYqE|drX,W!Zh OZ _nlb!8}9FLWXEe`J5=Jr-' );
define( 'LOGGED_IN_KEY',    'qBEi*/]PoB4?UY{#j9tarbiTaSaJGJ3S4@nAamn0zcpq+o],78!2;~~JP]v~FWD,' );
define( 'NONCE_KEY',        '$&K1S7C8~{oFqryK-566?^&?&w<PaArZru&9x4z^ :GN}SziC*boHIxLte`b2b[R' );
define( 'AUTH_SALT',        'kW8*9xj4Ck9CMXfxZT5(@9J}Y!!-zBxFp@<<B$IYWD,eWoLmcF^l7Is]vlp-pX-W' );
define( 'SECURE_AUTH_SALT', 'e0R$=`$FFewz0,D^rj`dcOtqX5wNz&TWvN)#lNe1r-Aw/%2&O*u(Y9~`8V,w<mLZ' );
define( 'LOGGED_IN_SALT',   'qh_4D)RW!J~!zm(~c!N4bN}fk!}a0ucT-i`bab^682Y|aN0o)a?X &?nixzDI+n-' );
define( 'NONCE_SALT',       '7nY};:U3akA*4I.J40h_SN? 8WQ[aMfZ_4=&43FSsSbmmo(jrLjAS-I6tz_YM6UU' );

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
