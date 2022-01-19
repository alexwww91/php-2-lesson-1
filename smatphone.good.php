<?php
include "good.php";

class Smartphone extends Good
{
    public $smartphoneDiagonal;
    private $smartphoneFixDiscount = 50;
    public function __construct($title, $price, $diagonal)
    {
        parent::__construct($title, $price);
        $this->smartphoneDiagonal = $diagonal;
    }

    public function getDiscount($discount)
    {
        return parent::getDiscount($discount) - $this->smartphoneFixDiscount;
    }
}

$smartphone = new Smartphone("Смартфон", 5400, 6);
$smartphoneDiscount = $smartphone->getDiscount(400);
echo "{$smartphone->goodTitle} с диагональю {$smartphone->smartphoneDiagonal} стоит {$smartphone->goodPrice}, но со скидкой {$smartphoneDiscount}";
