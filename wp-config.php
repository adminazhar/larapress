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
define( 'DB_NAME', 'larapress' );

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
define( 'AUTH_KEY',         'sJu4T%`m+p5]Wsj#n}v]cqjw? F6daJr1fmYeHws![rKf+LzdnElz7KxgbPL^J&|' );
define( 'SECURE_AUTH_KEY',  '?@1%vrDW!~N,K;>{Doz|pf4]%5aseh}XU)nC^)BzLt_P )H0< 3sw=sh_J7#;=(q' );
define( 'LOGGED_IN_KEY',    ']zM=UT+^09.D9sMEEO8NE^Q=*#rwGB@KG_vhC>kUn_5!}$vOZe+WZXt9&l/!D4}7' );
define( 'NONCE_KEY',        ':H5P`;aow*0S.9dA~A+~$4E8.Y.hTD4v#ZDDN_6`TR{;4#E$;&g120$XNWzr@1}l' );
define( 'AUTH_SALT',        '+3kj8{Z|WqOR)Q-Ao>`$xOPp%$Hq/`-7Xv`od+0Sr],=u_]uL9]lpfq<to>h7VJe' );
define( 'SECURE_AUTH_SALT', 'tM|<K|6OS;E$;y.F|#lx61!q(J3nb$@Y3@weS5,)2%N4-2GWD)NF@Gf$d!2QLGK^' );
define( 'LOGGED_IN_SALT',   'qx?<uoe96(4h]P6?-CPWxXk8Bh6_uah`zqay5h|buUAL|Wkv$UkG#+vk[G}=AV<r' );
define( 'NONCE_SALT',       '@zdS:fsN,1fva:~0_<PQB`BH8nA95/@G9n/RHZPzIFwogxF|%EL,Z?nj iZceJ?>' );

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
