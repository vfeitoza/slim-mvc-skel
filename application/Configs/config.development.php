<?php

return [
	
	'application' => [
		'name' => "Application",
		'location' => dirname(__FILE__) . "/..",
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
];