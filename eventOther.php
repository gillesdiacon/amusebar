<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Ecoles et autres institutions";
            $activeMenuPage = "eventOther";
            require_once("head.php");
        ?>
    </head>
    <body>

<!--        <div class="fixed-bottom d-none d-lg-block">-->
<!--            <div class="row p-5">-->
<!--                <div class="col-lg-3">-->
<!--                     <img src="image/punchline/punchline-event.svg" /> -->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div id="events" class="min-vh-100" style="background-image: url('image/bg/event-filtre.png'); background-size: cover">
            <?php
            require_once("nav.php");
            ?>
            <div id="events" class="pb-4 px-lg-4 container-fluid">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                    <div class="col amuseBar-bg-cream mx-lg-5 px-4">
                        <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>
                        <p>L'Amuse-Bar propose des activités ludiques aux écoles afin que la jeune génération découvre un monde de rêverie infini.<br>
                            Le jeu permet de développer des qualités essentielles à la vie en société, telles que la coopération, la gestion de la frustration,
                            le plaisir d'être ensemble et bien plus encore.</p>
                        <p>&nbsp;</p>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
