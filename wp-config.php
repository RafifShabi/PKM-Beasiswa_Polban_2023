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
define( 'DB_NAME', 'beasiswa_polban' );

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
define( 'AUTH_KEY',         'Q0I,R}ZZ;^5k*%::N0QWO3~HNe5P=!@GK2m#[K+xrN7tX{i?*-M6g0L8X?#OfRrm' );
define( 'SECURE_AUTH_KEY',  ',#Dd7IB&C^oT{HPPZPud0 eu%fjsO/mvg^mfnaX+6sEWe OzX0e:@m&VT3A>NZzB' );
define( 'LOGGED_IN_KEY',    'MUZ# i?c|zM[$sYa5W[$r%P9vLp%)O^)xahNxIM0zmh:elic/?#;9Q/ENpyo3>DR' );
define( 'NONCE_KEY',        'QT8$IQ5-00F|MfahAp[Jh|^m:w(.`7k>D>k3}$vvD=VdH 1W}P!N_T5[DnxC~:U1' );
define( 'AUTH_SALT',        '?cW5PWJQ01dXSI[ZkDAcOo1qtuB+Hp1M`,|@93Z!,x_xaW64!ePa?N!<qu:iNH0S' );
define( 'SECURE_AUTH_SALT', 't&2T<!tvbA# Q; XC$ID+XfRH!sE#7qm}w4l{I^H1cgf-h+0}`/FuGE12$/^^jM2' );
define( 'LOGGED_IN_SALT',   '-?->4jOy:<2_hIe?CyZQDlz&>>3gA&t{gu)bamUIK.)e7n6YN<Rj&>h9@zUrif]q' );
define( 'NONCE_SALT',       'MF~L8/{TuvM@@G`g!?V>XfW}aVcEO(A 2r:x>f!]CFXTn~8q`^NA_iL*dRWaodZB' );

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
