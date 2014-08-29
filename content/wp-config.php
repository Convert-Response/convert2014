<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'convertwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'MQDq?x=t| &1mPd)=4/M}@)^ ]e~ydQ2qJMva>EhzqUrZ{H]*,s<UM;`3cpb7SOp');
define('SECURE_AUTH_KEY',  'n<z(iIS#Vkqt3BUYL^1s%#Hr|2jngPz]DJeSd~_~J;:hR>}Y+Cw2%_F+<u&;W55a');
define('LOGGED_IN_KEY',    'fGlq~4x~8>_NP!ndz3hOi~+{l A>1+ nPJ>Zs15f.5bKo%-4$R6Y? L:$[ITud+c');
define('NONCE_KEY',        'e0Evciy,(l6J+M8)clKH]Oqw6dm+`- 9Jp6gtsLuWf6IP[|ofREYd>j%ik?K>d6V');
define('AUTH_SALT',        '~+6L4hXb6)K|<JuB03&D&k?J[-g0}z6bHQzmb4v|V44b|c=Sp5{HwG6 nIJ~jh*K');
define('SECURE_AUTH_SALT', '$y]F+8z71;JrC,tl9E[>1N+EcI+/%-I{_&/?#vuD%W)aVBpg]/mf-p|C0Q2j7=|Z');
define('LOGGED_IN_SALT',   'tNTW|X?fR|Pdj3<.fP.2#FqPj&ojlI#&g;0I&XjG}eO3#/{sBa9BJBosP.7YI(-x');
define('NONCE_SALT',       'Z@8FfBZ`wW& d,e7wO)GUz>0il=nAe@?wmh,~L&*u#fJ t>K8P(^)hF(5RWSwb>4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'g422f_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
