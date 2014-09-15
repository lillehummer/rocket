<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define('DB_NAME', 'lillehummernl');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');

	define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/app' );
	define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/app' );
}

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ===================
// https://api.wordpress.org/secret-key/1.1/salt
// ===================
require('salts.php');


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

