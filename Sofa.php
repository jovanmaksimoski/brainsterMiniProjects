<?php
require_once "Furniture.php";

class Sofa extends Furniture
{
    private int $seats;
    private int $armrests;
    private int $length_opened;

    public function __construct(int $width, int $length, int $height, int $seats, int $armrests, int $length_opened)
    {
        parent::__construct($width, $length, $height);
        $this->seats = $seats;
        $this->armrests = $armrests;
        $this->length_opened = $length_opened;
    }

    public function getSeats(): int
    {
        return $this->seats;
    }

    public function getArmrests(): int
    {
        return $this->armrests;
    }

    public function getLengthOpened(): int
    {
        return $this->length_opened;
    }

    public function setSeats(int $seats): void
    {
        $this->seats = $seats;
    }

    public function setArmrests(int $armrests): void
    {
        $this->armrests = $armrests;
    }

    public function setLengthOpened(int $length_opened): void
    {
        $this->length_opened = $length_opened;
    }

    public function area_opened(): string
    {
        if ($this->getIsForSleeping()) {

            return $this->getWidth() * $this->getLength();
        } else {

            return "This sofa is for sitting only, it has {$this->armrests} armrests and {$this->seats} seats.";
        }
    }

}

$sofa = new Sofa(100, 200, 50, 3, 2, 150);


$sofa->setIsForSeating(true);
$sofa->setIsForSleeping(false);


echo "Is for seating: " . ($sofa->getIsForSeating() ? "Yes" : "No") . "<br>";
echo "Is for sleeping: " . ($sofa->getIsForSleeping() ? "Yes" : "No") . "<br>";


echo "Area: " . $sofa->area() . "<br>";
echo "Volume: " . $sofa->volume() . "<br>";
echo "Area opened: " . $sofa->area_opened() . "<br>";


$sofa->setIsForSleeping(true);
$sofa->setLengthOpened(200);


echo "Is for seating: " . ($sofa->getIsForSeating() ? "Yes" : "No") . "<br>";
echo "Is for sleeping: " . ($sofa->getIsForSleeping() ? "Yes" : "No") . "<br>";


echo "Area opened: " . $sofa->area_opened() . "<br>";

echo "<hr>";
