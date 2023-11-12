<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Evénement - Jeux de rôles";
    $activeMenuPage = "event";
    $activeSubMenuPage = "rolePlay";
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

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-jdr.png" title="L'Amuse-Bar: Jeux de Rôles 1 mercredi sur 2 - 18h à 20h" />
                    </div>

                    <div class="col-lg-6 p-3">
                        <p class="font-raleway">Il s’agit d’un jeu de société dans lequel les participants interprètent chacun un personnage fictif ou non.
                            Ces personnages vont évoluer dans un univers lui aussi réel ou fictif. Les participants,
                            vivent une histoire dans laquelle ils interprètent leur personnage par les actes et/ou la parole pour effectuer des actions
                            qui feront avancer l’histoire dans la direction qu’ils souhaitent.</p>

                        <p class="font-raleway">Dans le jeu de rôle, l’un des joueurs est appelé Meneur de Jeu ou Maître du Jeu.
                            Sa mission est de décrire l’histoire et d’animer la partie
                            en tenant compte des actions des personnages des autres joueurs.</p>

                        <p class="font-raleway">Il doit donc s’adapter sans cesse aux actions des joueurs,
                            de fait il est à la fois le narrateur et le scénariste du film qui raconte votre épopée.
                            Votre aventure comportera des énigmes, des interactions et des obstacles que vous devrez
                            être en mesure de gérer en équipe afin que le jeu puisse se poursuivre.</p>

                        <p class="font-raleway fw-semi-bold">inscription à <a href="javascript:decryptEmail('Y2VkcmljX3Jvc3NlbEBob3RtYWlsLmZy');">cedric_rossel(at)hotmail.fr</a></p>
                    </div>
                </div>

                <p>&nbsp;</p>
            </div>
        </div>

    </div>
</div>

<?php require_once("footer.php"); ?>

<?php require_once("finish.php"); ?>

</body>
</html>
