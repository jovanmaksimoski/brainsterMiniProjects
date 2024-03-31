<?php

require_once ("Product.php");
require_once ("MarketStall.php");
require_once ("Cart.php");


// Create products
$orange = new Product('Orange', 35, true);
$potato = new Product('Potato', 240, false);
$nuts = new Product('Nuts', 850, true);
$kiwi = new Product('Kiwi', 670, false);
$pepper = new Product('Pepper', 330, true);
$raspberry = new Product('Raspberry', 555, false);

// Create market stalls
$marketStall1 = new MarketStall(['orange' => $orange, 'potato' => $potato, 'nuts' => $nuts]);
$marketStall2 = new MarketStall(['kiwi' => $kiwi, 'pepper' => $pepper, 'raspberry' => $raspberry]);

// Add some products to the shopping cart
$cart = new Cart();
$cart->addToCart($marketStall1->getItem('orange', 3));
$cart->addToCart($marketStall1->getItem('potato', 1));
$cart->addToCart($marketStall2->getItem('raspberry', 2));
$cart->addToCart($marketStall2->getItem('raspberry', 2));
$cart->addToCart($marketStall2->getItem('raspberry', 2));
$cart->addToCart($marketStall2->getItem('raspberry', 2));

// Print receipt
$cart->printReceipt();


