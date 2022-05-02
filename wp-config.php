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
define( 'DB_NAME', 'wpauto' );

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
define( 'AUTH_KEY',         '<6_1Y//5p^dzf kM9i]/ORd1Rd|OVdE60*;Mj:/b|Co_(5sIvzpsmo5ocgJI^wpY' );
define( 'SECURE_AUTH_KEY',  'hZQt@>zbg7oV$p|@Umjs$Jlz_u#%e{`wbC1i<%lo&Dej<I)8@2XvW30uCg{@&~x-' );
define( 'LOGGED_IN_KEY',    'c&2hZp]/+MO}a^|Ik9Y9LU74-:zni,t7[33z*g<%r%DgaF!JhskG}E*Q<U+?kx5G' );
define( 'NONCE_KEY',        'fX/LnYj1U<9e%<ywNnvNC}ZoT~9R&2Q3toa_M Zu4ke,dmDO#AThW wV,!}@GP#)' );
define( 'AUTH_SALT',        '5}JD+{NS!D/bu2P[G?<+:=aqK>HQPHyX79w^{^F,ye}L@0.19gR8zv*/SL.Q)#:R' );
define( 'SECURE_AUTH_SALT', 'xF~g+U]feh,jS`7lI<e>rE~(1xb!aIA$$0VHFd6G4Bey,$]h-Q%/2Bsilt}wN]P-' );
define( 'LOGGED_IN_SALT',   'iKlox&ZadKd:N 7w2(05g&%a(c_E6&h!G/&*Q9hc_]l7cY?@/2$UzNZgE65ZTr+7' );
define( 'NONCE_SALT',       '`fd5kQ0P8WaiCDCz{5,A5!1}p&-.YAc?Vi?qtdi(TZ.D>d2U*d&)*KNvzNfH6jYy' );

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
