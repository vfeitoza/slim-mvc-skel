<?php

ini_set("display_errors", "On");
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

// Define a path to application directory
defined("APPLICATION_PATH") || define("APPLICATION_PATH", realpath(__DIR__) . "/application");

// Include autoload
require __DIR__ . "/vendor/autoload.php";

// Create Container
$container = new \DI\Container();
\Slim\Factory\AppFactory::setContainer($container);

// Create the app
$app = \Slim\Factory\AppFactory::create();

// Set view in Container
$container->set("view", function($container) {

	// Create smarty view
	$view = new \Slim\Views\Smarty([
		'template_dir' => [__DIR__ . "/templates"],
		'compile_dir' =>  __DIR__ . "/application/tmp/templates_c",

		'cache_dir' =>  __DIR__ . "/application/templates_c",
		'caching' => FALSE,
		'cache_lifetime' => 4600,

		'force_compile' => TRUE,
		'debugging' => FALSE,
		'compile_check' => TRUE,
	]);

	return $view;
});

// Routes
$routes = require(APPLICATION_PATH . "/routes.php");
$container->set("routes", $routes);
foreach($routes as $name => $route) {
	$app->map($route['type'], $route['pattern'], function (\Psr\Http\Message\ServerRequestInterface $request, \Psr\Http\Message\ResponseInterface $response, $args) {

			// Call MVC bootstrap
			$bootstrap = new \Slim\Mvc\Bootstrap($this, $request, $response, $args);

			// Get response from controller
			return $bootstrap->getResponse();
			
		})
		->setName($name);
}

// Run
$app->run();
