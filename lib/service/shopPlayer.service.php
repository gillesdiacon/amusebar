<?php

class ShopPlayerService {

    private $players = array();

    function __construct() {
        $playerArray = array(
            new ShopPlayer('1', '1'),
            new ShopPlayer('2', '2'),
            new ShopPlayer('3', '3'),
            new ShopPlayer('4', '4'),
            new ShopPlayer('5', '5'),
            new ShopPlayer('6', '6'),
            new ShopPlayer('7', '7'),
            new ShopPlayer('8', '8'),
            new ShopPlayer('9', '9')
        );

        foreach ($playerArray as $players) {
            $this->players[$players->value] = $players;
        }
    }

    public function getShopPlayers() {
        return $this->players;
    }
}

?>