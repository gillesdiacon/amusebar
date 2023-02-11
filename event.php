<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Animations";
            $activeMenuPage = "event";
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
                        <p>L'Amuse-Bar organise pour votre plaisir des animations régulières autours de différentes activités ludiques</p>

                        <ul>
                            <li>Jeu de rôles: <span class="text-danger">dès le 8 février</span>, sur inscription à <a href="javascript:decryptEmail('amRyLmxhbXVzZWJhckBnbWFpbC5jb20=');">jdr.lamusebar(at)gmail.com</a></li>
                            <li>Initiation au Backgammon, échec, chibre, belote</li>
                            <li>Initiation cartes magic</li>
                            <li>et bien plus encore</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                    <div class="col amuseBar-bg-cream mx-lg-5 px-4 text-center">
                        <img class="img-fluid" src="image/eventJdr.png">
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
