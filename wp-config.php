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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpresskira' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kira123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&4^Im~aqEDr6w#+R%W$(__*+?ltf-j6MXB/NT`C%$V}EBp+Cm}dnFOcO{ep~J|Y.');
define('SECURE_AUTH_KEY',  't^rN|;|6Ju 5@*:@_PH&!$H)[2qZN+KUkx(WxpA|$6J(3tc!kO~[/EPs*r|Mb>2w');
define('LOGGED_IN_KEY',    '%H-=A+T}|F2@NH^9b_$4nbSW}pZBSCWa=P%[Q,ZZwc)%;%EqYq>u&%EB -oV{KP{');
define('NONCE_KEY',        'P:^/3t4RFg&D;6RO!bWY+uqQ}|DtEvS%:Oi.IsQ| hqaR;r+@I?@.y-D+ .bFU~H');
define('AUTH_SALT',        'muvD*zHL-wn+`]{|ljXye][GGT1ahQ{:|zDA@|zQae61j-eoZO3}- {aa?W`G%b*');
define('SECURE_AUTH_SALT', ']?e!lA-kx)~uk=.75|QfgH7(4VY;:Ne!cWEN@6{5F03Vhjed5[_i?eLP5#zm21TO');
define('LOGGED_IN_SALT',   'JmWwu$[MDniBINq.fYs^>&73|OWFoJw@<4{4#H6[{phx*E}=ydGeVPq`KgqD|p@Q');
define('NONCE_SALT',       'becRt|j,PI{}dJR4G(Yrrpz~RId+%CgAo?efCS-:fTfYQq@][pmp:BMq4?PJwmU]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
