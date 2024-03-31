<?php
class MarketStall
{
    public array $products;

    public function __construct(array $products)
    {
        foreach ($products as $name => $product) {
            if (!is_string($name) || !($product instanceof Product)) {
                throw new InvalidArgumentException("Invalid product provided.");
            }
        }

        $this->products = $products;
    }

    public function addProductToMarket(string $name, Product $product)
    {
        $this->products[$name] = $product;
    }

    public function getItem(string $name, int $amount)
    {
        if (array_key_exists($name, $this->products)) {
            return ['amount' => $amount, 'item' => $this->products[$name]];
        }
        return false;
    }
}