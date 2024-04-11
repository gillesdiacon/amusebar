<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Accueil";
    $activeMenuPage = "home";
    require_once("head.php");

    // required to display partner
    $partnerLogoType = "_index";
    ?>
</head>
<body>

<div style="background-image: url('image/bg/home_filtre.png'); background-size: cover">
    <?php
    require_once("nav.php");
    ?>
    <div class="container-fluid py-5">
        <div class="row justify-content-center text-center">
            <div class="col-lg-6">
                <div class="h1 text-white font-raleway fw-bold">Bienvenue à</div>
                <div>
                    <img src="image/logo_blanc.png" width="200px"/>
                </div>
                <div class="text-white font-raleway fw-medium">L'Amuse-Bar c'est plus qu'un bar,<br/>c'est un lieu de découverte, de rencontre ludique et d'évasion.</div>
            </div>
        </div>

        <div class="row justify-content-center text-center pt-3">
            <div class="col-lg-3">
                <video width="100%" controls poster="image/event-semaine15.png" title="L'Amuse-Bar: programme de la semaine du lundi 8 avril">
                    <source src="files/event-semaine15.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-3">
                <a target="_blank" href="https://mailchi.mp/307a8c711615/les-news-de-lamuse-bar">
                    <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/newsletter_2024_04.png" title="L'Amuse-Bar: newsletter avril 2024" />
                </a>
            </div>
        </div>

        <div class="row justify-content-center text-center pt-3">
            <div class="col-lg-3">
                <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-initiation-poker.png" title="L'Amuse-Bar: initiation poker le jeudi 11 avril" />
            </div>
            <div class="col-lg-3">
                <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-mondayFondueCards.png" title="L'Amuse-Bar: fondue - match aux cartes - lundi 29 avril 2024" />
            </div>
        </div>

        <div class="row justify-content-center text-center pt-3">
            <div class="col-lg-3">
                <video width="100%" controls poster="image/event-blindTest-videoPoster.png" title="L'Amuse-Bar: blind test tous les vendredi à 19h">
                    <source src="files/event-blindTest.mp4" type="video/mp4">
                </video>
            </div>
            <div class="col-lg-3">
                <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/specialOpening.png" title="L'Amuse-Bar: horaire de printemps" />
            </div>
        </div>

<!--        <div class="row justify-content-center text-center pt-3">-->
<!--            <div class="col-lg-3">-->
<!--                <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-lundiFondue.png" title="L'Amuse-Bar: Lundi fondue tous les lundis" />-->
<!--            </div>-->
<!--            <div class="col-lg-3">-->
<!--                -->
<!--            </div>-->
<!--        </div>-->

    </div>
</div>

<div>
    <div class="container-fluid">
        <div class="row justify-content-center text-center p-5">
            <div class="col-lg-2 p-4 m-5">
                <a href="/concept.php">
                    <div>
                        <img src="image/home_concept.png" width="80%" />
                    </div>
                    <div class="py-3 h5 font-raleway fw-semi-bold amuseBar-text-home-concept">BAR A JEUX</div>
                    <div>
                        <p class="amuseBar-text-gray-blue font-raleway fw-medium">1000 jeux de société pour jouer seul, en famille ou entre amis.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 p-4 m-5">
                <a href="/catering.php">
                    <div>
                        <img src="image/home_catering.png" width="80%" />
                    </div>
                    <div class="py-3 h5 font-raleway fw-semi-bold amuseBar-text-home-catering">COIN GOURMAND</div>
                    <div>
                        <p class="amuseBar-text-gray-blue font-raleway fw-medium">Pour régaler vos papilles durant vos parties endiablées.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-2 p-4 m-5">
                <a href="/shop.php">
                    <div>
                        <img src="image/home_shop.png" width="80%" />
                    </div>
                    <div class="py-3 h5 font-raleway fw-semi-bold amuseBar-text-home-shop">MAGASIN</div>
                    <div>
                        <p class="amuseBar-text-gray-blue font-raleway fw-medium">Pour découvrir les jeux avant de pouvoir les acheter.</p>
                    </div>
                </a>
            </div>
            <!--
            <div class="col-lg-2 p-4 m-5">
                <a href="">
                    <div>
                        <img src="image/home_support.png" width="80%" />
                    </div>
                    <div class="py-3 h5 font-raleway fw-semi-bold amuseBar-text-home-support">SOUTIEN</div>
                    <div>
                        <p class="amuseBar-text-gray-blue font-raleway fw-medium">Pour que le rêve devienne réalité, nous avons besoin de votre soutien.</p>
                    </div>
                </a>
            </div>
            -->
        </div>
    </div>
</div>

<div class="amuseBar-bg-blue2">
    <div class="container-fluid p-5">
        <?php require_once("partners.php"); ?>
    </div>
</div>

<?php require_once("finish.php"); ?>

<script type="text/javascript">

    $(document).ready(function() {
        $(".modal").each(function () {
            //$(this).show();
        });
    });

</script>

</body>
</html>
