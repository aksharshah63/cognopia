<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'cognopia' );

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
define( 'AUTH_KEY',         '}9{w<mz}LECBD0Z$jHf>iZymmLVM13[@~o8K|G!zc+3uZSCe],f0{]w6;tq;]MsV' );
define( 'SECURE_AUTH_KEY',  'FI]8&]gqsa4go]uO?1#>#d)n%>,/=@KbB<kQ2;AGt!!P4cP/S{@b5RBF~<Y$;am?' );
define( 'LOGGED_IN_KEY',    '(2<%ho6}12h~]X+Psu(F0R*mfT9a7= H8|C_R|NJh`]lX}J9n<>GLq<7UI%:I]/i' );
define( 'NONCE_KEY',        '5o71^Ns2/7cd,@5ofgig$F)6. 3{M,u-H^=xeScg]_>aOo,B)r~ZS6yPxEW2i_vd' );
define( 'AUTH_SALT',        'itCLKp,ln&wv{N|B]WC5t!})g{5?ifL5?NMmhb;y5/C.Nl.^lQM9vy}@S3ae|IiS' );
define( 'SECURE_AUTH_SALT', 'luz4>zd194C_>*k &T!nAEk;)6=5=qlX*}1An4HLy&B&z:U0H|NW]d/G_`2~P_-*' );
define( 'LOGGED_IN_SALT',   'uxW+;lEP6!sOh5g+^C;@v/gdC$SLX?Tzjs>]CH[_KsApzd,p`=er5eJoV)o%,|c~' );
define( 'NONCE_SALT',       ',,#7)*9%|7]l`W{>X[:jw8U6Fb:pb TpCy;PZWH&2!JJ|@Rr0m/V4,%%_K6wq>Y3' );

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
