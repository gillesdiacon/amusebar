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

<?php
require_once("nav.php");
?>

<div class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crowd funding</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <video controls="controls" src="image/crowdFunding.mp4">
                    Your browser does not support the HTML5 Video element.
                </video>
            </div>
        </div>
    </div>
</div>

<div class="pt-3 container-fluid amuseBar-bg-bar amuseBar-bg-cream">
    <div class="row justify-content-center text-center amuseBar-bg-home2">
        <div class="col-lg-5 p-4 border-bottom">
            <a href="bar.php" class="text-dark">
                <div class="h1 fw-bold amuseBar-text-bar">Le Bar à Jeux</div>
                <div class="">1000 jeux de société pour jouer seul, entre amis ou en famille</div>
                <div class="">Venez découvrir cette magnifique collection et rencontrer nos sommeliers du jeu</div>
            </a>
            <div class="text-end px-5">
                <a class="pe-3" href="/concept.php">#concept</a>
                <a class="ps-3" href="/contact.php">#contact</a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center text-center amuseBar-bg-home1">
        <a href="crowdfunding.php" class="col-lg-4 p-4 text-dark border-bottom">
            <div class="h1 fw-bold amuseBar-text-crowdfunding">Crowdfunding</div>
            <div class="">Pour que le rêve devienne réalité ...</div>
        </a>
    </div>
    <div class="row justify-content-center text-center amuseBar-bg-home2">
        <a href="catering.php" class="col-lg-4 p-4 text-dark border-bottom">
            <div class="h1 fw-bold amuseBar-text-catering">Restauration</div>
            <div class="">Pour régaler vos papilles durant vos parties endiablées</div>
        </a>
    </div>
    <div class="row justify-content-center text-center amuseBar-bg-home1">
        <a href="shop.php" class="col-lg-4 p-4 text-dark border-bottom">
            <div class="h1 fw-bold amuseBar-text-shop">Le Magasin</div>
            <div class="">Pour découvrir les jeux avant de pouvoir les acheter</div>
        </a>
    </div>
    <div class="row justify-content-center text-center amuseBar-bg-home2">
        <div class="col p-4 text-dark">
            <div class="h5 fst-italic ">"Chaque homme cache en lui un enfant qui veut jouer" - Friedrich Nietzsche</div>
        </div>
    </div>
</div>

<?php require_once("partners.php"); ?>

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