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
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'imaginechange');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'cadremp');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'js.MR^w.(-JHAAAS=4HEEhj;z+9!UYs(w=Ktpd,Pw0-Di-43:r]+^bVh|2>*!Ay:');
define('SECURE_AUTH_KEY',  '||8ul2z ,0K#t6)g`;n1Th9FW70?ZrRX$:H!Q|[O7L`<fSJaVL3bLi$1 9{+zQ1]');
define('LOGGED_IN_KEY',    '8@!s`yS1Y;4+d</0#P.b[Fx|a4<mQr_WL7rYiOud88aru|:-G=]_Y-GlkJwWQtrY');
define('NONCE_KEY',        'Ck%+CO$=OGHP5h+HUg|L!Uz:~FMPKd~S:5eC{CM_EEl-`(ewhz-DU*/D{6GF8Lw/');
define('AUTH_SALT',        '6^8Y0{ /WwAqLvi~!%hKyUCYeV8-}7,JoD|2+(xGc4YA8Sg]-yN{`e?4i{RX|hj(');
define('SECURE_AUTH_SALT', 'xt|/p6ig?*D56aC)VkOfX[ZM=r<`|DE~e|}KqqQ>YLmhmrQZ+94_1plOg<)u1<g+');
define('LOGGED_IN_SALT',   't)|j5P%hh]Mw5nX8!bdeEO/3*8d.%Ua-{bs<q.yD7@(*?OJ0q=!K#[9m<SDAG*+F');
define('NONCE_SALT',       '3L#[_Yj|+7qKi+ZmQlWKKkY6lJy+XljW,R*sAW)_a[--.5j|c)? .<g2[`]7i1a}');

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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
