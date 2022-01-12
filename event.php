<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Evénements";
            $activeMenuPage = "event";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div id="events" class="pt-6 min-vh-100 container-fluid">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col bg-white mx-5 my-3 px-4">
                    <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>
                </div>
            </div>
        </div>

        <?php require_once("partners.php"); ?>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
