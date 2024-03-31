<?php

//require_once ("Printable.php");
//class Product implements Printable
//{
//    private string $name;
//
//    private float $price;
//
//    private bool $sellingByKg;
//
//    public function __construct(string $name, float $price, bool $sellingByKg)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->sellingByKg = $sellingByKg;
//    }
//
//    public function getPrice()
//    {
//        if ($this->sellingByKg) {
//            return $this->price . 'per kg';
//        } else {
//            return $this->price . 'per sack';
//        }
//    }
//
//
//}
//
//$product1 = new Product('kafe' , 10.2 , 1000);
//$product1->print();


class Product
{
    private string $name;
    private float $price;
    private bool $sellingByKg;

    public function __construct(string $name, float $price, bool $sellingByKg)
    {
        $this->name = $name;
        $this->price = $price;
        $this->sellingByKg = $sellingByKg;
    }

    public function getPrice()
    {
        if ($this->sellingByKg) {
            return $this->price . ' per kg';
        } else {
            return $this->price . ' per sack';
        }
    }

    public function getName()
    {
        return $this->name;
    }
}

