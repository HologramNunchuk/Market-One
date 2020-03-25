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
define( 'DB_NAME', 'marketone' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '|t7K@2I;Lqk>3e:eL&WiB@N}zj~b|*jd9<UyVSU *2LkPirX0UgBp<zg}R.D!IV7' );
define( 'SECURE_AUTH_KEY',  '3Z/4Z.-Axq$O9Ke:s!/p:>U/#.3W<FqQmSAxvgNy{cY4&R<<tYV10Kf4~hRz,NbB' );
define( 'LOGGED_IN_KEY',    '^,JcE> fo%RkWk](zbs2e #sbB$(WTO,NoM7?&Ir6u* I ]Q;+2PRwN<J478IYn!' );
define( 'NONCE_KEY',        'J<.V7eD2ScJ [&#W>k(NW^orbX<{RoGqJH/<64x/df#*75}O*s0,@V ,:_f@,.n0' );
define( 'AUTH_SALT',        'rlICND6(SqKj3fR<U+W#RVAAj+3Dl Z,y1;|~[OXj#YPNcveCmbHN0}/*)zw(-ax' );
define( 'SECURE_AUTH_SALT', 'bq7S3.FCr<Pl@Lf9E)BK:1MEiLxoglNeyHgw 8^_QZh3V[OO kje&W$C<1KxLD(5' );
define( 'LOGGED_IN_SALT',   '}XM|?6,5dmSx%wu/xPAY@Le9OJz5}5Q!*0C/dJ/k&~A(nj>b28S%{MIlp%kaO?N&' );
define( 'NONCE_SALT',       '*J-6o7~&18|)RrCr<Z9NB{&UYUYe!XgxrwsnuKRH-I{n_[|4CzK n{!-.}r]J}`{' );

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
