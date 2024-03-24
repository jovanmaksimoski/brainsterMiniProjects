<?php

require_once "Furniture.php";
require_once "Printable.php";


class Chair extends Furniture implements Printable
{

    public function __construct(int $width, int $length, int $height)
    {
        parent::__construct($width, $length, $height);
    }

    public function print(): void
    {
        $className = get_class($this);
        $sleepingStatus = $this->getIsForSleeping() ? "sleeping" : "sitting only";
        echo "$className, $sleepingStatus, {$this->area()}cm2\n";
    }

    public function sneakpeek(): void
    {
        echo get_class($this) . "\n";
    }

    public function fullInfo(): void
    {
        $className = get_class($this);
        $sleepingStatus = $this->getIsForSleeping() ? "sleeping" : "sitting only";
        echo "<div style='color:yellowgreen'>$className, $sleepingStatus, {$this->area()}cm2, width: {$this->getWidth()}cm, length: {$this->getLength()}cm, height: {$this->getHeight()}cm\n</div>";
    }


}


$chair = new Chair(40, 40, 90);


echo "\n<div style='color:red'>Chair details:</div>\n";
$chair->print();
$chair->sneakpeek();
$chair->fullinfo();
echo "<hr>";
