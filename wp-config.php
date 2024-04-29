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
define( 'DB_NAME', 'caferoma' );

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
define( 'AUTH_KEY',         'dOer5`N|8wALf/j.11H?KC;RslhHEf:{gAC,f-N U6gp^Y<3:{vwYav.NlfGeVY1' );
define( 'SECURE_AUTH_KEY',  '3Ypd_JB~Uc2djd.~86R WI|D2iee($~4G^Z49EIz,*)g]!*?4md6kR{2oBEV<df&' );
define( 'LOGGED_IN_KEY',    '[:NfiVEeml2+VFN1#.ujZUH~]_ylYZ`+UoG3L@(aJ.8QWkT}VL-s0KgFOAF18.B.' );
define( 'NONCE_KEY',        'JhD!$C%_Zq.`+P_prp S{,{r>}/Ip^JaI~#X`9<OAq*vCwaKz/GDb6Lz+a<TcOLh' );
define( 'AUTH_SALT',        '&g{)[xa E*U V8^Dz[Sx@9)p(c,gy?hc.v]O7gy<zxi,W?Frg7lHFUs[gD0u$2)o' );
define( 'SECURE_AUTH_SALT', 'G][h#h}Z$D1O.qADA06jIw@W;&!,HjBAHTWQ@=Z37od%( h2+]=R:>E?lZptn!Qt' );
define( 'LOGGED_IN_SALT',   '(9,7BQhK&{KG![b%dIPak7+pyusmQ:w:IiW/pc6ETUl+j:@oH-OR]=lj~ZgTm`V,' );
define( 'NONCE_SALT',       'HY.7Y76f/B0s D]`5O|#km9@MxA/Ywg},tJH(g%*N_L<,EiwZ<N92]9uzlprua`^' );

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
