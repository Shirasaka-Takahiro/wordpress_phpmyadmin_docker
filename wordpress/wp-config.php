<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_test' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Wordpress1!' );

/** Database hostname */
define( 'DB_HOST', 'db:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(Od)XB6,KsxSfBauy<1kOnKJ}Xl7Cl`H5PgH]]$XO?d!*M/&co8mv/4{C|$]z{A*' );
define( 'SECURE_AUTH_KEY',  '^9r9=%lKQ $V0=s5|CU;sgzB8(5i^ltmr#Wa,LCK{SAjZ8mq^ul{g,oH~9(tpkD9' );
define( 'LOGGED_IN_KEY',    'V1. c)Bk-TxK~~mTy^D _b#h9.[Tc-XH>dB@M=3k8%CQ]k1q=oI:ImR$6tJM-!Q[' );
define( 'NONCE_KEY',        'b7e6gCX,`GyeJ4S+FwX]F1$rpG$:Cr_[{9=|7ufR0I},2s6Tcs`mZJg`Xibp7?0n' );
define( 'AUTH_SALT',        '#nN5_S[<*<|&^qWbJwBA48%m_(~b?1Rr({wko?j;!,j:]3vgVl+U/7R*JxS%^y=`' );
define( 'SECURE_AUTH_SALT', 's%sh lDWUUukS##v17u^iE7Q^ULNxNRPC:-}2p5>x4.,,}XVq-ZspF5gX=iVgHc&' );
define( 'LOGGED_IN_SALT',   'b8b%5qH{Jn3:R*0,|;N[h:&^57pw~^U[,S1yLeO$ rDb-|%*sSObYvGuqiHXnDH-' );
define( 'NONCE_SALT',       'ZQ:R:%:4<9{/upDG+J+tMLja:@EZOXKg/tq9sj0&aB>H:+LWgXav0=YviNdwe|.q' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';