<?php


return [

	// test route
	'test' => [
		'pattern' => "/hello",
		'type' => ['GET'],
		'defaults' => [
			'controller' => "index",
			'action' => "hello",
		],
	],
	
	// default route
	'default' => [
		'pattern' => "/[{controller}[/{action}[/{params:.*}]]]",
		'type' => ['GET'],
		'defaults' => [
			'controller' => "index",
			'action' => "index",
		],
	],

];