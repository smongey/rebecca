<?php 
// Local server settings

// Local Database
define('DB_NAME', 'rebecca');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

// Overwrites the database to save keep edeting the DB
define('WP_HOME','http://localhost:8888/rebecca/htdocs/');
define('WP_SITEURL','http://localhost:8888/rebecca/htdocs/');

// Turn on debug for local environment
define('WP_DEBUG', false);