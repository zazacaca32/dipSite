<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

require __DIR__.'/../vendor/autoload.php';

use DB\Connection;
use App\Controllers\AuthController;
use App\Controllers\FormsController;
use App\Controllers\CartController;
use eftec\bladeone\BladeOne;
use MiladRahimi\PhpRouter\Router;
use MiladRahimi\PhpRouter\Exceptions\RouteNotFoundException;

use Laminas\Diactoros\Response\HtmlResponse;
use Laminas\Diactoros\Response\RedirectResponse;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

new Connection(); //
session_start();


$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../compiles';
$blade = new BladeOne($views,$cache,BladeOne::MODE_DEBUG);

if (isset($_SESSION['user_id']) && $_SESSION['user_id']){
	$blade->setAuth($_SESSION['name'],'user');
}



$router = Router::create();

$router->getContainer()->singleton("blade", $blade);

$router->get('/', function () use ($blade) {
    return $blade->run("index");
});

$router->get('/obshchegrazhdanskie_dela', function () use ($blade) {
    return $blade->run("obshchegrazhdanskie_dela");
});

$router->get('/arbitrazh', function () use ($blade) {
    return $blade->run("arbitrazh");
});

$router->get('/srochnyj_vyzov_yurista', function () use ($blade) {
    return $blade->run("srochnyj_vyzov_yurista");
});

$router->get('/buhgalteriya', function () use ($blade) {
    return $blade->run("buhgalteriya");
});

$router->get('/kontakty', function () use ($blade) {
    return $blade->run("kontakty");
});

$router->get('/cart', function () use ($blade) {
	$cart = [];
	if (isset($_SESSION['cart']) && $_SESSION['cart']){
		$cart = $_SESSION['cart'];
	}
    return $blade->run("cart", ["cart"=> $cart]);
});

$router->get('/removeCart/{id}', function ($id) use ($blade) {
	if (isset($_SESSION['cart']) && $_SESSION['cart']){
		unset($_SESSION['cart'][$id]);
	}
    header('location: /cart');exit;
});

$router->get('/register', [AuthController::class, 'registerView']);
$router->get('/login', [AuthController::class, 'loginView']);

$router->post('/register', [AuthController::class, 'register']);
$router->post('/login', [AuthController::class, 'login']);

$router->post('/tg', [FormsController::class, 'sendToTg']);

$router->post('/addCart', [CartController::class, 'addCart']);


try {
    $router->dispatch();
} catch (RouteNotFoundException $e) {
    // It's 404!
    $router->getPublisher()->publish(new HtmlResponse('Not found.', 404));
} catch (Throwable $e) {
    // Log and report...
    $router->getPublisher()->publish(new HtmlResponse('Internal error. '.var_export($e), 500));
}