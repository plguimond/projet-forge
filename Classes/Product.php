<?php

abstract class Product{

    private int $id;
    private string $name;
    private string $picture;
    private string $title;
    private array $info;

    function __construct(int $id, string $name, string $picture, string $title, array $info){
    
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
        $this->title = $title;
        $this->info = [];

}
}