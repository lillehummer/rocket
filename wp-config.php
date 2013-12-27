<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define('DB_NAME', 'bedrock');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');

	define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
	define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );
}

/*
<?php

// ======================
// Database configuration
// ======================

define('DB_NAME', 'db');
define('DB_USER', 'user');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );
*/

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ===================
// https://api.wordpress.org/secret-key/1.1/salt
// ===================
define('AUTH_KEY',         'Ra6UZ+F/mn-Us;+`-*H^X}5[~|Bk=)03eD5Pd$F#$W?`x[:JQ,D6)[m`B6x1(i}B');
define('SECURE_AUTH_KEY',  '?&~x. T2NtiUC6}tr!RknxI*pNZfIn.,ScW1J{l<gh:LeO$%@--n}`lm/b_/>5aE');
define('LOGGED_IN_KEY',    '%0#}pkjQ/1[-8r8w;z)8_:4=|g4$<uM#*%Z4#NdU%-T8e]K>0|F7F[ctF$aXt9Oy');
define('NONCE_KEY',        'Jh+7sI[pJ|>Cr-)0<(2xz0y{=SaYheDy}32SY[]9!t^ni+nt[LS{h~ndX`[X+bdx');
define('AUTH_SALT',        '-_e7HVZh)HAe|Ab^X:|M^Z]US3_Vxu3;m<a9M5ig<<>ZcYg){fmX~?.d]bFE3YW&');
define('SECURE_AUTH_SALT', '}N3G{-HgPGlWYI3F7edcC|`7Pt<!U@+5j1#X|Ad<h6=(Yxy|wNt5R+.#[AA,iw4H');
define('LOGGED_IN_SALT',   '4J]oom?09B<Z:]$=mSX;D{?EC@^c+4]/qoSa |L+RLX5rL!*}=)-@^{Le4|$. OK');
define('NONCE_SALT',       'ZW;;^`#kyxu<dr/8G7f:wh UOtZ.T6*YrUmqjSaZI|SU,O.z>i[-XI^F:uHb,y>.');


// ============
// Table prefix
// ============
$table_prefix  = 'wp_';

// ==============
// Enable caching
// ==============
define('WP_CACHE', true);      // enable the cache

// ==============
// Post revisions
// ==============
define('WP_POST_REVISIONS', 3); // any integer, but don't get too crazy

// ===================
// Change memory limit
// ===================
define('WP_MEMORY_LIMIT', '64M');

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ====================
// Security
// Disable theme editor and automatic updates
// ====================
define('DISALLOW_FILE_EDIT', true);
define('AUTOMATIC_UPDATER_DISABLED', true);

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );

