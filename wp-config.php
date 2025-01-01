<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kelompok1' );

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
define( 'AUTH_KEY',         'ySvhJP3$XQFvrI!IzX9FTC_Qx44Kyqq8}UEtTf ajqn+#NSO(vm`h~y%=N(k6{Fz' );
define( 'SECURE_AUTH_KEY',  'K32|RfPj_lE;~~; ;.e:N0E2=?rf-Mdws%iEEkHEo+Z-3Xa31USkuQxksP(Y]`6i' );
define( 'LOGGED_IN_KEY',    '^o/cB%c6/1sy11n[>a <fIS&OV^GWHqb*yS}fFv@whK%s;2(niBK_BM{pw$kvqwB' );
define( 'NONCE_KEY',        '&G[kh5^>G!;qJL(^$M>O)rf0H/)Q-1+{;E>7Mmv|sX-LO4:a8Qk7?*v5:}lHTq5[' );
define( 'AUTH_SALT',        '{:i*u<_U8`Q#Lt{MF|gHU(uFkRNjb3[~0,5KCg1:{,Z($soV0*?j#FL#.r6|z<Zg' );
define( 'SECURE_AUTH_SALT', 'hMQ+1p0{pL&YI0M/u*P#=.G$},++b)oiS>CA&TH9nLk#Rc=9yHT~)eF/A8%.rABu' );
define( 'LOGGED_IN_SALT',   '*+3mR@&cZpGjH5c9:UwImne@qVr-[s:F:Prf|8Y[a`nz(|gZ.}15TOMR%H%[Hm{B' );
define( 'NONCE_SALT',       '(QTqi;j7iN2EsKlPSZUa!~#=P%ixR7BMCj(loO96^]m/DS5/:a*IWjBK@^}J-uW<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
