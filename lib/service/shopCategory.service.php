<?php

class ShopCategoryService {

    private $categories = array();

    function __construct() {
        $categoryArray = array(
            new ShopCategory('casseTete', 'Casse-tête'),
            new ShopCategory('cooperatif', 'Coopératif'),
            new ShopCategory('draft', 'Draft'),
            new ShopCategory('escapeGame', 'Escape Game'),
            new ShopCategory('jeuDeux', 'Jeu à deux'),
            new ShopCategory('jeuAdresse', 'Jeu d\'adresse'),
            new ShopCategory('jeuAmbiance', 'Jeu d\'ambiance'),
            new ShopCategory('jeuCartes', 'Jeu de cartes'),
            new ShopCategory('JeuConnaissances', 'Jeu de connaissances'),
            new ShopCategory('jeuDes', 'Jeu de dés'),
            new ShopCategory('jeuLogique', 'Jeu de logique'),
            new ShopCategory('jeuPlateau', 'Jeu de plateau'),
            new ShopCategory('jeuTuiles', 'Jeu de tuiles'),
            new ShopCategory('jeuEnquete', 'Jeu d\'enquête'),
            new ShopCategory('jeuEducatif', 'Jeu éducatif'),
            new ShopCategory('jeuBois', 'Jeu en bois'),
            new ShopCategory('printPlay', 'Print &amp; Play'),
            new ShopCategory('rollWrite', 'Roll &amp; Write')
        );

        foreach ($categoryArray as $category) {
            $this->categories[$category->value] = $category;
        }
    }

    public function getShopCategories() {
        return $this->categories;
    }
}

?>