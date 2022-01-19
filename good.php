<?php

class Good
{
    public $goodTitle;
    public $goodPrice;

    function __construct($title, $price)
    {
        $this->goodTitle = $title;
        $this->goodPrice = $price;
    }

    function getDiscount($discount)
    {
        return $this->goodPrice - $discount;
    }
}

//$good = new Good("Товар//", 1500);
//$goodDiscount = $good->getDiscount(500);
//echo "{$good->goodTitle} стоит {$good->goodPrice}, но со скидкой {$goodDiscount}";
