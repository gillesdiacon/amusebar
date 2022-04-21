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
                <div class="h1 text-white">Bienvenue à</div>
                <div>
                    <img src="image/logo_blanc.png"  width="200px"/>
                </div>
                <div class="text-white">L'Amuse-Bar c'est plus qu'un simple bar,<br/>c'est un lieu de découverte, de rencontre ludique et d'évasion.</div>
            </div>
        </div>

        <div class="row justify-content-center text-center pt-5">
            <div class="col-lg-6">
                <div class="text-white">Vous pouvez aussi nous suivre sur les réseaux sociaux</div>
                <div>
                    <a href="https://www.facebook.com/lamusebarlcdf" target="_blank">
                        <img src="image/facebook.png" width="75" />
                    </a>
                    <a href="https://www.instagram.com/lamusebar_chauxdefonds/">
                        <img src="image/instagram.png" width="50" target="_blank"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="container-fluid">
        <div class="row justify-content-center text-center pt-4">
            <div class="col-6">
                <div>
                    <img class="border border-3 border-blue rounded-1 p-3" src="image/logo_bleu.png"  width="200px"/>
                </div>
                <div class="pt-2">A prévu de vous ouvrir ses portes dans le courant de l'été 2022.</div>
                <div class="pt-2">D'ici là, suivez l'anvancée du projet sur <a href="https://www.facebook.com/lamusebarlcdf" target="_blank">Facebook</a>
                 et <a href="https://www.instagram.com/lamusebar_chauxdefonds/">Instagram</a>.</div>
            </div>
        </div>

        <div class="row justify-content-center text-center p-5">
            <div class="col-lg-2 border border-3 border-blue rounded-1 p-2 m-2">
                <div>
                    <img src="image/home_concept.png" width="100%" />
                </div>
                <!--
                <div class="py-3">BAR A JEUX</div>
                <div>
                    <p>1000 jeux de société pour jouer seul, en famille ou entre amis.</p>
                </div>
                -->
            </div>
            <div class="col-lg-2 border border-3 border-blue rounded-1 p-2 m-2">
                <div>
                    <img src="image/home_crowdfunding.png" width="100%" />
                </div>
                <!--
                <div class="py-3">CROWDFUNDING</div>
                <div>
                    <p>Pour que le rêve devienne réalité, nous avons besoin de votre soutien.</p>
                </div>
                -->
            </div>
            <div class="col-lg-2 border border-3 border-blue rounded-1 p-2 m-2">
                <div>
                    <img src="image/home_catering.png" width="100%" />
                </div>
                <!--
                <div class="py-3">COIN GOURMAND</div>
                <div>
                    <p>Pour régaler vos papilles durant vos parties endiablées.</p>
                </div>
                -->
            </div>
            <div class="col-lg-2 border border-3 border-blue rounded-1 p-2 m-2">
                <div>
                    <img src="image/home_shop.png" width="100%" />
                </div>
                <!--
                <div class="py-3">MAGASIN</div>
                <div>
                    <p>Pour découvrir les jeux avant de pouvoir les acheter.</p>
                </div>
                -->
            </div>
        </div>
    </div>
</div>

<hr />

<div>
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