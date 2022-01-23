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


protected function getId():string
{
    return $this->id;
}

protected function getTitle():string
{
    return $this->title;
}
protected function getPicture():string
{
    return $this->picture;
}
protected function getAccroche():string
{
    return $this->accroche;
}
protected function getInfo():string
{
    return $this->info;
}
protected function getPrice():string
{
    return $this->price;
}

}


