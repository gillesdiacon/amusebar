<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Cuisine";
            $activeMenuPage = "catering";
            require_once("head.php");
        ?>
    </head>
    <body>

        <div class="fixed-bottom d-none d-lg-block">
            <div class="row p-5">
                <div class="col-lg-3">
                    <img src="image/punchline/punchline-catering.svg" alt="L'Amuse-Bar, le bar qui ravit vos papilles et enchante votre palais" />
                </div>
            </div>
        </div>

        <div id="events" class="min-vh-100" style="background-image: url('image/bg/catering-filtre.png'); background-size: cover">
            <?php
            require_once("nav.php");
            ?>
            <div id="events" class="pb-4 px-lg-4 container-fluid">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                    <div class="col amuseBar-bg-cream mx-lg-5 px-4">
                        <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>

                        <p>Notre carte de petite restauration vous propose des mets faits maison à partir de produits du terroir.
                            Nous avons à coeur de respecter le cycle des saisons et de favoriser le plus possible la production suisse et locale.
                            C'est pourquoi, nous avons testé pour vous différents produits pour sélectionner les meilleurs et les plus originaux.<br />
                            Pour que chacun puisse avoir un plaisir gustatif, des recettes véganes vous seront également proposées.</p>
                        <a target="_blank" href="catering/restaurationJanvier2023.pdf">
                            <img src="image/food.png" height="50px" /> <!-- https://fontawesome.com/icons/user-chef?s=thin&f=classic -->
                            <span>Carte restauration</span>
                        </a>

                        <p class="mt-5">Au niveau de la carte des boissons, nous avons privilégié des bières artisanales, des cocktails originaux et des limonades et boissons maisons.</p>
                        <a target="_blank" href="catering/boissonsJanvier2023.pdf">
                            <img src="image/drink.png" height="50px" /> <!-- https://fontawesome.com/icons/glass-water?s=thin&f=classic -->
                            <span>Carte boissons</span>
                        </a>

                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
