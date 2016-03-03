<?php
require_once __DIR__."/medoo.php";
$database = new medoo([
	// required
	'database_type' => 'mysql',
	'database_name' => 'login04pages',
	'server' => 'localhost',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
]);?>
