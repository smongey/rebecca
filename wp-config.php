<?php
 
// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
  include( dirname( __FILE__ ) . '/wp-config-local.php' );
  
// Otherwise use the below settings (on live server)
} else {
 
  // Live Server Database Settings
  define( 'DB_NAME',     'name');
  define( 'DB_USER',     'user');
  define( 'DB_PASSWORD', 'pass' );
  define( 'DB_HOST',     'localhost'  );
  
  // Overwrites the database to save keep edeting the DB
  define('WP_HOME','http://localhost');
  define('WP_SITEURL','http://localhost');
  
  // Turn Debug off on live server
  define('WP_DEBUG', false);
}
 
// Never use wp_ always use your own to prevent some hacks
$table_prefix  = 'client_';
 
// Usual Wordpress stuff - Dont overide the ones you have already
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
define('AUTH_KEY',         'wordpress generated code');
define('SECURE_AUTH_KEY',  'wordpress generated code');
define('LOGGED_IN_KEY',    'wordpress generated code');
define('NONCE_KEY',        'wordpress generated code');
define('AUTH_SALT',        'wordpress generated code');
define('SECURE_AUTH_SALT', 'wordpress generated code');
define('LOGGED_IN_SALT',   'wordpress generated code');
define('NONCE_SALT',       'wordpress generated code');
 
define('WPLANG', '');
 
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');
        
require_once(ABSPATH . 'wp-settings.php');