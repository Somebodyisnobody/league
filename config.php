<?php

$webroot = 'D:/www/league2/';
//$webroot = '/is/htdocs/wp1144497_5BDDWAFPQY/openclonk/league/';

// MwfAuth path
require_once($_SERVER['DOCUMENT_ROOT'].'/../auth/mwf_auth.php');

require_once('smarty/libs/SmartyBC.class.php');
$smarty = new SmartyBC();

$smarty->template_dir = $webroot.'template/';
$smarty->compile_dir = $webroot.'template_c/';
$smarty->cache_dir = $webroot.'cache/';
$smarty->config_dir = $webroot.'configs/';
// Always disable notices for templates as there are just too many to be useful.
$smarty->error_reporting = error_reporting() ^ E_NOTICE;

$record_folder = $webroot."records/";

unset($webroot);

//$database = new database('127.0.0.1','db1144497-league',geheim,geheim);
$database = new database('127.0.0.1','league2','CC67eWMqKcsHJ8UG','league2');

// Redis as an alternative to apc for flood protection.
//require 'Predis/Autoloader.php';
//Predis\Autoloader::register();
//$redis = new Predis\Client();

$debug = FALSE;
$debug_xml_log = FALSE;
$debug_sql_slow_log = FALSE;
$debug_skip_backend_checksum = TRUE;
$debug_skip_flood_protection = TRUE;
$debug_skip_resource_checksum = TRUE;

$cfg_official_server = array('1.2.3.4','1.2.3.4');
$cfg_settle_on_official_server_only = false;
$cfg_settle_with_latest_engine_only = false;

$cronjob_password = '';

// Name of the mwf login cookie.
$mwf_cookie = NULL;

//$smarty->assign("helplink",'http://wiki.openclonk.org/w/FAQ');
?>
