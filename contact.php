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

            // required to display partner
            $partnerLogoType = "";
        ?>
    </head>
    <body>

        <!-- Timetable -->
        <div id="timetable" class="mb-5" style="background-image: url('image/bg/timetable-filtre-2.png'); background-size: cover">
            <?php
            require_once("nav.php");
            ?>
            <div id="timetable" class="pb-4 px-lg-4 container-fluid">
                <div class="row px-lg-5">
                    <div class="col text-center">
                        <div class="d-inline-block">
                            <div class="text-start pt-5">
                                <div class="fs-4 fw-bold pb-3">Adresse</div>
                                <div class="ms-3 fw-bold">
                                    <div><i class="bi bi-envelope pe-2"></i>A l'Ancien Manège, rue du Manège 19, 2300 La Chaux-de-Fonds</div>
                                    <div><i class="bi bi-telephone pe-2"></i>079 755 04 15</div>
                                    <div>
                                        <a class="text-dark" target="_blank" href="https://goo.gl/maps/PzjTfjfyfFFkfSdo9"><i class="bi bi-geo-alt pe-2"></i>google maps</a>
                                    </div>
                                    <div>
                                        <a class="text-dark" target="_blank" href="mailto:lamusebar@gmail.com"><i class="bi bi-envelope pe-2"></i>lamusebar@gmail.com</a>
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
                    <div class="col-lg-5">&nbsp;</div>
                </div>
            </div>
        </div>

        <?php require_once("partners.php"); ?>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
