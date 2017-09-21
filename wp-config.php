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
define('DB_NAME', 'my_Wordpress');

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
define('AUTH_KEY',         ' Cy,IqA.~0pw)^Q8>O*L?%Pmf}@Uuu&d_G=ek.IVPGd-4DS2f7~^]U3>OnGTC7DN');
define('SECURE_AUTH_KEY',  'ySa6~wl;}:+$Pxst2ix,99* $kth01;Gcc?$%%lv;X!;u98&wfWPg-Ka@r%9YM(-');
define('LOGGED_IN_KEY',    'n1G R!,>2<.<6VACrU}Wp:QSZE*Z_C<oF[Sz+KxU?_5;4.`Tafth|~=bK@Z9~I=J');
define('NONCE_KEY',        're`R~s~&|k2U:.-9M0Gms8C#bq!dA!= ShwR}XAJbaK_GHLwL3/D+]|r7v<%iQDj');
define('AUTH_SALT',        '^8eN5*yIfsC!vY^T=.iP&<i07UPgIK%bB[1 x6J?NNf5jUXKZMT}X~>$GL8Bq-YU');
define('SECURE_AUTH_SALT', 'HLSPg<C/{VDX-KTs(lbZ@@|n8df~`alBA?CJA_+/cfPAoW3l*ibjw03;yE>T1KyG');
define('LOGGED_IN_SALT',   'Y[v0q!tyj{9X$_~mS`s@]#zhuyy#&/f(T-|d<${ Swt?qYXQM1Vq.!YIW(Y>*Fz`');
define('NONCE_SALT',       'S^k>])qC{=KP6c*pF*FVYp_uNO4}fTa^F)YFz6~<ch2xQbra{^$1Z+{upp]BSj_V');

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
