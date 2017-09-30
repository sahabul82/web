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
define('DB_NAME', 'divi');

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
define('AUTH_KEY',         'CTWOZb>|%xqqR]NONUAP8|E =f**/fm#$c+#![l!kQ?7<cGaf7{jq[.y}uwE&Ky+');
define('SECURE_AUTH_KEY',  'ee{kQk=}>)ux7c:sjgw;r}PBNooT%&|x3YD4?H#C@4~ryy0:_+G]7yFe5Zl#:_>m');
define('LOGGED_IN_KEY',    'Bjk79/GvuThaRoIm=iql:ay)-!X/xfyHg$lHX=4)s|~9dC-CO}1YU^H)/ah,%z4#');
define('NONCE_KEY',        'rzScL~;B/rQ[t8sV:aC[E;#r/b8Vt3ulaVsGG_+gbkIhx]nChjkZ_SXwQ}Wc&8,q');
define('AUTH_SALT',        '-C_,+[g2BrT;Cj~psf-X[]5bRY)4<e<~<n=l--TEHM6gQr,F:kYn}d).Wk}JLE+|');
define('SECURE_AUTH_SALT', 'UDI` -ZWV!H1*$EjK2`zJ=r uu8kbEY?qQJ.W[LulT13QEV]zs3O_!VY>eZ:T_!c');
define('LOGGED_IN_SALT',   'j}Jp*&tUSHS]qvq$1agO=l,6,UW8eJ(J}z5Ku4j6y/C.i}x9!DORl5BBk6`/l`,j');
define('NONCE_SALT',       '|T#+M(<qxr=B`U`rsX6:Y$*oA-{W~4v&:^.bgm8a|80N;B(BK*axNk[yhcu`RmcZ');

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
