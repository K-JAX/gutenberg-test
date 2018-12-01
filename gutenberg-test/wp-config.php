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
define('DB_NAME', 'gutenberg-test');

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
define('AUTH_KEY',         '8._3c8/#f[Ff[FEda5r3 :-8xnk|8jj.2 _I,tY/&W0/Nd,jqKec.IQUq-W,V?pq');
define('SECURE_AUTH_KEY',  '^,96Mu->jSglwTHeM@#B)-.7BT#%myG!*Wc.b)M/XWYP6rx,q/uw/x.={_{Xi#.p');
define('LOGGED_IN_KEY',    'L0,OS5rJFng?`zOcnr1j#&3]oXm1MY3-970X/GaAz+z;?`-{i]wFDC ,H|?GbQ7O');
define('NONCE_KEY',        'h}d/*QP|-Tdq1J>R-PUlg0T%8vH~ow=BXacJ(g10c6X=QM?aIuo1X6_813[~RwPu');
define('AUTH_SALT',        'AZ5J]srcZ#0hz  = ;TycjQ_O+:J#p:0qD%LDM{2,){Z<z{VOI!g/oBPV6L?M5wm');
define('SECURE_AUTH_SALT', 'xZ]3VC}2%<8u4ejC{= T-k|Ojgf[OW5e.)Q?P^[!n#U87*`)8I9=[Amt@PYvq`hm');
define('LOGGED_IN_SALT',   'dV^Nolo2G3H5_W~w;vseMH&|Fu3/:xRykKfW:%CjT>a^?ID[$itS21VX<G)^=eMk');
define('NONCE_SALT',       '/TmB(WiF-h^q?3P<yrZ8)EgJcKXF@?R|srQ7OI7<M+,Q*N6/cFE4)h:_aBU,3JS8');

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
