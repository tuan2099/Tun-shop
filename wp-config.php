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
define( 'DB_NAME', 'tun' );

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
define( 'AUTH_KEY',         '1kCo ~z^(Kcn;Ns,:I7!K_D1FHg7fgrc{Y!{5(ROkl@u*|$m1#Zk9kR0)0zc~aw:' );
define( 'SECURE_AUTH_KEY',  'W{JROzD@O% }d<)z,?vaP~d<S<o#oX&gw^>=2ym&Hkbwnp~bBu.bRJJ^R:$5[u02' );
define( 'LOGGED_IN_KEY',    '>4_9?2~H8vCp;V*K!_dYB2Q|tEd*ul~$>M2T6k&tFEJwE79Qy+;poNcraFmx+=Z&' );
define( 'NONCE_KEY',        '32 fqqvR0Gf!.:2LHEKPH{=RC0EyxG%ZQ::gu!yFX{MUv3gxQ:b1dANeQ4 Sq4<`' );
define( 'AUTH_SALT',        '44r5T,;xDYfE|TtKHc>r^YPid2P,aSJY^k|^k>%*p%&hip]BPgzmiH)+C%=q@>2J' );
define( 'SECURE_AUTH_SALT', '9#PAv!]s$fPwU4#zd8,vFtaj=^H?Ed:1Cluh0,SZx7 #DK6f}Fb9YeXE>a(xj1=;' );
define( 'LOGGED_IN_SALT',   '8n1zv~3dEhfYm>_OkRPvi/Mye+dcQ)|k{71B=@3;mXi2M~mjwmJiy/]o_;@di*2v' );
define( 'NONCE_SALT',       '!fC^~u^6jkzkwbM,Y]*!|B{[zvk.6;5]&Lco9Q&=Q$;*]H)P6C4>~:7IgRDII[L*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
