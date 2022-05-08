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
define( 'DB_NAME', 'sites' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Lae01.' );

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
define( 'AUTH_KEY',         ' l?)JQsNH+H(bdzx?m?QOE8#Z$0}f%:-v@@22jO6{bL7fM[:0(Y&>cRQdsBijDDL' );
define( 'SECURE_AUTH_KEY',  'ncyc&Fjz:TA$*+#YF%}6Z:3VT23ykpH4S,76ul1P%y?ah#:LGXEr^7ATKZ}jKWw#' );
define( 'LOGGED_IN_KEY',    'q#,1tTLTC39hY0}(wJ7eF;^(P:+>uO2>KG>XE_|2eH6bE7}loj.T^}6J[cMztq(`' );
define( 'NONCE_KEY',        '#NZSS&pt1<mE5aaL:CRM4|H3 ao/!Pf{zdg1!|C1RQ!iT;us3 V=YNQSy1@[%q@e' );
define( 'AUTH_SALT',        'W<MpC?/I9OQM+]6`9f:u[$W]TyS<HuDqn1${* kwa*37v3z)jT>t ;]QJ,sscG;Q' );
define( 'SECURE_AUTH_SALT', 'a2`JR4o?#VqL0e1[fu_WP-@2E*z?jU] ORa69z2j6%{=V@R@ ][7t:iU?57R*|x;' );
define( 'LOGGED_IN_SALT',   'je!0F<~4|r*u5lB ?JJ*5?Gl`Y[![ruXd_UxCa}yC~`p=Wko~3PJf+~xGbx]ZcQ ' );
define( 'NONCE_SALT',       'B`ev93 y8}N<,*<jI[AqlycMCmqn8#t<zO{bZtzjgW2J3Db/ZuUt VHX^YhnYYO!' );

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
define( 'SCRIPT_DEBUG', true );
define('FS_METHOD','direct');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
