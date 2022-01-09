<?php

class ShopAgeService {

    private $ages = array();

    function __construct() {
        $ageArray = array(
            new ShopAge('1', '+1'),
            new ShopAge('3', '+3'),
            new ShopAge('4', '+4'),
            new ShopAge('5', '+5'),
            new ShopAge('6', '+6'),
            new ShopAge('7', '+7'),
            new ShopAge('8', '+8'),
            new ShopAge('9', '+9'),
            new ShopAge('10', '+10'),
            new ShopAge('12', '+12'),
            new ShopAge('13', '+13'),
            new ShopAge('14', '+14'),
            new ShopAge('15', '+15'),
            new ShopAge('16', '+16'),
            new ShopAge('18', '+18')
        );

        foreach ($ageArray as $age) {
            $this->ages[$age->value] = $age;
        }
    }

    public function getShopAges() {
        return $this->ages;
    }
}

?>