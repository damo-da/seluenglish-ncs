<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'ncs_1');

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
define('AUTH_KEY',         'PD$r-sp(-]P~8{WGBGXzl4aZ+v,ejWtx.45$$,G[e<cE,YMyX{ias=tNt:$.yByK');
define('SECURE_AUTH_KEY',  'r<_S?>S*.JH#0vC1^[1Yi;*ue,rwe0vbVS#rd_:ow4aJJQxj}UmR3;5ow&s@^}$C');
define('LOGGED_IN_KEY',    'aJo=2is8MZHh:IE!ktLg=JG5_=6KdJ!fQc[z.rb25ox/iO A5fm6O-a6ck8s`B:;');
define('NONCE_KEY',        'Ru.JNEK0>m&x<q,[@H)T{ZOt=K71c^8JhDge=w<vN[|Wi{sLL*f$w)]w:8uq-z+.');
define('AUTH_SALT',        '^)h)rhE|^J?&qZz;w4:af;ONSvN]k:^_xUL&KiZC5IeC-5Y0&FmS~`t>wO  tM/+');
define('SECURE_AUTH_SALT', 'WyP,=IRp_3<nX{Bs!AZ6LBB]B9UQn)!5q2-T>ZZ.<[flYh}tqb@h/H#71 Be};qJ');
define('LOGGED_IN_SALT',   '$t:-J$+&+E$oM.l|,~RQn{BTN Il]+f^b>Uu+~OI$<(js]k@-*62k|MF4n =]~W ');
define('NONCE_SALT',       'z)6B51yPJ3_0h+=&My241fsX5DH<4Vi.m!9p*T)>NzeUGLP,-kCyr)f-<}pOsM 6');

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

define('VP_ENVIRONMENT', 'default');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
