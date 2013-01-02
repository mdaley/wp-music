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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '!+wordpress');

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
define('AUTH_KEY',         '~!DCsg%cPoRzB/[v$Evw<+e9(Xs5i$gc?|fh/UBi2e0b*O[&BfUZ+V<c-JhM~_y ');
define('SECURE_AUTH_KEY',  '[|T5hZ}N%)Tg3=%,Qs_6n<~,pn!nH@#eOjq)i)Fp*`R9B?~5sCKCGmtfwwvFF%+Y');
define('LOGGED_IN_KEY',    'K/?y.,}=u#Y42vqpY`/.4zgJ?kWY;*JFq^LA=v3Q5GXP<N>Qf.%`A$&8G%].wlo|');
define('NONCE_KEY',        'm.BKdvoDo((]1:{/i@5MKC2B_yJH/ALw@6K#P!, +FKE0d=:SRmxXeDny~sbxwFj');
define('AUTH_SALT',        'AS++Dual@<;.Q}?p)?EXfQE:4/x8.D{+QN1bh-y;ii*53!FDh71?QG,#I7EH#cdp');
define('SECURE_AUTH_SALT', 'Ru9@Wz$&S^>@mE7Q9a-!UeBG6 <z$u/(:D9umL~kde~6(n[~ytj,h*:,M]Z$Vt}l');
define('LOGGED_IN_SALT',   'g:,6q*).:i&M]MSPo.97Vx!VPza^]|TEZu#E#x#:1wpiG]4bzqwEJ&fEyHv3~js ');
define('NONCE_SALT',       ']M_dt?lTM.4,$6jd!g7KG>p$1a62.+<,k;Y]hrm)[QPI}$og!=Cd|ENwWHk_27n_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
