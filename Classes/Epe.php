<?php

require_once ("Product.php");

class Epe extends Product
{

    function __construct(int $id, string $picture, string $title, string $accroche, string $info, float $price){
     
        parent::__construct($id, $picture, $title, $accroche, $info, $price);
    }

}