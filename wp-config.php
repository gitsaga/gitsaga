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
define( 'DB_NAME', 'mysite' );

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
define( 'AUTH_KEY',         'J7$6oOW%(Ik*#(aMd#~$62%C)me_x/v]VKX%;,xPo_aTA/PM1;<U~rj2!v6y?tV|' );
define( 'SECURE_AUTH_KEY',  'Z5uH(PJkB8.`<cFcbAqtlICR4;pPNcv%%,(gBjHL{xKNRN?nV%-4YJX/i6gVzV)u' );
define( 'LOGGED_IN_KEY',    '$b<!ZbJdp[754X%>R8y$[{:[<g#9gOGMP@<i! _Br^+NCJ%w?Z_%j3WB)d!d]/|*' );
define( 'NONCE_KEY',        'u.kF*f.ekL;sy<p&<,z_#v}nL%g/XHFQ_: &Q#=a5(1NH1_V?44?pdv{<$z%t[wk' );
define( 'AUTH_SALT',        '^(bvA0cSA*;X<S#Hw[G:rR`Me+fj~+3@arfCKfEOYD=j^ mV/%kqTW[yIz2 &)wY' );
define( 'SECURE_AUTH_SALT', 'Eg`}n;OJ2b#~%)gFH) R{93#n7kCtFL(VrKaj+[ef/YoH}h7r49h$fg89MEEmm`b' );
define( 'LOGGED_IN_SALT',   '>f_7_SD?PV-|V`M_!Ae[,Np5Ff-^o$f>*[ JQ2mc81Gi-WBC2[[Kt /v0#a&#P<-' );
define( 'NONCE_SALT',       'SEoxQUdCi5M?$YMN_}-UXaT)mByk3(gi`=x__C&vXy|S4W*mmSK&rbJU4-5S@[A_' );

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
