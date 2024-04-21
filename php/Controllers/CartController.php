<?php
namespace App\Controllers;

use Laminas\Diactoros\ServerRequest;
use MiladRahimi\PhpContainer\Container;

use DB\Models\User;

class CartController
{
  public function addCart(ServerRequest $r){
	  $r = json_decode($r->getBody()->getContents());
        $cart = $r->cart;
		if (!isset($cart)) return ["success" => false];
		$_SESSION['cart'][] = $cart[0];
		return ["success" => true];
  }

}