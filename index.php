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

<div class="pt-10 container-fluid amuseBar-bg-bar amuseBar-bg-cream">
    <div class="">
    <div class="row justify-content-center text-center amuseBar-bg-home2">
        <a href="bar.php" class="col-lg-4 p-4 text-dark border-bottom">
            <div class="h1 fw-bold amuseBar-text-bar">Le Bar à Jeux</div>
            <div class="">1000 jeux de société pour jouer seul, entre amis ou en famille</div>
            <div class="">Venez découvrir cette magnifique collection et rencontrer nos sommeliers du jeu</div>
        </a>
    </div>
    <div class="row justify-content-center text-center amuseBar-bg-home1">
        <a href="catering.php" class="col-lg-4 p-4 text-dark border-bottom">
            <div class="h1 fw-bold amuseBar-text-catering">Restauration</div>
            <div class="">Pour régaler vos parties passionnées et le plaisir de vos papilles</div>
        </a>
    </div>
    <div class="row justify-content-center text-center amuseBar-bg-home2">
        <a href="shop.php" class="col-lg-4 p-4 text-dark">
            <div class="h1 fw-bold amuseBar-text-shop">Le magasin</div>
            <div class="">Pour découvrir les jeux avant de pouvoir les acheter</div>
        </a>
    </div>
    </div>
</div>

<?php require_once("finish.php"); ?>

</body>
</html>