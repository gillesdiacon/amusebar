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
                <div class="row px-md-5">
                    <div class="col text-center">
                        <div class="text-start pt-5">
                            <div class="fs-4 fw-bold pb-3">Adresse</div>
                            <div class="ms-3 fw-bold">
                                <div><i class="bi bi-envelope pe-2"></i>A l'Ancien Manège, rue du Manège 19, 2300 La Chaux-de-Fonds</div>
                                <div><i class="bi bi-telephone pe-2"></i>079 755 04 15</div>
                                <div><i class="bi bi-telephone pe-2"></i>032 964 15 13</div>
                                <div>
                                    <a class="text-dark" target="_blank" href="https://goo.gl/maps/PzjTfjfyfFFkfSdo9"><i class="bi bi-geo-alt pe-2"></i>google maps</a>
                                </div>
                                <div>
                                    <a class="text-dark" target="_blank" href="mailto:lamusebar@gmail.com"><i class="bi bi-envelope pe-2"></i>lamusebar@gmail.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="text-start pt-5">
                            <div class="fs-4 fw-bold pb-4">
                                <span class="fs-4 fw-bold">Horaires</span>
                            </div>
                            <div class="ms-3 text-center">
                                <?php
                                require_once("timetable.php");
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row p-lg-5">
                            <div class="fs-4 fw-bold pb-3">Où vous parker?</div>
                            <div class="col-lg-auto p-1 text-center">
                                <img class="img-md-fluid" src="image/parking.png" width="550px" title="L'Amuse-Bar: parking" />
                                <div class="pt-3 text-start">
                                    <div class="fw-bold">Places de Parking autour de l'Amuse-Bar</div>
                                    <div class="ps-2"><span class="px-1" style="background-color:blueviolet">Sur la Rue David Pierre Bourquin</span>:&nbsp;places blanches 2 min à pied</div>
                                    <div class="ps-2"><span class="px-1" style="background-color:yellow">Sur la Rue des Régionaux</span>:&nbsp;places blanches 3 min à pied</div>
                                    <div class="ps-2"><span class="px-1" style="background-color:red">Sur la Rue banneret</span> (côté prison):&nbsp;places bleues</div>
                                    <div class="ps-2 text-break"><span class="ps-1">Sinon sur les places de livraison autour de la prison</span> MAIS UNIQUEMENT HORS HORAIRES D'OUVERTURE</div>
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
