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
        <div id="timetable" class="pt-3 min-vh-100" style="background-image: url('image/bg/timetable-filtre-2.png'); background-size: cover">
            <div class="container-fluid w-75 text-white">
                <div class="row">
                    <div class="col">
                        <img src="image/puzzleCdF.jpg" width="100%">
                    </div>
                    <div class="col text-center">
                        <div class="d-inline-block">
                            <div class="text-start pt-5">
                                <div class="fs-4 fw-bold pb-3">Adresse</div>
                                <div class="ms-3">
                                    <div><i class="bi bi-envelope pe-2"></i>Rue du Parc 71, 2300 La Chaux-de-Fond</div>
                                    <div><i class="bi bi-telephone pe-2"></i>032 123 45 67</div>
                                    <div>
                                        <a class="text-white" target="_blank" href="https://goo.gl/maps/zL7wps1BRAFDHqYV7"><i class="bi bi-geo-alt pe-2"></i>google maps</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-start pt-5">
                                <div class="fs-4 fw-bold pb-4">Horaires</div>
                                <div class="ms-3 text-center">
                                    <?php
                                    require_once("timetable.php");
                                    ?>
                                </div>
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
