<?php

abstract class Product{

    private int $id;
    private string $picture;
    private string $title;
    private string $info;
    private float $price;

    function __construct(int $id, string $picture, string $title, string $info, float $price){
    
        $this->id = $id;
        $this->picture = $picture;
        $this->title = $title;
        $this->info = $info;
        $this->price = $price;
}

protected function getName(){
    return $this->name;
}

}


