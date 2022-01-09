<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Evénements";
            $activeMenuPage = "events";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div id="events" class="pt-3 min-vh-100 container-fluid w-75">
            <h1><?php echo $activeMenuTitle?></h1>

        </div>


        <?php require_once("footer.php"); ?>


            
        <?php require_once("finish.php"); ?>

    </body>
</html>
