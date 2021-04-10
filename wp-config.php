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
define( 'DB_NAME', 'eyes_school' );

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
define( 'AUTH_KEY',         'JFQ$b2)fr<NY^?U$m*A3htGi3popfHMRC)qGGOkk{ C<!YX?V]w}m[<N2Co`ge71' );
define( 'SECURE_AUTH_KEY',  '?O/0>RsOht)2_H)|$/.0T/xmwJo@ h:(U#T4- f*+.{]q+%ga&[yxM82j%mj6EM ' );
define( 'LOGGED_IN_KEY',    'mnyt:Tz<B-HMyh18Y-G5m$yu!OqN-v/YPwarI..Y,+Fv%eM25@<3zdJWWEj+gP7-' );
define( 'NONCE_KEY',        'QiNaLZG*IW utxi`Tta<yB:<l%`wng0KqepR8[tvIddf#AN4?(~V[ozKVB(jx9?4' );
define( 'AUTH_SALT',        'NGEE4gSFGTI8t-Ry&t%.o.YFqkgdIz5#&6Y3f{E#BmnZ`3#MDFi{!BbkfPu7X-G`' );
define( 'SECURE_AUTH_SALT', '@DkwD4f}9S]@f0WPz;O2hF{Is0A9U<h#acZ7s8f(o{G~guAP=d^BVDf!Y`CASg4S' );
define( 'LOGGED_IN_SALT',   'IO$l{^g-|G5psu=~p(%eajmxWq,{qVN$33h,/m@5$W0|6v6pFGQ5qxq+Rp5UOB /' );
define( 'NONCE_SALT',       'Hy/7wfj~v`W:^K; |9u0]PGFFgNeO~ )LGRHhTfG-*u}7Nbj:Me3B:wd!7CxfUQ0' );

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
