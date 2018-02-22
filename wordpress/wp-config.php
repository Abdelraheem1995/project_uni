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
define('DB_NAME', 'shop');

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
define('AUTH_KEY',         '`yW[YTA.16SIt}E<K{_/Yw;qv@TL3bV:H6o@53vUzy->m|3e}e*Vz4G.OU(/W4H%');
define('SECURE_AUTH_KEY',  'FVo}7MUC:i)oR-1ETS-x95d)9M(bctRX:J}jc9*=SkoEq4.4MWh(o#ARC915&B6j');
define('LOGGED_IN_KEY',    'f9M.evBAf,Z 3y9(!7c|wF3v/oT*S/0jIm>=w/s E|?8k`V_*;FXe=`WVJ[mn<Ku');
define('NONCE_KEY',        'pv>4@2iM?t3`M;_+UF{(SalIHfnS`{24DOLAe2uP_P9uDw<jnRF(EU?.D@fEb/!-');
define('AUTH_SALT',        ' NBL:0#->Xt77[.PQl}|_ M20;_u;Kgl@7e%~[LI./4s!$ADsGsXR(oS8.PdeP?>');
define('SECURE_AUTH_SALT', 'q&o.6zfe oYKJf7IN=UUAduTzkQ5R0y&&]qYPN$_fQ!`IQQL<ApL*PQPi77/!fR|');
define('LOGGED_IN_SALT',   'Zv]KKfLIELvnY ]+b^(]VGRJn/eXbwLHr{-J:zPFU=+zILkdJ1>a!&QI2&]WRIEP');
define('NONCE_SALT',       '/<dio3n2>g/X@K$GT1@$MBV60HEUP7Squ@CNhy2.H2 1}f$=kZZ%x^xzX1^}nW7&');

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
