<?php

class Cart
{
    private array $cartItems = [];

    public function addToCart($item)
    {
        $this->cartItems[] = $item;
    }


    public function printReceipt()
    {
        if (empty($this->cartItems)) {
            echo "Your cart is empty.";
            return;
        }

        $totalPrice = 0;

        foreach ($this->cartItems as $cartItem) {
            $amount = $cartItem['amount'];
            $item = $cartItem['item'];
            $itemName = $item->getName();
            $itemPrice = floatval(preg_replace('/[^0-9.]+/', '', $item->getPrice())); // Extract numeric value from price string

            $totalPrice += $amount * $itemPrice;
            echo "$itemName | $amount | total= " . ($amount * $itemPrice) . " denars <hr>";
        }

        echo "Final price amount: $totalPrice denars <br>";
    }

}