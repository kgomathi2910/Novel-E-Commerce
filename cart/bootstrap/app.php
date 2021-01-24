<?php
use Cart\App;
use Slim\Views\Twig;
use Illuminate\Database\Capsule\Manager as Capsule;
session_start();
require __DIR__ . '/../vendor/autoload.php';
$app = new App;
$container = $app->getContainer();
//pull illuminate - eloquent
$capsule = new Capsule;
//setup connection
$capsule->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost',
	'database' => 'cart',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => ''
]);
$capsule->setAsGlobal();
$capsule->bootEloquent(); //can start using models
//doubt
Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('rfkzkjwh9vptdg34');
Braintree_Configuration::publicKey('n7zqzbfjmspc6h7g');
Braintree_Configuration::privateKey('31880d476b56153e6f5231d9a62fed01');
require __DIR__ . '/../app/routes.php';
$app->add(new \Cart\Middleware\ValidationErrorsMiddleware($container->get(Twig::class)));
$app->add(new \Cart\Middleware\OldInputMiddleware($container->get(Twig::class)));