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
define('DB_NAME', 'wp2_portfolio');

/** MySQL database username */
define('DB_USER', 'Kristina');

/** MySQL database password */
define('DB_PASSWORD', 'kristina');

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
define('AUTH_KEY',         'd`_DscqX%A}K?{:5e~*H*,6BW1a}emqRnx#/Kg8A,~^-,8-QsxX/F1pH%|hLj`W0');
define('SECURE_AUTH_KEY',  'k6MTGO;-{KI?rn}$!j?y/]gCk7y5]UKM,SWUrFDlcr},/Fs4J93+mtM~;#2(tPUe');
define('LOGGED_IN_KEY',    '5d)drLp)4YUJ<~H}8QmPUfBX)7@$`$2C29=`DyVqTr^ZoLr)Q7 UM^guo.[^tbO ');
define('NONCE_KEY',        'uR?c:8_)Y!8pM G.JRIISB<Yct|U22R-[O~W2vw(Sx7XJ.}0dn(aE)E9iFO{!kL ');
define('AUTH_SALT',        '/c(et6*91,&kDbYy7`$VX<<h;VNQJo5ts#$FXa+0JcE:<k~!Vi;5B>jZQC?^-fx~');
define('SECURE_AUTH_SALT', '1#ofUHE?Xx1o~-#MJ:1;3pPO2Qg/F:NXvi0r[Wi/;Nr,<%6xBk@TecL$?IqJ~0%u');
define('LOGGED_IN_SALT',   'j=+|j]CeiSlmJ[3mFpX)E%6gnF#l1mi%KbwoEh$uh3QM|AC=[Dzd@k}JxQBd)Ov-');
define('NONCE_SALT',       '6ymQ6GO_G;@yz^bFa^%(UgS4MEP^Sk&n!XZt}(9 M@,@cKd&|;-OK/G2v *@0qS`');

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
