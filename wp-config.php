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
define( 'DB_NAME', 'cobawordpress' );

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
define( 'AUTH_KEY',         ']JO:R16])|AWObrI*`C%,YJ}~kgZlp9*;?d(K[::wgyvGKOj0T3@&R&; HzEd!8)' );
define( 'SECURE_AUTH_KEY',  'j[5ftM7%|p>/b~1}-;k*4|Uw=Uq8n#yv#XdTI4_*0BcL(]ivc2EIrr4DA)*&*Nk;' );
define( 'LOGGED_IN_KEY',    '`uJ {h^l:G(T-[59*c%q.`mUz4Uwh82LO!/%FJ H13% /Mr4E:Sztb-#U[{/$`8$' );
define( 'NONCE_KEY',        '9*q{t(Kg21KW/#-.{iUiqWhf(J4qyx<-p3T|0hV#6KL]C#geTV5RjRIC)H5Df!t$' );
define( 'AUTH_SALT',        'iU!i^F1*T.ruM1LQ4>O^Z&)qjeY-&VjAO]6b]E`Mv~_iwyKIJ_Cyb%&$59GNpm,i' );
define( 'SECURE_AUTH_SALT', '2tE7~<<j<:0R9AdyfP9_sgOFk-JTrKgjJ_cyF kGP-+=dnxj.8#yNC@Z?1^mG2JQ' );
define( 'LOGGED_IN_SALT',   '}U.3e]|Nm)%=,.k7(Fgf2k;E)n.%s{RdY&[jxz~:tO>YErx8Ylo{t]:!dpmClib<' );
define( 'NONCE_SALT',       'cB$!~S3h7}ut#XCnp_N}+0oLZYc|FI&uk>lZS-}2,l wRjNyZ{znk71dCs3h6YjW' );

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
