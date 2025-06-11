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
define( 'DB_NAME', 'sample' );

/** Database username */
define( 'DB_USER', 'sampleuser' );

/** Database password */
define( 'DB_PASSWORD', 'samplepassword' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',         'WU!_|4JAY~v4/y^}*H<-GD-,bozB`Zg=$qRA}VMu$HSret=v3B5Hc&=wuurf/+K ' );
define( 'SECURE_AUTH_KEY',  'q$*b-rbO=nC#*%C?yyIQEH*luT(Eo=?@=4oWT8hMv!U17&}a;0qA!OdF&>H@-s&_' );
define( 'LOGGED_IN_KEY',    'oL5yBg0o-QMSV3:zv{8s~6KCS,eN.RGy8nZpqurXU9e!X 0>i}<B@q=9NBCCy3v+' );
define( 'NONCE_KEY',        '$z~Y-KpF$SiAn][L_{pCGisd19[3A(Q$bJE{=dC=$KW2 t;YY0QOOI^r.G}JX;;0' );
define( 'AUTH_SALT',        'Ara5/N}09)L1r-I1k.Vb}lo::;C_f<e(ME!ZSqN1%njNv`sB]ihrE~i2oC&gJP<z' );
define( 'SECURE_AUTH_SALT', ';J^%[wCRy@SrJ)xnbnhrd0{ychTua/ s%bJWkCaD[nAdRo9IBM0r_.bv%.Lpd6ka' );
define( 'LOGGED_IN_SALT',   '5?x,.s7j5)6i!y{e9e<p~w<BuSq;$v|F)E0:-q,)>%>(Uuch4snLx)&sEq?rf6W)' );
define( 'NONCE_SALT',       'Gt.OWJ#tB1DnkH`s8pg;:3yN}(%_8mm>(af%~gMA2V%k%dH-;`ISJUp@Ft#Z&v>}' );

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
