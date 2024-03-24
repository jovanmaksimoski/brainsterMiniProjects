<?php


class Furniture
{
    private int $width;
    private int $length;
    private int $height;
    private string $is_for_seating;
    private string $is_for_sleeping;

    public function __construct(int $width, int $length, int $height)
    {
        $this->width = $width;
        $this->length = $length;
        $this->height = $height;
        $this->is_for_seating = false;
        $this->is_for_sleeping = false;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }


    public function getIsForSeating(): string
    {
        return $this->is_for_seating;
    }

    public function getIsForSleeping(): string
    {
        return $this->is_for_sleeping;
    }


    public function setIsForSeating(string $is_for_seating): void
    {
        $this->is_for_seating = $is_for_seating;
    }


    public function setIsForSleeping(string $is_for_sleeping): void
    {
        $this->is_for_sleeping = $is_for_sleeping;
    }

    public function area(): int
    {
        return $this->width * $this->length;
    }

    public function volume(): int
    {
        return $this->area() * $this->height;
    }


}

$furniture = new Furniture(5, 4, 3);

$furniture->setIsForSeating(true);
$furniture->setIsForSleeping(false);

echo "Is for seating: " . ($furniture->getIsForSeating() ? "Yes" : "No") . "<br>";
echo "Is for sleeping: " . ($furniture->getIsForSleeping() ? "Yes" : "No") . "<br>";


echo "Area: " . $furniture->area() . "<br>";
echo "Volume: " . $furniture->volume() . "<br>";

echo "<hr>";