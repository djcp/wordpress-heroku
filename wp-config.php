<?php
if (isset($_SERVER["CLEARDB_DATABASE_URL"])) {
  $db = parse_url($_SERVER["CLEARDB_DATABASE_URL"]);
  define("DB_NAME", trim($db["path"],"/"));
  define("DB_USER", $db["user"]);
  define("DB_PASSWORD", $db["pass"]);
  define("DB_HOST", $db["host"]);
} else {
  die("Your heroku CLEARDB_DATABASE_URL does not appear to be correctly specified.");
}

define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$key_array = array(
  'AUTH_KEY', 'SECURE_AUTH_KEY', 'LOGGED_IN_KEY', 'NONCE_KEY','AUTH_SALT',
  'SECURE_AUTH_SALT','LOGGED_IN_SALT','NONCE_SALT'
);

foreach($key_array as $value){
  define($value, $_SERVER['WP_' . $value]);
}

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
