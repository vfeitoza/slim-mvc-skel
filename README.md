<!-- [![License](http://poser.pugx.org/scorninpc/slim-mvc-skel/license)](https://packagist.org/packages/scorninpc/slim-mvc-skel) -->
[![Version](http://poser.pugx.org/scorninpc/slim-mvc-skel/version?style=flat-square)](https://packagist.org/packages/scorninpc/slim-mvc-skel)
[![Total Downloads](http://poser.pugx.org/scorninpc/slim-mvc/downloads?style=flat-square)](https://packagist.org/packages/scorninpc/slim-mvc-skel)
![GitHub](https://img.shields.io/github/license/scorninpc/slim-mvc-skel)
![GitHub issues](https://img.shields.io/github/issues-raw/scorninpc/slim-mvc-skel)

# Slim MVC Skell with Smarty template engine

This is pure slim framework 4 with Smarty template engine skeleton. This project is only a index.php and directory structure to get templates from pre-defined locations based on controller/action

## Built With

I could not have created this skeleton without the following contributions:

* [Slim Framework](https://github.com/slimphp/Slim)
* [Smarty](https://github.com/smarty-php/smarty)
* [Slim Smarty View](https://github.com/scorninpc/slim-smarty-view)
* [Slim MVC](https://github.com/scorninpc/slim-mvc)
* [Composer](https://github.com/composer/composer)

## Installation

Just clone this repository, and download dependencies with composer

```
$ git clone https://github.com/scorninpc/slim-mvc-skel.git mywebsite.com.br
$ cd mywebsite.com.br
$ composer update
$ php -S localhost:8080
```

This commands will:
- download this repository;
- update dependencies, like slim and smarty;
- create auload
- start php build-in server

## Getting Started

To create a new page, you need:

- create a new route
- create or use a existing controller
- create a action
- create the template file

#### Routes

Routes are located on application/configs/routes.php files. This structure are simple:

```php
'test' => [                             // Name of route
	'pattern' => "/hello[/{somevar}]",  // URL
	'type' => ['GET'],                  // Type
	'defaults' => [
		'module' => "main",             // Controller
		'controller' => "index",        // Controller
		'action' => "hello",            // Action
		'somevar' => 1                  // Some parameter, default if not passed on url
	],
],
```

#### Controllers

Now you need to create the controller, located on Controller directory of the module. The pattern are create with `nameController.php`, like `productsController.php` or `pagesController.php` 
The class must extends `\Slim\Mvc\Controller` to provide the view and create location of template files

#### Actions

With controller on hands, now its time to create the action, who will trigged on page access. When user access the route, the skel will call `nameController::nameAction()` method. So, if you have a route that call products controller, and details action, the skel will trigger `productsController::detailsAction()`

In that example, your controller will be something like:

```php
<?php

namespace Application\Main\Controllers;

class productsController extends \Slim\Mvc\Controller
{

	public function detailsAction()
	{
		
	}
}
```

#### Views

This skel will use the pattern ControllerName + ActionName to create a path of template file, located on `Views` directory. So on the example above, you will create the file `application/modules/Main/Views/products/details.tpl` to store your HTML of this page, who will added to `application/modules/Main/Views/layouts/template.tpl` layout content.

#### Modules

Now this skell use modules as default, but if you want to remove modules, change routes to remove `modules` variable from routes. Something like:

```php
'test' => [                                     // Name of route
	'pattern' => "/hello[/{somevar}]",      // URL
	'type' => ['GET'],                      // Type
	'defaults' => [
		//'module' => "main",           // Module
		'controller' => "index",        // Controller
		'action' => "hello",            // Action
		'somevar' => 1                  // Some parameter, default if not passed on url
	],
],
```

And need to remove module directory folder from `application/configs/config.development.php`. Something like:

```php
	'application' => [
		'name' => "Application",
		'location' => dirname(__FILE__) . "/..",
		// 'modules_location' => dirname(__FILE__) . "/../modules",
	],
```

Now you need to change `composer.json`` to change directory of your classes:

```json
	"autoload": {
        "psr-4": {
            "Application\\": "application/"
        }
    }
```

This will look for controller in `application/Controllers/indexController.php`, action `helloAction()`, and will look for template in `application/Views/index/hello.tpl`

## Contributing

If you want to help, just use it. Use issues tab to recommend anything that can help, like some config, some library like database, or anything usefull

## Authors

* [Bruno Pitteli Gonçalves](https://github.com/scorninpc)

## Credits

I cannot forget to thanks Slim equip, to provide some fast, minimalist and cute framework, and Smarty community for the better template enginer created

## License

This use GNU v3.0. This permissions are strong copyleft license and are conditioned on making available complete source code of licensed works and modifications, which include larger works using a licensed work, under the same license. Copyright and license notices must be preserved. Contributors provide an express grant of patent rights.

**But if you use this skel to make money, please lets the 1% giveaway for devs like me, or slim, or smarty. Dont forget that are alot people making stuffs for free, to you make money**
