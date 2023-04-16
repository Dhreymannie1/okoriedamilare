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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'okoriedamilare' );

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
define( 'AUTH_KEY',         'oVDO$=?Di 8%00!,ibPk`c8<%v2lsum-q  /`F(>713D=+qI>oaOOu)dU:jn/,Dh' );
define( 'SECURE_AUTH_KEY',  '=VOx=c6hkMVB1)`uZjpH*(2(LfOa$yt`8?5K_g]|fgyoq19fY @EHKlo,Cd$N0:n' );
define( 'LOGGED_IN_KEY',    'Up$qk)_DerKoB+fk<Vc+pu|<~$0[kQCQ~AiF9I2QMp?tf:~)r-RWB5#o[eA,4a9o' );
define( 'NONCE_KEY',        'nCq4>B5[##xiN(6q/FkM-L|=66>~/Nxagh5QmEi/}~9;=sm,!iSpE,VBV1+JI_L<' );
define( 'AUTH_SALT',        'Rn#p&{id.o4OU]VvD:.iulMh/qEN>IC@346YZtw9GRf(V6|x|tHOTc8N[B|2Dz+^' );
define( 'SECURE_AUTH_SALT', 'ozRAVlMx%f7O}x@Q)-6|HU=*sY0-9&;dp{0!0-/f.mmwAs#Yk(YIza]u..vWxI9=' );
define( 'LOGGED_IN_SALT',   '<#<<91#j5dsO;sV-HH,RKOiK)0y[}%$@i9769;):G;v9nN=he^[trj&ZZ9g_lRr}' );
define( 'NONCE_SALT',       'U~o>ax2((%z>V@i=gl T/G620,:~0>E8&WwDh5{@SWcqHTb#D`QenYJ/3P{ Du[_' );

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
