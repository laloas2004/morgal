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
define( 'DB_NAME', 'grupomorgal' );

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
define( 'AUTH_KEY',         'OU^SVp%7}D-CYb)+30.}|*ih?Nx4{# myH0:#~=icw{h}aGFOl;fiXp(&,rnzWVa' );
define( 'SECURE_AUTH_KEY',  '{,}*p,]@EZk~A^{12k~r4<}M{Z?8N0z^m]E@;CjfK+GDc;%i``p.jUGKnSM`_S?Z' );
define( 'LOGGED_IN_KEY',    'ps7n)pS.i/_KhUvAESnXL2C[R)%D^&>CrgrFNk3&q{jI8H#l#`dCH+r?A/0b5wWY' );
define( 'NONCE_KEY',        'B1x66|-5Z}yQd?,ERz|auh@e|i9g<c41h6gFA3.v@v42lYK-NclJf>#rQ<;QZ{jZ' );
define( 'AUTH_SALT',        'gbVSkjljwv6,%4C0@sApc!Idy:V{{Wy^d,lZ@:S4Cw^FCH?Wo0kd9lH4 NyOI}%U' );
define( 'SECURE_AUTH_SALT', 'R:AxlsN;}Bh|oG&l1`qj@#<>sh |+WrJ>hITAk$+iEcH3Zv`?G7j|5&NEK5&;/&{' );
define( 'LOGGED_IN_SALT',   'Q.Z$dQ}qA7jHl3>B}CM}n^qy/S4d!NrupmH{io3)9.4[FulN#%Lbeu;bjiL9+B`[' );
define( 'NONCE_SALT',       'cxbiJG&{1.p_Vt:$]?;b8kTAk{{Iq_).h$C2!SK~CrF),SFiG0bSn70w@eXc`0g^' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );


define('FS_METHOD', 'direct');