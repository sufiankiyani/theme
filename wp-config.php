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
define( 'DB_NAME', 'theme_dev' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mac&123' );

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
define( 'AUTH_KEY',         'O&HZ9;j8!@Hks3XX+,Yt@H>YDE@I`_=.t6(wD 14Xqc[cOFFrd9!H`A9`?cY:i K' );
define( 'SECURE_AUTH_KEY',  'jEoGVyFNr3WWm`[By39*FupMYIP2gefleJe2<w@;iwOyb!mR{Dqcst@P+)=>2<Mi' );
define( 'LOGGED_IN_KEY',    'S_13bJ2K9cFdAn*Q{SDWoU8mYpCz//NE#}r2Ze@.5GJ5~sbrD,c&{mA<&]ds1|]r' );
define( 'NONCE_KEY',        'mah,}H.2+(@&W43]{>G=#_n`x^t[~s.,y`HS-w=_|[69yil0Y:l #~`K<~%/vCj+' );
define( 'AUTH_SALT',        'l!6n7>p8pn[A-TuhHWHdxb{CiVULgX3*4`g7ZX~J{B(h~M)k,#6i^.C95e-4`fAS' );
define( 'SECURE_AUTH_SALT', 'F]HH[zr[;OSdO/uN-UGmQA}OrJ|~Kbf0L/f FGNv++l^v^Td3A}cE;dbdHje5<6=' );
define( 'LOGGED_IN_SALT',   'Zi01BV4@t8ETb[oh4dAFC/o<hys==0-ET~cErth*^EF@PpXo7|O//h?$Sx=M#2-y' );
define( 'NONCE_SALT',       'jvF%^<^H$cgNp<aNWvfCyGuY.g8Q.gX .TsV%&`Zy<NQ/K;_4f9m}}aLCqiM?1y6' );

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
