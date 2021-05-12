<?php

class product{
private $item;
public $price;
public $brand;
public $color;

public function setItem($_item){
    if (strlen($_item) > 3 ){
        $this->item = $_item;
}
}

$product_1 = new Product();

$product_1 ->setItem("Screen");
$product_1 -> price = "240";
$product_1 -> brand = "Lenovo";
$product_1 -> color = "Dark-grey";


$product_2 = new Product();
$product_2 ->setItem("Keyboard");
$product_2 -> price = "90";
$product_2 -> brand = "Samsung";
$product_2 -> color = "White";


$product_3 = new Product();
$product_3 ->setItem("Optical mouse");
$product_3 -> price = "65";
$product_3 -> brand = "Toshiba";
$product_3 -> color = "Black";

var_dump($product_1);
var_dump($product_2);
var_dump($product_3);

