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
define('DB_NAME', 'gearedgam.es');

/** MySQL database username */
define('DB_USER', 'GearedGam.es');

/** MySQL database password */
define('DB_PASSWORD', 'GearedAcc.es');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')$Ud2i!GG}|784`TJ/(Ti{j1}k1L.d>x{_WT%nmSN#[uqtu!KUe${fQawvE9v^7F');
define('SECURE_AUTH_KEY',  'R%7T`C<uIB/B{3=Ie;UneF33=Bas5]r-J.e9H;I?_)b)`F(/i4$eHxhCs=~xH)G)');
define('LOGGED_IN_KEY',    '3?jLRLsVqOr%x&$I7Vl^S^PI(,w!UUYM0f6^-X}qh)IE&U`7e#t$de3lmb0#{>4 ');
define('NONCE_KEY',        '(0vi<1qfIk/BBZ>4SI]1CE0E/2Rm/$LyaO&#e/[c~L6|[;ISg2#W@hngx3h<l_u)');
define('AUTH_SALT',        'Z$>kFJ/7J8D9Mb`Sd]-}##p[PO7K2be|vivpaR>dMM&Ix!>8OLv*kRmkqxKXei@-');
define('SECURE_AUTH_SALT', 'FBj=q|#h-&M0;cggQ,?x)z7C4$kk{Ftwbfnb]}q&9W)@RX!)]@nLas=>H!EuEn#O');
define('LOGGED_IN_SALT',   '(=ot/6~tFN[+oV@</G{qcM8~{Pi|CiaWXGh]5TqO_;P{%cl^zN|}J7,~#KGL3A=p');
define('NONCE_SALT',       '}nS<N<eB5<Knfy07d-.zMRTIRnvTp+q_G.>t# de5oK5rDg3^<kD?2=A,(`&%Nde');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
