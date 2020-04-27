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
define( 'DB_NAME', 'nuft' );

/** MySQL database username */
define( 'DB_USER', 'nuft' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qwerty1234' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.zzz.com.ua' );

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
define( 'AUTH_KEY',         'Ubib}ljB6{fc#6XFQPHy.DxBW~Qg+f}Kiv!J97:Y^>8q,r%{l_)!][|I yXg7y<$' );
define( 'SECURE_AUTH_KEY',  'EmtZAZQ iPx%0Bih<[FHQ}P}/+nuK=dkCvlpPb%snqN2;3w`/%;4|n#kw0#jZ>IN' );
define( 'LOGGED_IN_KEY',    '(.7MJz,NZhj`y564z#TqkvU&dI-c?CWu/`-wfq:>[Ds=Qp>c]zL||eWKgfV7I1=*' );
define( 'NONCE_KEY',        'Rz0qRYzffW3l6#P9lfvT`0~IA3v4}s-i#c8dW+k[iT9y(*d1^5{u0~V.y}Qn.xN2' );
define( 'AUTH_SALT',        '_ELsJLIgKMQK^cnA*B8#{Gz60cg7bG:Xae,3 T~=T.GGNm[=Fhk)jD[f[_LgFUE6' );
define( 'SECURE_AUTH_SALT', '>&95f>Y |$&`EZX)`/VLUY:<gi6qzQr9RC-0G-&D]qWSeyy]Xg@. s+DMg%vS713' );
define( 'LOGGED_IN_SALT',   'pj6o[<6Y1,38KfT*g9Rx6wNScNS:``U+g0wX7j}f6zAdi}Nl$D4vg0 {$@()+fHx' );
define( 'NONCE_SALT',       'J{1)$<yyV8fA/H0#dkhC!>}FXj&>Ku`1AU:]4jSA?nd.7c.f{vUm#p=k.=nWU%32' );

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

define('FS_METHOD', 'direct');
$GLOBALS['_wp_filesystem_direct_method'] = 'relaxed_ownership';
define('DISABLE_WP_CRON', true);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
