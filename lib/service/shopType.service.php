<?php

class ShopTypeService {

    private $types = array();

    function __construct() {
        $typeArray = array(
            new ShopType('basegame', 'Basegame'),
            new ShopType('extension', 'Extension'),
            new ShopType('standalone', 'Standalone')
        );

        foreach ($typeArray as $type) {
            $this->types[$type->value] = $type;
        }
    }

    public function getShopTypes() {
        return $this->types;
    }
}

?>