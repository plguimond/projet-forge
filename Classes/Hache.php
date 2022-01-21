<?php

require_once ("Product.php");

class Hache extends Product
{

    function __construct(int $id, string $name, string $picture, string $title, string $info, float $price){
     
        parent::__construct($id, $name, $picture, $title, $info, $price);
    }
}