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
define( 'DB_NAME', 'u312006435_gitstaging_db' );

/** Database username */
define( 'DB_USER', 'u312006435_gitstaging_use' );

/** Database password */
define( 'DB_PASSWORD', '00998877Aa*' );

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
define( 'AUTH_KEY',         ',q*C*FSO[!AQy?w!+-NYtRUbS=OnG>IO$&QTnc6PLfLYg72KwlpaD49a/jKuh UN' );
define( 'SECURE_AUTH_KEY',  'GQ>$-@&/e~ Xcg>rVk;s?_?bLyX5]bWOk@V: 25%!jf&0^ R;b(`<)UKpqyZ*^LF' );
define( 'LOGGED_IN_KEY',    ']A-NCtg89CMWc`UCW5m##h64-;,:.K`0DnCM8EL$M=B=mgQ3`DB0Rvfw`zDIq5[G' );
define( 'NONCE_KEY',        'MbQ,9+s#hj,2dZ#?/)C%Ik3!kdG$C8CursVQMH{mcg.D;KtFi[bOCTeudvEbgh2}' );
define( 'AUTH_SALT',        '+d@n8By6X>80#&Tdh<rM:!,+:E~RSTFNDCR%;5-lmuR&fO`W0,{J5f/oP;HlF0u]' );
define( 'SECURE_AUTH_SALT', 'MeH.r0V]@XaXF>nW?MG++zoz%!-&pjY*]u81OvK<QV^}iem`F:%<K=$QmrF8S#&m' );
define( 'LOGGED_IN_SALT',   'p`F/6_WYz}>K1$V``g]ECl&GOr%{}vbf+/i{P4<f?Nkc8j{*Cnzq$bm5t#0w8L7<' );
define( 'NONCE_SALT',       ',yQb6PwDqfFL(v>sjE[lXWnN7):|034!YbxdaxRvi4$:nVoKz]H^k[#P9I`(!~wj' );

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
