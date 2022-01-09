<?php

class ShopThemeService {

    private $themes = array();

    function __construct() {
        $themeArray = array(
            new ShopTheme('adulte', 'Adulte'),
            new ShopTheme('americeSud', 'Amérique du sud'),
            new ShopTheme('animaux', 'Animaux'),
            new ShopTheme('antiquite', 'Antiquité'),
            new ShopTheme('archeologie', 'Archéologie'),
            new ShopTheme('arts', 'Arts'),
            new ShopTheme('asie', 'Asie'),
            new ShopTheme('civilisation', 'Civilisation'),
            new ShopTheme('commerce', 'Commerce'),
            new ShopTheme('course', 'Course'),
            new ShopTheme('cuisine', 'Cuisine'),
            new ShopTheme('disney', 'Disney'),
            new ShopTheme('espace', 'Espace'),
            new ShopTheme('exploration', 'Exploration'),
            new ShopTheme('fantastique', 'Fantastique'),
            new ShopTheme('halloween', 'Halloween'),
            new ShopTheme('histoire', 'Histoire'),
            new ShopTheme('humour', 'Humour'),
            new ShopTheme('lesIles', 'Les îles'),
            new ShopTheme('moyenOrient', 'Moyen-Orient'),
            new ShopTheme('nature', 'Nature'),
            new ShopTheme('ocean', 'Océan'),
            new ShopTheme('postApocalyptique', 'Post-apocalyptique'),
            new ShopTheme('sport', 'Sport'),
            new ShopTheme('survie', 'Survie'),
            new ShopTheme('transports', 'Transports'),
            new ShopTheme('ville', 'Ville'),
            new ShopTheme('western', 'Western')
        );

        foreach ($themeArray as $theme) {
            $this->themes[$theme->value] = $theme;
        }
    }

    public function getShopThemes() {
        return $this->themes;
    }
}

?>