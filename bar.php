<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Bar à Jeux";
            $activeMenuPage = "bar";
            require_once("head.php");
        ?>
    </head>
    <body>

        <div class="fixed-bottom d-none d-lg-block">
            <div class="row p-5">
                <div class="col-lg-3">
                    <img src="image/punchline/punchline-bar.svg" alt="L'Amuse-Bar, C'est un lieu de rêve: plus de 1000 jeux à disposition" />
                </div>
            </div>
        </div>

        <div id="bar" class="min-vh-100" style="background-image: url('image/bg/bar-filtre.png'); background-size: cover">
            <?php
            require_once("nav.php");
            ?>
            <div id="bar" class="pb-4 px-lg-4 container-fluid">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                    <div class="col amuseBar-bg-cream mx-lg-5 px-4">
                        <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>
                        <p>Grâce à notre partenariat avec l'Association Ludesco, nous avons à disposition leur collection de plus de 1000 jeux dans notre bar.</p>

                        <p>Un catalogue en ligne est à votre disposition en suivant l'adresse ci-après.
                            <a target="_blank" class="" href="https://collection.ludesco.ch/">https://collection.ludesco.ch/</a>
                        </p>

                        <p>Vous pouvez également demander à notre sommelier du jeu. Il se fera un plaisir de vous guider dans vos choix,
                            de vous expliquer les règles et de vous accompagner dans la découverte du nouveau jeu.</p>

                        <p>Quoi de mieux que de pouvoir tester un jeu et de pouvoir l'acheter directement après ?
                            Vous trouverez votre jeu dans le Magasin de jeux de l'Amuse-Bar. Demander à votre sommelier du jeu.</p>

                        <p>Nous nous réjouissons de vous accueillir à l'Amuse-Bar!</p>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
