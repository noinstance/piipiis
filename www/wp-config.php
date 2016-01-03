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
define('DB_NAME', 'pipas');

/** MySQL database username */
define('DB_USER', 'pipas');

/** MySQL database password */
define('DB_PASSWORD', 'A,S8=TsK&p2Qu!tIVc9');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Be{^z~kbR}5I.n.ohcX@d2~(AVT]Hf$R0ES[|i%qs(8/7`v,?UMmF+{HqUgJ|>!6');
define('SECURE_AUTH_KEY',  ',<P1Efn+YP=-]Uf.v# bmIVlqd;tcvInDaFqWaEO(k,N0^:l#& Z]J^Ia@</$B@A');
define('LOGGED_IN_KEY',    'S:GJ72TjxKmLIrCT zS#wE1mGhp[ycN2uh$k&0|c#.p+G* IrlXTV+Y$S}VFaM{M');
define('NONCE_KEY',        '-NkBxYB!U:|/?sr6$RL^Azt!K;OZ! dA}c@#4KtJgMD3+1PDHh~9jPOmX!D<R>K=');
define('AUTH_SALT',        'E!F/e+E-<p,Yz/G>`h`GW4oL8|Uj%cSd%X65G*mrb~eVU}~e0g={g1F!bgY-b-RY');
define('SECURE_AUTH_SALT', '>:L?EJctpP9AI9`}Fs1B#r!NbKO2OQ74Em<;v|pY*IG*F<W,KsUDQ/+{U<#-+jH$');
define('LOGGED_IN_SALT',   'q97`PDkK)I|[xql~^V]zNx^OpYhR]%taE9c.=hj5m8`,e<ra/_9Z78+p[d;*6W0A');
define('NONCE_SALT',       'ynyS$?E 67&-$>&v~w=*i2cqrWE9eE#n=x-I2x5k/Jr:g>mzR):1vg*81gWXg<v4');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
