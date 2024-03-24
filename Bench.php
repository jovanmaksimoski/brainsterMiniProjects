<?php
require_once "Printable.php";
require_once "Sofa.php";


class Bench extends Sofa implements Printable
{
    public function __construct(int $width, int $length, int $height, int $seats, int $armrests, int $length_opened)
    {
        parent::__construct($width, $length, $height, $seats, $armrests, $length_opened);
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

$bench = new Bench(120, 50, 80, 2, 2, 0);


echo "<div style='color:red'>Bench details:</div>\n";
$bench->print();
$bench->sneakpeek();
$bench->fullinfo();
echo "<hr>";
