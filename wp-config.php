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
define( 'DB_NAME', 'philliangallery_db' );

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
define( 'AUTH_KEY',         '_sLkF]&,eJ{+SB/kD^O_|TH&m:,i}7DaEPSYP|/vPxHCUMeLZqMi|C#+8mqyGtS#' );
define( 'SECURE_AUTH_KEY',  'p8Z325=n1rm?:nYbEM9CJU$mNU!ZK!yBjTa.A5SfWt~OdW&f BAVkXC5c4vzK=X!' );
define( 'LOGGED_IN_KEY',    '*EDp]YS1821.fq4> %{B&btjdzZW>^,1t;#@3!=Uacc)%J$.L1KMsNz(GZl;z79T' );
define( 'NONCE_KEY',        'KlvmDJljG1n8/<%5o-j${HW64{P?pe?r4<m.7*[|DKC]lYoM}q8c|JVi!MZ(>nhE' );
define( 'AUTH_SALT',        'TBwEgi{Q,jy<h*87yJ0/.7Ljl!t^S{1]%lfEBq|(ljhV3qo%sNoCM8qN)}zNn/8u' );
define( 'SECURE_AUTH_SALT', '}W6;Q, Ih6lXlhHSG2o@[y`HmK7hMYxs^NkE2R`PLPF}1Q=:Q(4,Z#|t=#.6ID5G' );
define( 'LOGGED_IN_SALT',   'U6(%9.#wHkksr(y 7lqE`T K.LOv8OXYj_I(JM]C3QEhn->r%vP=|=f7Qj2Dsl{R' );
define( 'NONCE_SALT',       'Hd}/L9dJ=Un^ 5c.e`M|?Sl^l]H 7q1y!5-]M>V;t}V>zP4]V(6h=X{y$z{jcwJ]' );

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
