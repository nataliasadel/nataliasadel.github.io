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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Snoopy16' );

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
define( 'AUTH_KEY',         '|0i<LlixW*RS/%z&O{$X;aYa0Z*,ICL5DByQ5(0hwn-^m>j1@;#VNAk&%t)k4!v>' );
define( 'SECURE_AUTH_KEY',  '<rN8ES53 %29r>I;j*d6g?Zb?WT~7QvujW{6vEAI3xM-d?7,dz$y62J/]+sGPWKh' );
define( 'LOGGED_IN_KEY',    '~y_}5mG:l7!v^D7Z7&`=iTf<ovRuT]QV3RVEP0fDeZz<Yz9Mg|N5`02w7Zm8EQ~~' );
define( 'NONCE_KEY',        'xsD??]F{./P[~(:yVmcrF.hLjTrEr$O&>#cB>D$~}W#@c=Qsn_HC(#*_R?oivnbQ' );
define( 'AUTH_SALT',        'uD*:%mztZt@4,u}zOsb8^nv9+{$ qkK$.W>whj<^g,dW{JP.qp#3?^zk_6T-4i{P' );
define( 'SECURE_AUTH_SALT', 'hWKKN:g^Jp8Bf,zG+^9.o^,.>lJnr2Y@q*j )(qW.Qi{)Y)Ch67j!,**5H4;;pjw' );
define( 'LOGGED_IN_SALT',   'jB~&v?v@{`6d8vBsO7)d4uzEFDYYqqMIerixcJ{mLiGcwD,Ht~r]ux8k$E{Vy?vh' );
define( 'NONCE_SALT',       '=?9SUF+|f|~b3P#>Q?G7.:NUE]hFr2eK7QN7}?6lDe y{-iw2+|t1V(IAtyF/bAx' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
