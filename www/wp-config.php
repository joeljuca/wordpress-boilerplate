<?php
/**
 * Use the `env/wp-config-local.php` file to store environment-specific settings
 */

if ( file_exists(__DIR__.'/../env/wp-config-local.php') ) {
	include_once __DIR__.'/../env/wp-config-local.php';
}

foreach ( [
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'database_name_here',
	'DB_USER' => 'username_here',
	'DB_PASSWORD' => 'password_here',
	'DB_CHARSET' => 'utf8',
	'DB_COLLATE' => '',

	'AUTH_KEY' => 'put your unique phrase here',
	'SECURE_AUTH_KEY' => 'put your unique phrase here',
	'LOGGED_IN_KEY' => 'put your unique phrase here',
	'NONCE_KEY' => 'put your unique phrase here',
	'AUTH_SALT' => 'put your unique phrase here',
	'SECURE_AUTH_SALT' => 'put your unique phrase here',
	'LOGGED_IN_SALT' => 'put your unique phrase here',
	'NONCE_SALT' => 'put your unique phrase here',

	'WP_DEBUG' => false,
] as $key => $val ) {
	if ( !defined($key) )
		@define($key, $val);
}

$table_prefix = isset($table_prefix)
	? $table_prefix
	: 'wp_';

if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
