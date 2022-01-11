<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Contacts";
            $activeMenuPage = "contact";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <!-- Timetable -->
        <div id="timetable" class="pt-3 min-vh-100 container-fluid w-75">
            <div class="row">
                <div class="col border border-3 border-info d-flex align-items-center justify-content-center" style="height: 100px">
                    Image CdF puzzle
                </div>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <div class="fs-4 fw-bold pb-4">Horaires</div>
                    <div class="ms-3">
                        <?php
                            require_once("timetable.php");
                        ?>
                    </div>
                </div>
                <div class="col">
                    <div class="fs-4 fw-bold pb-3">Adresse</div>
                    <div class="ms-3">
                        <div><i class="bi bi-envelope pe-2"></i>Rue du Parc 71, 2300 La Chaux-de-Fond</div>
                        <div><i class="bi bi-telephone pe-2"></i>032 123 45 67</div>
                        <div><a target="_blank" href="https://goo.gl/maps/zL7wps1BRAFDHqYV7"><img src="image/googleMaps.svg" height="20" class="pe-2">google maps</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="charte" class="pt-3 min-vh-100 container-fluid w-75">
            <?php require_once("partners.php"); ?>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
