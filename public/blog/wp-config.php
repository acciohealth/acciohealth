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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'AccioHealth1!');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Bypass FTP **/
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j6w_%/~`gW1ubWt7fEwS2)h+8yW4ebpi7~k[/tN9fA;r0T[fy: hQ*-=@Z1tDV)k');
define('SECURE_AUTH_KEY',  '3<9l!(%HF%9D_~snM+X;XohIlH`lq%D~xN?|?$tTqQC$SL&kHv9Gv`z6,{q)*X}~');
define('LOGGED_IN_KEY',    'oAQ LxL>B:^w,%H-z?-bhwv=SD$adhpg+l#L9G8Nxx]bHKj+$XL#?:sY|99CkbdF');
define('NONCE_KEY',        'J;TlI!|jgWc;}5` G0B[uB+?H-WC81%nyt1!`rk{#MN/vPRnfB[id1w J8}mQCXD');
define('AUTH_SALT',        '+ $T>&H|sPpma_(B7f@hU8l o#:eB0!|[ih%Q8gCVO,f<K/|i,^QNi93,&~Le)uK');
define('SECURE_AUTH_SALT', 'OmbrQ.{#GG@lqiS -1/@$r)4zT:~+R-)GWl;xulO+qbdK=/a-_[M`{1>[+TF8{r%');
define('LOGGED_IN_SALT',   'CEUDtWr=)||E1`+V;U`D-q}58+JbN_7qvY;$I+c^pDoh(%|2q42hI-W2Ml*Nr*/Z');
define('NONCE_SALT',       'CJU!xY9+!ZD`H lqR8,t2+J~GE%Vs[v[>SR2d=~]rvNm=Q&<x<+TI$jQ6x^WvYkZ');

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
