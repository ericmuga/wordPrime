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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordprime' );

/** Database username */
define( 'DB_USER', 'wordprime' );

/** Database password */
define( 'DB_PASSWORD', 'Primehub2013$$' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0H*1We=qkU[`yv.-EK8/z+$9VM>[c_h1=l(?ltq[<:=){Np{RS-u1FU>mEl,0`n/' );
define( 'SECURE_AUTH_KEY',  'yc3xR]%OXZ.Y5R3YP8js!N|M`)-&t`h5k@D(T{)xW(aB9%L%(}eM|8f?MfuNrQ7Q' );
define( 'LOGGED_IN_KEY',    'Bu2)&tkhBwR04g%]eYBC^=Y(CLR~@Q|>n[!`J ^W/w;Jp#EeFg@IS:R!5yF?;L1Q' );
define( 'NONCE_KEY',        ';d~PjfKR%B15>_N*C;&6t`lNM^p{7(:oo=:_}tl=#i[iitXBuc|36y91Qss@b]gJ' );
define( 'AUTH_SALT',        '>6-9eSgPDi)6EUIC*;;cA>Sx86GB$J}i<Id+V<8_NaPM[B+:A&]sEnu~nCPW.@9a' );
define( 'SECURE_AUTH_SALT', 'Tc%)*}8njsOiNflv<qk8`j+6d$9NSi@#x|&#]ch0OEQ<po]OV6vstV<e2aK~:DmY' );
define( 'LOGGED_IN_SALT',   'c1#[^LR|*&U,#^*/EsMtSMVVvVF{w4C2l{~$sE8==,+UFO^NPjvVzLb^a[COEw>7' );
define( 'NONCE_SALT',       'XX2@2s3Cn0v|Mt(T>v@sA]7V+}msy(O`+c%,+93q~@S5R4RtbI~x/!;>uBYQ]Wh^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'prime_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
