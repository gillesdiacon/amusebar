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

        <div class="fixed-bottom d-none d-lg-block">
            <div class="row p-5">
                <div class="col-lg-3">
                    <!-- <img src="image/punchline/punchline-event.svg" /> -->
                </div>
            </div>
        </div>

        <div id="events" class="min-vh-100" style="background-image: url('image/bg/event-filtre.png'); background-size: cover">
            <?php
            require_once("nav.php");
            ?>
            <div id="events" class="pb-4 px-lg-4 container-fluid">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                    <div class="col amuseBar-bg-cream mx-lg-5 px-4">
                        <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>

                        <div class="border border-3 border-info d-flex align-items-center justify-content-center" style="height: 800px">
                            Liste des événements
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
