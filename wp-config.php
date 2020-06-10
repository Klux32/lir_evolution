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
define( 'DB_NAME', 'lir_evolution' );

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
define( 'AUTH_KEY',         '#Y9pCJDUa<<9M3_Vnnym2c1e+n0vf,#tGY{XNf^(u~ds)!(]LK_xlB3 {?*-$+9)' );
define( 'SECURE_AUTH_KEY',  'it7;+tac<%:uk {AuOb#DeI2-d@%P}pwOJ9KPg_arNgl|!}6fxt7Er2G$+GDShV>' );
define( 'LOGGED_IN_KEY',    '_=dqQ~g[R>tibKH*,Iv;o`[qDz`{2CO(#pRG|zm;9A$,!+;5(ariBZ zjAFqak`g' );
define( 'NONCE_KEY',        'fh_z%FJKTx<:uJGo66Y%B5|MjDBT[V(Awyqs}Tk7w!81u3m<O =*Zk#oay@>@pS}' );
define( 'AUTH_SALT',        'Oo[B)(j[{r33!q/]Z<&/N=d}j$AGoXc,^,}%NIh2@Nl2!-!*tm})b0N%<tP0uwL_' );
define( 'SECURE_AUTH_SALT', 'B; oM}_KD0XHN!Gh3r3Hq>)rTQ2G0r#Wvr4vJU8GSdLw&uM2:>z(`E[jUm2E@OV/' );
define( 'LOGGED_IN_SALT',   '`/_(bEy^N#}>BMOUV-^f?{m;qzPtV]^ZY.B<__r_8o !29_a<R/.!HbOd~EeTo2^' );
define( 'NONCE_SALT',       's+D{G~/96D:Oj1eJnZkhGczp2fevJQcyBRr+?F_^e~SGp]?@7%X/5kQlgUdA`#w~' );

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
