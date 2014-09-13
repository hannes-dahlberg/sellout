<?php
date_default_timezone_set('Australia/Melbourne');

include_once('../repos/dw/invoke.php'); //Include the dw library
include_once('aliases.php'); //Creating aliases for popular functions
include_once('secret/db_connection.php'); //Connection to the MySQL db

//Configs
$server_address = 'http://sellout.drmard.com';
$server_root = __DIR__;

dw\Core::SetMySQLConnection($mysql_connection);
dw\Core::SetAdmin(true);

$main_menu = [
	['name' => 'sellout.create', 'title' => __('menu_title_create')],
	['name' => 'sellout.find', 'title' => __('menu_title_find')],
	['name' => 'info.about', 'title' => __('menu_title_about')]
];

//dw\Core::AddLanguageVariable('menu_title_create', 'Create');
//dw\Core::AddLanguageVariable('menu_title_find', 'Find');
//dw\Core::AddLanguageVariable('menu_title_about', 'About');
//dw\Core::AddLanguageVariable('account_menu_title', 'Account');

if(isset($_GET['dispatch'])) {
	$controller = strtolower(substr($_GET['dispatch'], 0, strpos($_GET['dispatch'], '.')));
	$mode = strtolower(substr($_GET['dispatch'], (strpos($_GET['dispatch'], '.') + 1), strlen($_GET['dispatch'])));
}