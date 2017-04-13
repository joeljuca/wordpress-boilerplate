<?php
/**
 * Duplicate this file with the name `wp-config-loca.php` and edit the desired
 * settings to make it yours.
 */

define('DB_HOST',     'localhost');
define('DB_NAME',     'database_name_here');
define('DB_USER',     'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_CHARSET',  'utf8');
define('DB_COLLATE',  '');

// Tip: for a quick and dirty way to generate auth tokens, run:
// $ head /dev/random | md5
//
// http://joelwallis.com/random-passwords.html
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

define('WP_DEBUG', false);

$table_prefix = 'wp_';