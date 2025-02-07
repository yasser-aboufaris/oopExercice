<?php


class Vehicle {
    private string $model;
    private string $brand;
    private string $category;


    public function __construct(string $model, string $brand, string $category) {
        $this->model = $model;
        $this->brand = $brand;
        $this->category = $category;
    }


    public function displayInfo(): void {
        echo "Model: {$this->model}, Brand: {$this->brand}, Category: {$this->category}";
    }
}

$mercedes = new Vehicle("AMG_GT", "Mercedes-Benz", "Sports Car");
$mercedes->displayInfo();

echo "\n";

class Motorcycle extends Vehicle {

    public function displayInfo(): void {
        parent::displayInfo();
        echo " (This is a motorcycle.)";
    }


    public static function describe(): void {
        echo "A motorcycle is a two-wheeled motor vehicle.";
    }
}

$motorcycle = new Motorcycle("Ninja ZX-10R", "Kawasaki", "Sport Bike");
$motorcycle->displayInfo();


Motorcycle::describe();