<?php

class ShopDurationService {

    private $durations = array();

    function __construct() {
        $durationArray = array(
            new ShopDuration('10', '10 min'),
            new ShopDuration('15', '15 min'),
            new ShopDuration('20', '20 min'),
            new ShopDuration('25', '25 min'),
            new ShopDuration('30', '30 min'),
            new ShopDuration('45', '45 min'),
            new ShopDuration('60', '60 min'),
            new ShopDuration('90', '1h30'),
            new ShopDuration('120', '2h'),
            new ShopDuration('180', '3h'),
            new ShopDuration('240', '4h'),
            new ShopDuration('480', '8h')
        );

        foreach ($durationArray as $duration) {
            $this->durations[$duration->value] = $duration;
        }
    }

    public function getShopDurations() {
        return $this->durations;
    }
}

?>