<?php
use function DI\get;
use Slim\Views\Twig;
use Cart\Basket\Basket;
use Cart\Models\Product;
use Cart\Models\Payment;
use Slim\Views\TwigExtension;
use Interop\Container\ContainerInterface;
use Slim\Interfaces\RouterInterface; //this is the extra
use Cart\Support\Storage\SessionStorage;
use Cart\Support\Storage\Contracts\StorageInterface;
use Cart\Validation\Contracts\ValidatorInterface;
use Cart\Validation\Validator;
use Cart\Models\Order;
use Cart\Models\Customer;
use Cart\Models\Address;

return [
	//'router' => get(Slim\Router::class), - original
	RouterInterface::class => function (ContainerInterface $container) { return $container->get('router'); },
	//https://github.com/fabriceyopa/slim-laravel/issues/1 correction
	ValidatorInterface::class => function(ContainerInterface $c) {
		return new Validator;
	},
	StorageInterface::class => function (ContainerInterface $c) {
		return new SessionStorage('cart');
	},
	Twig::class => function(ContainerInterface $c) {
		$twig = new Twig(__DIR__ . '/../resources/views', [
			'cache' => false
		]); //boot up twig - since its not deployed in actual server cache=false
		$twig->addExtension(new TwigExtension(
			$c->get('router'),
			$c->get('request')->getUri()
		));
		$twig->getEnvironment()->addGlobal('basket', $c->get(Basket::class));
		return $twig;
	},
	//this will be injected in HomeController.php
	Product::class => function (ContainerInterface $c) {
		return new Product;
	},
	Order::class => function(ContainerInterface $c) {
		return new Order;
	},
	Customer::class => function(ContainerInterface $c) {
		return new Customer;
	},
	Address::class => function(ContainerInterface $c) {
		return new Address;
	},
	Payment::class => function(ContainerInterface $c) {
		return new Payment;
	},
	//create container for cart/basket
	Basket::class => function(ContainerInterface $c) {
		return new Basket(
			$c->get(SessionStorage::class),
			$c->get(Product::class)
		);
	}
];