<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'K4VPOA4xgNqz9f' );

/** MySQL database username */
define( 'DB_USER', 'K4VPOA4xgNqz9f' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lnEwOR3ekeZLbc' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'U2s0@9unQ;z`m}Ml2oz|}cH:%FeV_^Mx8jvp;$oKR@6]Rj8&BZSa};fkKUi8tE~u' );
define( 'SECURE_AUTH_KEY',   '?%/ViY&oSkqv+TFK0`~/ps7M<5zg8}@Md[LFTH&DX|?O8#`iBQ%%Y&sSt02Xgm!N' );
define( 'LOGGED_IN_KEY',     '=`?sA@C=}eL&7!j%-LvRS*^:P!ZNq|&TxRu|*V{/UW0E@u@hjl|O}G<-K`#{usPC' );
define( 'NONCE_KEY',         'cyK06]3fm5g#+[n_i&q^}457e}MrHfjezOcC:g=/W_O%@G!Iz[Ud}126w#LkdHhD' );
define( 'AUTH_SALT',         'vrY^ +U5=NVfr%$*T9{03NsP1fU4> YK0([&n{2ZrveU75=Xy|5r2e]9hx4%aI$t' );
define( 'SECURE_AUTH_SALT',  '=H$dD[TOea/JKo#pqnM0~/V}t32I08rzI;;Jq%0%qVyjl}Ndm~zi:*l[mjT!iNH&' );
define( 'LOGGED_IN_SALT',    'sKjz^dOux;,HM4s%@mx%OMsPSW$lOtvyC4.uV&O_]nv-Y&9Lro5F8bU.>eOH3Kql' );
define( 'NONCE_SALT',        '@+Ig3(z@5[[DJ xUEHl#.:V;x,5:FAA4CER~tKQevrxaM+lx.#uUV6Xv=>}FhEqR' );
define( 'WP_CACHE_KEY_SALT', '@CB_V#nv6E0&: 9:>Rs|t~sw37W/J.a%`}+4o6lMseY*_J03GhIH{DsW!6/E-.!3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
