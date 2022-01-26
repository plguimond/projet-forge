<?php

abstract class Product{

    private int $id;
    private string $picture;
    private string $title;
    private string $accroche;
    private string $info;
    private float $price;

    function __construct(int $id, string $picture, string $title, string $accroche, string $info, float $price){
    
        $this->id = $id;
        $this->picture = $picture;
        $this->title = $title;
        $this->accroche = $accroche;
        $this->info = $info;
        $this->price = $price;
}


public function getId():int
{
    return $this->id;
}

public function getTitle():string
{
    return $this->title;
}
public function getPicture():string
{
    return $this->picture;
}
public function getAccroche():string
{
    return $this->accroche;
}
public function getInfo():string
{
    return $this->info;
}
public function getPrice():float
{
    return $this->price;
}

}


