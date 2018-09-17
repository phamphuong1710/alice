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
define('DB_NAME', 'alice');

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
define('AUTH_KEY',         'LH|7mIU[Tl;UX%_{+&jL*-$V#n;A^_4:8~w.Ne$20u;}aMD6hgBpmx_w]I1R 7Y$');
define('SECURE_AUTH_KEY',  'muWWd0$w0j&aTBMc>L;}Z!erFKhf}pKT$o2a]vVD`y36KxqJy2$#Jyxd{QDINXi[');
define('LOGGED_IN_KEY',    'wVeU,bB*0akg4~!}O&9?,EBq?>a0=XGvl#ifNUQ&Qf6Jj,=D#2V%y?GE*wk.,i}R');
define('NONCE_KEY',        'tImt$$~nax!*`ox>mu<&*sE>5;xPt#wu5{F.3O0wG//1zo!!1FRlmUd` 55l/oZW');
define('AUTH_SALT',        'R]BYyb2YYXj_+f;P!}yqX]x1yd,{]fq6R!@7Kw#i)O2j=e|h-j[Y$~SpxkXT5u.L');
define('SECURE_AUTH_SALT', 'CL^bT:q05k:I|6=2oWIz~UD}n/6u~sctOI{zh9N:ZOiIP{FXcv&rUkNlSStK&v+L');
define('LOGGED_IN_SALT',   'oHo$0En}%GZfo]#[]J[`xsS@.l|j#k|Ib=^@X3*Ak=t.hZeMaB%FP[B,OncZ_-~_');
define('NONCE_SALT',       'Iz}S,U]vVpY+l*#]>o6:IBJu WZG%a*iIrNKe=-d1{Kw#x/=t9<DCqK3q<6MXDm)');

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
define('WP_DEBUG', TRUE);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
