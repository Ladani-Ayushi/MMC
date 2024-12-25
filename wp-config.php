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
define( 'DB_NAME', 'wp-demo' );

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
define( 'AUTH_KEY',         'wM@Fye|1Qsk=-NI~*HspT>5_aZAdC]0FMV9ub]T@iKqBZjFI=sAq-#m%A,PrBf&3' );
define( 'SECURE_AUTH_KEY',  '`L)&V:*Yiv@=yqIy-leS+I^WR>-)|Y+l{Xa8d6q}R_WVD6cs=c$rPZ,b|0__WFQ+' );
define( 'LOGGED_IN_KEY',    'Y9g:`BHvwj]Z/E|jWIknk?oKE=8VMc7V0af0Z+0hwLGx;5?*K_<Mu||yv0V6CaWx' );
define( 'NONCE_KEY',        'K_=6|T6Ein;4q]La<n&,hQ>IC Qm:`ZPqWB_^UYaQXvPLy;DZy6+zs8q4jKa|R18' );
define( 'AUTH_SALT',        '4>>f[Bh1cJu/7edP:8S6/UVSxc+(s?uG?z@&PpG{UJ&JtvdHWVtU4IS*5MGn[1rn' );
define( 'SECURE_AUTH_SALT', '}Gr_JO.eR~7YtwAcDJ](Vj,z*/ |0o#ntZj_7T}qQ%K_^I#1x>91)ZM1=~Sh@{N6' );
define( 'LOGGED_IN_SALT',   'w)y{0U(YJVzgqH__1VPf?qfnYALD|7I_rWT#QP!8y{@JR%xLF`w#Pa|Z&fwvG}G}' );
define( 'NONCE_SALT',       'xWr<Z)B<P]MZb9$eV<`BD~8dACXFaQ+Jx`FSbYG+dq0zRPO3]q::i}vln%.%XmmA' );

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
