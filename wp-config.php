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
define('DB_NAME', 'sc_db_screen');

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
define('AUTH_KEY',         '!ZmF(VVbvB ww$`/eY%oY{%4w0YlJf/tFv|^Z2@Bw4>n5oP!5TK9.}1c;$bOue]b');
define('SECURE_AUTH_KEY',  'Xd+xw!BK/cf/;RQ((/;)3vTvm>gJ;@Qh%zzNKU%ys0eyJn!gD3,2Kt);,bL~z`mA');
define('LOGGED_IN_KEY',    'd3<DX4KRAdL5;DXt-:VJ7v!)X)&==L|~[qv`]NZ91ZEX< Qe2?Q-C1(H^lB@}{Z~');
define('NONCE_KEY',        'zz4!+l>,a-vUBKB/>_kD~%H~VfA`A7UkUoj)!>@I@=-=|T3L&Rv*l(~Sj$;@38BZ');
define('AUTH_SALT',        'gGP$Fq>N 4rj4 W o-]6xHU>;`pp>hd[m4md:P}:@SxDoQbI|`jp<GKJ6o.DphLR');
define('SECURE_AUTH_SALT', 'Ag2gSD]H3)n|UW+DfG0_MEN-uZWM[~zs.8H.y|+p#=dA_miSuGt_VAr2Yojo}HYV');
define('LOGGED_IN_SALT',   'B8-z)E;Aoh;sy*JPIt#n.TG++68V{/W|cenxc:QW*$Xeh1d$*B@<aj>pKC n[8zz');
define('NONCE_SALT',       '`oMsi<McG[uHzESsP&A8~?p_Z]M_pmdSOne=mC9Q>;./k+I~U=T/v&,z;H[1$Ejg');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'scs_';

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
