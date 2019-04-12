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
define('DB_NAME', 'wp18eaa');

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
define('AUTH_KEY',         '1<9nZRFHtAqT49K_zt3/Ra|NBcs5>K?X04;us}p%y,}4<A3OM+u%rUT6pV5~+9^2');
define('SECURE_AUTH_KEY',  'Pbl`NxJ0Q~0va*F*17;I5]!%u6]rZI[,M1vxF8:MdZ9}J^}n1*LOO[G1Y1{f[W_m');
define('LOGGED_IN_KEY',    'NE_Z?O]NDCFpR/IP{, RlmEE,h>RV~Cf5xL~ohR7d?eH^u54Q_x<H#p $,.KG6zm');
define('NONCE_KEY',        'oi}e+wSx@AT<Y%s,2PPPDThOGIOc|DywjBYeH7cDSPl:gI4k^U6Sn&}Ks4n,BR*Z');
define('AUTH_SALT',        ' UybiuiWxUt-M4s g~I:wFUZ3$cV[cZS`4stSi2&-Dy8E?+d?Y==mD$iL{!a~}Vi');
define('SECURE_AUTH_SALT', 'G2RFwJ`v(~Cz@qD|LVpb4;lz1``{$FBb;)WTE-[7oVaB3 q`5.d@ ]>ilH,N1t{%');
define('LOGGED_IN_SALT',   'ck(:8#.PakG_czL+rhufzCp@v%cRW=- kJF?e$TO0>Z,C4>emmmT*}p$ Z# Deey');
define('NONCE_SALT',       '`3`ehyWYR}4$iso7lp2~5Nkx&.*%hT.!^r)!pH3f^v9[(D`2h>`9jLdbpZQsor#t');

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
