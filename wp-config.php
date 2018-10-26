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
define('DB_NAME', 'SFX-Estudio');

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
define('AUTH_KEY',         'GWj[v9DZb_X@`c2HWIIQmKV_n!wdz63b}tO0..{-:}Vag;BYLy5ah#PJb2PwyHRg');
define('SECURE_AUTH_KEY',  '`d|xVCtqyi+?Q`(@nkLGv4D[WvKqJoY,YB%{Z]Cm3x*z{*r^$D2C<ds>?f8y~5IH');
define('LOGGED_IN_KEY',    'ei#U~,+5.uvtY!v_`L&Qp:.]7B`G7wOitG02%$tnn1&QqW[~3q!6Mewtq*I`bwou');
define('NONCE_KEY',        '-MyjO&RkD0V.-IjQ88G8M1!(Xz%;58ZfTPVa|<HGh Xo70s_o3*sE^:pi,|X2Lv:');
define('AUTH_SALT',        'v?*R)EG-($${s.8}BD.,`)URyg-s[1Gesw{%{=]f$wXQgFZ|_CzjGv`n$|LEfWIm');
define('SECURE_AUTH_SALT', 'UX-+#8]}WDg}Hib9f=bGd.h7?tIR0lM,tMod~*}=mH>$}AYibK^q<~=w:[sC.#3&');
define('LOGGED_IN_SALT',   'LE,1H@ [ ](c k,:49edj+B.)/9J(DV{9q8J9emB,]rSZi~hM:^Csn2&O2(Hxj]A');
define('NONCE_SALT',       '@ESoA`[7d-&:!T{]%*or%,Vo(&@gp&OHj{JFf?.8=*3bFX|VEV(=Iojmvn3 Rvru');

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
