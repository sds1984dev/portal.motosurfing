<?
define("BX_USE_MYSQLI", true);
define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "localhost";
// $DBLogin = "motosurf_newmoto";
// $DBPassword = "AwiV70R*AwiV70R*";
// $DBName = "motosurf_newmoto";
$DBLogin = "motosurf_portal";
$DBPassword = "96FdsNaWMSxLqZE";
$DBName = "motosurf_portal";
$DBDebug = false;
$DBDebugToFile = false;

define("BX_COMP_MANAGED_CACHE", true);
define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~(BX_FILE_PERMISSIONS|BX_DIR_PERMISSIONS)&0777);

define("BX_DISABLE_INDEX_PAGE", true);

define("BX_UTF", true);
mb_internal_encoding("UTF-8");

//function getRegion()
//{
//	$arRegions = ['ru', 'uae'];
//	$region = '';
//	foreach ($arRegions as $re){
//		if (strstr($_SERVER['REQUEST_URI'], '/'.$re.'/')){
//			$region = $re;
//		}
//	}
//	if ($region=='') {
//		$region='ru';
//	}
//	return $region;
//}
define(LANGUAGE_ID, 'ru');
?>