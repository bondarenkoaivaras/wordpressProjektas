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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|hdAI%Cib7IBm8`$!cHYbDO2>Lh4c(]p5=qDMz=;Nv>>lN_J:&X&P?vWJ0?5e6/`' );
define( 'SECURE_AUTH_KEY',  '%b*2j9e35O]Fm *_sH:Wba>S;eoTW{@?{WpTvpy gt#u]X#0Xvx76dtOQiVnZZbP' );
define( 'LOGGED_IN_KEY',    'AprLf1o1:Bq[{q<,{&(eWzT_|:KH|WXdGJ+T?VTdLR<9lT,[MDEvlD$VFLwF$E,d' );
define( 'NONCE_KEY',        'qFV7$@4Q>73cTb2rP ao/I6^oHL[{._q[PkW+V/E<oDx4d@>L|s.B&EnOM%2ylj!' );
define( 'AUTH_SALT',        'J,Yi0VREh#rf}nNb,5O@rn42;XaCv[Ym.]kB+6H<HdyJ*#oxgH?;2NuHU [~|8fN' );
define( 'SECURE_AUTH_SALT', 'OR<7jUAWBEHY#rJh)J&K#!l_KpMUpBb`_UD1sX1ts[lKlL|vl1R%P]vRMHH6!;(G' );
define( 'LOGGED_IN_SALT',   '@4H%w#*C:Mr@2~<Iec{S1ouW^ghh#jycKAG|{5LO|6e15]jksWl%;O#NGb@Vn<Z^' );
define( 'NONCE_SALT',       'cK}{|uzzXLAA1tt``IxC#is+=;^tYhGavi.nv+dN``L$i(].2}Bhz)9tk7/qS^-8' );

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
