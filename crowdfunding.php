<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Crowdfunding";
            $activeMenuPage = "crowdfunding";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <div class="fixed-bottom d-none d-lg-block">
            <div class="row p-5">
                <div class="col-lg-3">
<!--                    <img src="image/punchline/punchline-crowdfunding.svg" />-->
                </div>
            </div>
        </div>

        <div class="p-4 container-fluid" style="background-image: url('image/bg/crowdfunding-filtre.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col amuseBar-bg-cream mx-lg-5 px-4">
                    <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>
                    <p>A vos marques, prêt ?  Misez!!!!</p>
                    <p class="mb-0">Les dés sont lancés ! L'Amuse-Bar a besoin de vous!</p>

                    <div class="px-5">
                        <div class="ratio ratio-16x9">
                            <video controls="controls" src="image/crowdFunding.mp4">
                                Your browser does not support the HTML5 Video element.
                            </video>
                        </div>
                    </div>

                    <p class="mt-3">Alors si notre projet vous touche et vous intéresse, nous vous invitons à participer à notre crowdfunding pour nous aider à acheter
                        une belle cuisine professionnelle pour vous faire de bons petits plats et du mobilier confortable, pour que vous vous sentiez comme à la maison.</p>
                    <p>Vous pouvez nous soutenir en cliquant directement sur le lien ci-dessous:<br>
                        <a href="#">xxxxxxxxx</a>
                    </p>
                    <p>

                    </p>
                    <p class="mb-0">ou en versant directement l'argent sur le compte de notre société (Les 3 Loutres Sàrl):</p>
                    <p class="ps-2">Banque Clientis<br>
                        Les 3 Loutres Sàrl<br>
                        IBAN: CH60 0624 0575 1277 4090 1<br>
                        Adresse Caisse d'Epargne Courtelary SA<br>
                        Grand Rue 45<br>
                        2608 Courtelary
                    </p>
                </div>
            </div>
        </div>

        <?php require_once("partners.php"); ?>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
