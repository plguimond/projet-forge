<?php

require_once("Product.php");

class Couteau extends Product
{

    function __construct(int $id, string $picture, string $title, string $accroche, string $info, float $price)
    {

        parent::__construct($id, $picture, $title, $accroche, $info, $price);
    }


    public function id(): int
    {
        return $this->getId();
    }
    public function title()
    {
        return $this->getTitle();
    }
    public function picture(): string
    {
        return $this->getPicture();
    }
    public function accroche(): string
    {
        return $this->getAccroche();
    }
    public function info(): string
    {
        return $this->getInfo();
    }
    public function price(): string
    {
        return $this->getPrice();
        
    }
}
