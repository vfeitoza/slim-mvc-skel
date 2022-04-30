<?php

namespace Application\Controllers;

class indexController extends \Slim\Mvc\Controller
{

	public function indexAction()
	{
		// $database = $this->getContainer()->get("db");
		$a = \Illuminate\Database\Capsule\Manager::select("SELECT 1");
		var_dump($a);
	}

	public function helloAction()
	{
		$this->view->variable1 = "Hello";
		$this->view->variable2 = "World";
	}
}