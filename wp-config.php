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
define( 'DB_NAME', 'ecom1_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'L2R$L>hed]%8y;Zj^Dy)w;jD|F)|4ig5mbLo_M_]eg_@2K-&3,&sr!nds1Kc;+-1' );
define( 'SECURE_AUTH_KEY',  '.*;6E{w4@ABB-S^khu9KnWkxx$iLrpj9NZY7[t<QJF{^LIv[XfgL9qjXk_ Srw%O' );
define( 'LOGGED_IN_KEY',    'IB78aOJFE1&?8gcj;z/ZR$?E)R}RFrFEpE&w&nRicX-^{yNcK7d%-tX.sjyMJYN.' );
define( 'NONCE_KEY',        'dVrGh0V_|]rkwZL*QX96:WZ5[bW8v?yho fXu2yiRj,~U+dD_<_of/:8LeJ4t.MF' );
define( 'AUTH_SALT',        'id:s$K=9)B(~F}LE[t~;Uqfa} 7+Sf8}Zq-g}f@{i{)&8R$%)h^)kd3Fq2c$0_&>' );
define( 'SECURE_AUTH_SALT', ',r}m<ocv#K.3+pr@*wS`;vx`FPjxRi-U]N+D*Wu*N:6NrjSTL6O!CFLL)O2@H(@C' );
define( 'LOGGED_IN_SALT',   'C*iI}CjGrJ6}VCNVm0auNB3:l8`L}$A;+mEu&_X5Bm~LpAOsY&JxmO?K[R$RZ[;{' );
define( 'NONCE_SALT',       '@ZTA.)8I>A+N~*`S9w*5#L~/%Ebv;;petuPWjK RHn,e.eBKi+]oj)kV*tEM3L w' );

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
