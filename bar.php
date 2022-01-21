<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Le bar à jeux";
            $activeMenuPage = "bar";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div class="fixed-bottom">
            <div class="row p-5">
                <div class="col-lg-3">
                    <img src="image/punchline/punchline-bar.svg" />
                </div>
            </div>
        </div>

        <div id="bar" class="pt-6 min-vh-100 container-fluid" style="background-image: url('image/bg/bar-filtre.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col amuseBar-bg-cream mx-5 my-3 px-4">
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

        <?php require_once("partners.php"); ?>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
