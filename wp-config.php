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
define('DB_NAME', 'taranelsonarts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%-yGGBaWr)W&DZ|it/_@ZQPgP7[NB |)[%-2[U^&mkz>84[4p14(K~/]|,o*Q}#]');
define('SECURE_AUTH_KEY',  'nNkEbc{cth+;bPr~!^wax/!9.&`N3xA^zw:m}E!mB7hes|N%Ulx_dvTVxdp?uU/z');
define('LOGGED_IN_KEY',    '9XlT! 76zS+Wc_)c7HlDO^Z{(9gmt`jpGWhV;*NBM%kz%rX`D@G+s%x28gdV#|AK');
define('NONCE_KEY',        'Bgs?9;3hav1Of*Oocw%YQx~_!&z7&bOk;DD<2C;8J<gu+i@s|kr!|D_)o/A08g% ');
define('AUTH_SALT',        'n.<zX2uNO58gKH_(3`Lv=Z8D0uNiGi(eCtG$n%WtP?M%vMi^yKOV/)-..E}LL#bg');
define('SECURE_AUTH_SALT', '|!33WK4TvcP50s-5 LUAb6*K3 8?+zXh)t33;+1NZ,%GpTjZIS3^$Kx{&x$N #fw');
define('LOGGED_IN_SALT',   'g]#n!&$o!?Tc7jj54bvA awgD_*bR}j*qqG ,OI Vzl.(G 5(c8!ih9ol`F6R)I}');
define('NONCE_SALT',       'ZwXkRGAOGLcHp?_ ;EO:Y7}rJRI1K_8*:i/~UXDy|ni*2pjK;_9zZ/rAvl5m&`V*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
