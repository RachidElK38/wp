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
define( 'DB_NAME', 'wpt' );

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
define( 'AUTH_KEY',         'Uo(f=$</U%(:llpjT-F2XMa8Q;.%}3IN(a:(?<_N8M)2lZxhS:5WzG_yl;E;g)h[' );
define( 'SECURE_AUTH_KEY',  'b7jGQZ:A767/VRdAt</W:oEd dyb}xi+`#UR]]m&726wikVtqXe#gFk1+9/{E!}>' );
define( 'LOGGED_IN_KEY',    '<^, vRQ@vvk5&MgeMV(Y`BmM8* ?u~Rx=z;e+#uA!S*/gtNaDda3mCFjE:pF`A|Q' );
define( 'NONCE_KEY',        'k>k&|sVBQwH9)Y)#~X/yPP7|x#t%J-1ZQK,?+t5&</J,*VS#J:N.P5JeimS U;/I' );
define( 'AUTH_SALT',        'vLHLCuBFZyg@pg|:30zq8_izT(kX7U@Hac8{@E26!{{BrmM&{tYP%^HeR/?VL?#U' );
define( 'SECURE_AUTH_SALT', 'MDtWl;JL0OzZ[:EZd`~f=54E`;m,>s><Ivi{ojj+3o9+g3)4?Q}o FAF7V|n0<-6' );
define( 'LOGGED_IN_SALT',   'o>Az;-3dOK9(&qb#<yN0p}z|!`O7EYq{.M$^F{vXy72{bUr[!?AS6U^3>g/OF pc' );
define( 'NONCE_SALT',       'a 3n6ze3Ds?P.QOrP1TaUf-&C}g3^F0pR`Ycq~*!@{s=l;L<P<&8Vq{04]UoXT%Y' );

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
