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
define( 'DB_NAME', 'proyecto1' );

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
define( 'AUTH_KEY',         'p9Bi/g[I)g1CqU[f+mu]}8r634M]P=O|U[tNb>-r*-n4}u}mqlJ4`T!F?S5:N%BI' );
define( 'SECURE_AUTH_KEY',  'wja~5U&BoPTB+:UGTSGS_~%(i[%[sWg+rm)q$QC=]u3!]4l81vzPG}]*],P$7Xzm' );
define( 'LOGGED_IN_KEY',    '1>DZSFE<C}%0<FYN(ys`$%-?PAld{7C8N _9u,_bu8Amz;BVMSytJ``xB<3<=eMs' );
define( 'NONCE_KEY',        ')*>/`4^nH*NJrZf}VNmT+4no$`1Ob=arsh0=:PA;B/PB(QE~i=O=vI;-{4:8ZqFG' );
define( 'AUTH_SALT',        '[FWBnYh/NWfUzVAryK.9R.f--XJbNW4[C=,_EA<aH+>T?bI; rw6 ;%%4J/@~!/E' );
define( 'SECURE_AUTH_SALT', 'VM44?-5@Gu8kw9?;WiK)!:,yK`(}iqyt6|@I8% ~:#n;%]vBKDcH7K$],C{.zB{]' );
define( 'LOGGED_IN_SALT',   '$2:?Q$zfbP@;YRweO7V})^ip#hUW,WyRQiZOk.5SL.0Hxw ]>M WFL#M()%-GZ0z' );
define( 'NONCE_SALT',       'p (H0K]-8eD,$}N*x /E7[+9gG9]j/KF_VPZ UL<<=L1V_!=B?WlnJ}(ePXG7Ds7' );

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
