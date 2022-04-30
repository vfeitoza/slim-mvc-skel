<?php

return [
	
	'application' => [
		'name' => "Application",
		'location' => dirname(__FILE__) . "/..",
		// 'modules_location' => dirname(__FILE__) . "/../Modules",
	],

	'smarty' => [
		'template_dir' => [
			dirname(__FILE__) . "/../"
		],
		'compile_dir' =>  dirname(__FILE__) . "/../Tmp/templates_c",
		'cache_dir' =>  dirname(__FILE__) . "/../Tmp/templates_c",
		'caching' => FALSE,
		'cache_lifetime' => 4600,
		'force_compile' => TRUE,
		'debugging' => FALSE,
		'compile_check' => TRUE,
	],

	'db' => [
		'enabled' => TRUE,
		'driver' => 'pgsql',
		'host' => "localhost",
		'username' => "postgres",
		'password' => "123mudar",
		'database' => "slim_skel",
		// 'charset' => 'utf8',
		// 'collation' => 'utf8_unicode_ci',
	],
];