<?php


return [

	// test route
	'test' => [
		'pattern' => "/hello",
		'type' => ['GET'],
		'defaults' => [
			// 'module' => "main",
			'controller' => "index",
			'action' => "hello",
		],
	],
	
	// default route
	'default' => [
		'pattern' => "/[{controller}[/{action}[/{params:.*}]]]",
		'type' => ['GET'],
		'defaults' => [
			// 'module' => "main",
			'controller' => "index",
			'action' => "index",
		],
	],

];