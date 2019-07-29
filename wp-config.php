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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '9h!TKH8^=KHFVYcTSu!C.(i0-0|PaSu^oq,)LJpQ;|VoiJ~h,muDG5S[j$C:I{4n' );
define( 'SECURE_AUTH_KEY',  '[oEpAnb}qOQ:Usyfle{g=gcEO~i Nc#[N)29M[ wjVw58/[5QMQ;p;P[0R45*UXj' );
define( 'LOGGED_IN_KEY',    'aip<ja=P=k:G#_Qn1IADY~ug9V#o:/6&@oU}M2Fs-@$jR780t{e3MA=uDiv*P@{-' );
define( 'NONCE_KEY',        ';^|9#f`<+_C0#xQx_S/2[pC:,cp%[2ozqemkMaIdMssGUEWE*_n-(+4 )2~40F@W' );
define( 'AUTH_SALT',        '>G1%a>BKd(X7GP=DkOJw_ls`3FbD!/,pfcFE~:9`Tlb{8pQ4G?8UqJeLG?HpUgj(' );
define( 'SECURE_AUTH_SALT', '/WRy{P0l=>9>34}$/}sE/P:^UfJE15-nQks90|?p5,cZ9[dm3-Hyp<YR G`SAJ3<' );
define( 'LOGGED_IN_SALT',   ']=vNrIA>)T632-Bxh=[},PIMq$=_v5*qB3jP/R`LwdDtJI5ulg _5gOr}pu2WA =' );
define( 'NONCE_SALT',       'bg^`I- _,AglQ&2<q;yw^eTY@99%k+a]`rczP8=J{K#Ty%-+?T:EG]{jk)/aO*BS' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
