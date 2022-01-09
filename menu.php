<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Menu";
            $activeMenuPage = "menu";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div id="events" class="pt-3 min-vh-100 container-fluid w-75">
            <h1><?php echo $activeMenuTitle?></h1>
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


        <?php require_once("footer.php"); ?>


            
        <?php require_once("finish.php"); ?>

    </body>
</html>
