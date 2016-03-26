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
define('DB_NAME', 'sql3112417');

/** MySQL database username */
define('DB_USER', 'sql3112417');

/** MySQL database password */
define('DB_PASSWORD', 'ZGLIDkRN4p');

/** MySQL hostname */
define('DB_HOST', 'sql3.freemysqlhosting.net');

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
define('AUTH_KEY',         ';dsf-38UxB?8sQ8Uy%iw_%[qkUDW7Is/[]Z_PQm$F&3{}k/5z$kvG3!_|#R1GlTM');
define('SECURE_AUTH_KEY',  'B&&/PB$0X ^o^Ro_^IDDY~0=mK}3vSLeW]rd,q#V9Z1$&W*c+F@|jo:!z+?PAx)C');
define('LOGGED_IN_KEY',    'A-q;[{oDZ9gi|U;9|M-EL_$AM4W`v:fg9%S/Ww{-[]aC15)>0+(T+RvYV-u|g${>');
define('NONCE_KEY',        'B6go:^[gB|Nf?Gk0kkbJI;@{eXfTBbVNQaHwy@*F`%|qs7F>fR@!G ;6d{``dt[ ');
define('AUTH_SALT',        'cEe,wd?J@vQ/{)nKKf0?FPUU.`#5P$6pAWU%n}e/}-hO}4X;+R8+t=2/yPt!+Sz^');
define('SECURE_AUTH_SALT', '}uVdkr<O-EL-l!3>y-F&U&Wp*CVm`4Q?%?fDcH>|jMy1uT#cq@c;R<^}?fyTG-{J');
define('LOGGED_IN_SALT',   'k Z#$|(VX%9@K`)j&N=T|XI62ylP}6BDV$JW:rZ5l&b^Gs}1UiebRaY|abhHY,z;');
define('NONCE_SALT',       'DWgI@<GKxw :{]7$(IV408Db}x3fg3<s/sYi{-+zQqc%[_n/naS%v$6RAz#8e`JF');

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
