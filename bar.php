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

        <div id="bar" class="pt-3 min-vh-100 container-fluid w-75">
            <h1><?php echo $activeMenuTitle?></h1>
            <div class="row">
                <div class="col">
                    Plus de 1'000 jeux de société sont à votre disposition dans notre bar !<br />
                    Nos sommeliers du jeu seront ravis de vous guider dans vos choix et de vous accompagner dans la mise en place pour des parties 100% plaisir !<br />
                    Les 3 Loutres de l’Amuse-Bar se réjouissent de vous accueillir et de partager un moment convivial avec vous.
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <a target="_blank" class="" href="https://collection.ludesco.ch/">Ouvrir la liste des jeux à disposition</a>
                </div>
            </div>
        </div>


        <?php require_once("footer.php"); ?>


            
        <?php require_once("finish.php"); ?>

    </body>
</html>
