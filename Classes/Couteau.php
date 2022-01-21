<?php

require_once ("Product.php");

class Couteau extends Product
{

    function __construct(int $id, string $picture, string $title, string $info, float $price){
     
        parent::__construct($id, $picture, $title, $info, $price);
    }


    public function name(){
        return $this->getName();
    }
}

