<?php
date_default_timezone_set("Asia/Colombo");

$site_http_path = $_SERVER['REQUEST_SCHEME']."://".$_SERVER['HTTP_HOST']."/esol-college/app/";
$adminpath = $site_http_path."esol-backend/";

define('HTTP_PATH', $site_http_path);
define('DOC_ROOT', 'C:/xampp/htdocs/esol-college/app/');
define('SITE_NAME', 'ESOL College');

define('ADMIN_PATH', $adminpath);
/*define('TAG_LINE', 'The Live Auction');*/

define('COMPANY_ADDRESS', "307 High Level Load, Maharagama, Sri Lanka.");
define('COMPANY_EMAIL', "info@esol.lk");
define('COMPANY_PHONE', "+94 112 088 330");

$CURRENT_PAGE = basename($_SERVER['PHP_SELF']);

header("Cache-Control: no cache");
session_cache_limiter("private_no_expire");

/* Admin e-mails */
$mailArray = array("naflin@esol.lk", "naflin456@gmail.com");
$current_date_time = date('Y-m-d h:i:s');
$current_date = date('Y-m-d');