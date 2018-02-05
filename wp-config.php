<?php

define('WP_CACHE', true);
define( 'WPCACHEHOME', '/homepages/33/d612300711/htdocs/clickandbuilds/WhistleField/wp-content/plugins/wp-super-cache/' );
define('FS_METHOD', 'direct');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db721614960' );

/** MySQL database username */
define( 'DB_USER', 'dbo721614960' );

/** MySQL database password */
define( 'DB_PASSWORD', 'RIeMVPnJtyBBydWNkUsK' );

/** MySQL hostname */
define( 'DB_HOST', 'db721614960.db.1and1.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l7,%N.Gc#;i3a.{3:|ZMqr.rk1D?k3_I66xoQH{)UYsT:-p-]lP|-|1Cgji8,EF|');
define('SECURE_AUTH_KEY',  'sxcCA6~/dt@lb+,|Fpz%-;C|/>Zu:L8ZRi5B1I3y-Y|gc]K+6UD]Dv7&!C`Yze-O');
define('LOGGED_IN_KEY',    '554,^M%zvW$f ir3j+p(U[1-dQ%glZo8@Uf:@t*eb:;a|N9}`R-`zp-|z8o|5RR4');
define('NONCE_KEY',        'H$6Rc[NPd=/4}S{7843xuAxda[.3_I7GKCc&,ML7Mf-z?N=zNxVAQAGm;Ler|0js');
define('AUTH_SALT',        'g|_9D|~0,]a(G9SPL/4(qQ/|<M{o6|-S|J{ELYKvy>YM}9v O+x|EtAD~>je.H&,');
define('SECURE_AUTH_SALT', 'x}=t`ceu[>TALOJ.8jCUm-G$(}~-]c$)6N3H5EuTO~aXB[Gv5gi-V:|!>#Gua@:[');
define('LOGGED_IN_SALT',   '|~P6;rbSR$ms/[5(u6+%tDenx{>S_E(snY30M=aFcqW$._4]Npe=T^r<67.=vwjj');
define('NONCE_SALT',       '- !pShg&<[O!|9O1s(&<MP $$7WU7`@6PCq#!DStML!Hs@k0=FY/,@4H2Xoi(kE&');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'WEiaG';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
