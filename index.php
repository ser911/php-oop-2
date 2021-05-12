<?php
//attributi
class product{
private $item;
public $price;
public $brand;
public $color;

//costruttore
public function __construct($_item,$_price,$_brand,$_color){
$this->item = $_item;
$this->price = $_price;
$this->brand = $_brand;
$this->color = $_color;

}
//metodi

    public function setItem($_item){
        if (strlen($_item) > 3){
        $this->item = $_item;
    }

  }

}
$product_1 = new Product("Screen","240","Lenovo","Dark-grey");

$product_2 = new Product("Keyboard","90","Samsung","White");

$product_3 = new Product("Optical mouse","65","Toshiba","Black");


var_dump($product_1);
var_dump($product_2);
var_dump($product_3);

