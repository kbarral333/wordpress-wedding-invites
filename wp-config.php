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
define( 'DB_NAME', 'weddingInvitation' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'WKkAn(ZLf O`%/NGx]mlH[?SHrDEVuVUQTJ:rchLxZ!M_K,Z-%gD^}KMtCSyH(Ns' );
define( 'SECURE_AUTH_KEY',  '?3KYXMWI-Jf,)fsz^ZXHKg0uJX/@&n *Rwm*h6[$p,GvJuFIjVs!err]YPnc%fb(' );
define( 'LOGGED_IN_KEY',    'x/CKahA]WXS*L!$Vff}-%g%R,RxW@zvP:+3P`YV?M4V e@e$*rvS+4t^Yk}>jg$!' );
define( 'NONCE_KEY',        '>p}?b4Fd-d+HU$=]o$p)(qJYaJ]];{&`s)Q,IGKa0SWiT!* )%!gAqcrxr.w/OkC' );
define( 'AUTH_SALT',        'qy7EJ<jHLk? /x@V8v5a{1b]x3Q6IYD>&77e^)6x}.``9JL$zx[>cdI(HP2yb0@0' );
define( 'SECURE_AUTH_SALT', '^wAbNkq(}*{lL=ruGB;SAE0F3KgTA/5Vh^%UxVNvcgM3/U[r5!,+yYMfX=DW!!Q}' );
define( 'LOGGED_IN_SALT',   ' 9x{R+4m!!^U&r-Ia[i,K2BMNgPoE$HJjF2Sxbiati9stj}=RD-%!X~mBv#X3GVe' );
define( 'NONCE_SALT',       ')jmqF{wi%.p2,%;4i,S,5kBxSm#4Hev-2<nZ9qIAR95^7ezP>&aMl6#kiL3yP>0q' );

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
