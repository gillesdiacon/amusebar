<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Resto";
            $activeMenuPage = "catering";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div class="fixed-bottom d-none d-lg-block">
            <div class="row p-5">
                <div class="col-lg-3">
                    <img src="image/punchline/punchline-catering.svg" />
                </div>
            </div>
        </div>

        <div id="events" class="pt-6 min-vh-100 container-fluid" style="background-image: url('image/bg/catering-filtre.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col amuseBar-bg-cream mx-5 my-3 px-4">
                    <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>

                    <p>Notre carte de petite restauration vous propose des mets faits maison à partir de produits du terroir.
                        Nous avons à coeur de respecter le cycle des saisons et de favoriser le plus possible la production suisse et locale.
                        C'est pourquoi, nous avons testé pour vous différents produits pour sélectionner les meilleurs et les plus originaux.<br />
                        Nous avons également à coeur que chacun puisse avoir un plaisir gustatif, c'est pourquoi, des recettes véganes vous seront proposées également.</p>

                    <p>Au niveau de la carte des boissons, nous avons privilégié des bières artisanales, des cocktails originaux et des limonades et boissons maisons.</p>

                    <div class="row mt-4">
                        <div class="col">
                            <div class="border border-3 border-info d-flex align-items-center justify-content-center" style="height: 400px">
                                Image avec la liste des boissons
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="border border-3 border-info d-flex align-items-center justify-content-center" style="height: 400px">
                                Image avec la liste des bières
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="border border-3 border-info d-flex align-items-center justify-content-center" style="height: 400px">
                                Image avec la liste des snacks
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("partners.php"); ?>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
