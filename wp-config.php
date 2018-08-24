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
define('DB_NAME', 'william');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b4wt.<Ena~)@WI&32)Jd;eEYmX t~Ii$W$PFu=dFgx7. Yc^s[j$T_wnxV8xiP{.');
define('SECURE_AUTH_KEY',  '4qD#FdE>7UBrSi)!1n.%~iW,s;Gv`lF?%T0^1A&LS9.6!%Wi9J5dm#>:|^_JxPxU');
define('LOGGED_IN_KEY',    'Bo_`9x-*B>_YTO>L^H~Azfj)qSllBY& ]QZdC1TJ76Xb)}=FMcM-}Q.n>is#1faL');
define('NONCE_KEY',        'h}`k=v`LmXZ.B!I=RX<H{WapgEz+cp|2(wX1jd1,bAJ3GSxU|P *rg6HkI$Ti]#n');
define('AUTH_SALT',        '[U#Y+;TSl5-)raolBucjFwp4tj>zB)I3/kdkXkRxy8Uqk@Y$E_GcHbQitKLx-P}7');
define('SECURE_AUTH_SALT', 'm5kXjT_RV&8ELGFaDtLi*RtYA_q_UJjeV:o)|?Ev<:RURfp^6E:Lc7%b:rJM|Z2>');
define('LOGGED_IN_SALT',   'P195ZVOH}`gn[&Jh:Te4zGr+^P8w@QZwz,UQgY}=BUQSP4q!dvaHxos{|X_z*]s[');
define('NONCE_SALT',       'v|nKiw4.C%}Y0be.nF+G`3_*O%ykm# >G(t9iqyMNRF|9VU.3~ZRvSQ0E&}sOGx2');

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
