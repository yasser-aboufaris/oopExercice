<?php


class Vehicule {
    private $model;
    private $brand;
    private $categorie;

    public function __construct($model,$brand,$categorie){
        $this->model=$model;
        $this->brand=$brand;
        $this->categorie=$categorie;
    }



    public function call (){
        echo "my name is {$this->model} my brand is {$this->brand} my categorie is {$this->categorie}";
    }
}

$mercedes = new vehicule ("AMG_GT","Mercedes-Benz","Sports Car");
$mercedes->call();


class Moto extends Vehicule{
    public static function moto (){
        echo "moto";
    }
    
    final public function moto(){
        echo"im just a moto";
    }
}