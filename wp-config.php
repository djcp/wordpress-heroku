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

define('AUTH_KEY',         'gJuJ:-bl:zMThwj1AmI*z$/:1.Iql<(G|DY;IEKGSkrB;-S8Sa;L1iS_$k3QDq[4');
define('SECURE_AUTH_KEY',  'xT=0nr*?4V_~<H_MC}+v1o|EF*Y]*y`:HN0RM|$to)Q(bM>!>61d>`pq4Pq*&Ur+');
define('LOGGED_IN_KEY',    ':Alnnnm~N2wl0+t?by-~g/-;==%`(u/Pl,h3L!nDc1JShG4V,~y1q qC|=,2WhC)');
define('NONCE_KEY',        '[|FP<4wdx,xIC<i=}+=V*jYyW{qV{tmT1i0FH<e0P7_cbvh]4}p|^[/B06yLtNI|');
define('AUTH_SALT',        'E1lNv[/<Ak^}/e785xX6^r]-+.S(6`n|ESMHDfi?Lrk-etfZI%r]_ MaHs9_=:bs');
define('SECURE_AUTH_SALT', '--16X~nDK}J5zEj#6s<;6S</ZI++]a7n_qY{SC1J4*EWr^b(r1Sd+V+Z2p~Z#}3C');
define('LOGGED_IN_SALT',   '?{Y*l3nRqO-50O~[jNm&(a(aS$>Hs,d~q!t_oEd1yp3`5k+S(mP[U,oL6fvT%9^f');
define('NONCE_SALT',       '(=mGtHIbbW,k`5<XGTO4gl0^Yk7_&$=kCh4<+j)1Z7EWH|5.(_c4_a,zF&h3eu1Z');

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] );

$table_prefix  = 'wp_';

define('WPLANG', '');
define('WP_DEBUG', false);

if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
