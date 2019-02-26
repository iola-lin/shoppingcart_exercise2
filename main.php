<?php

require_once("ShoppingCart.php");
require_once("Product.php");

use MandyLin\NewCart\ShoppingCart;
use MandyLin\NewCart\Product;

$cart = new ShoppingCart();

printStatus($cart);

$book = new Product("Your first book of ...", 350);
$bag = new Product("Bag(red)", 880);

$cart->addProduct($book);
$cart->addProduct($bag);

printStatus($cart);

function printStatus($cart)
{
    print "Now price: ".$cart->totalPrice()."\n";
    print "Count of products: ".$cart->totalProducts()."\n";
}