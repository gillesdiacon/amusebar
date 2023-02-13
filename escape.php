<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Escape";
    $activeMenuPage = "escape";
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

<div id="events" class="min-vh-100" style="background-image: url('image/bg/escape-filtre.jpg'); background-size: cover">
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
                    <li><span class="fw-bold">Une Box Escape créée et confectionnée par Exit Locus</span><br>
                        L'objectif: ouvrir la boîte en résolvant des énigmes pour y découvrir le coffre au trésor caché au centre<br>
                        Tarif: 20.-/personnes<br>
                        Durée: entre 30min et 1h15<br>
                        De 2 à 8 personnes
                    </li>
                    <li><span class="fw-bold">Box escape pour enfant (créée par Exit Locus)</span><br>
                        <span class="amuseBar-text-red">Réservation nécessaire min 24h avant</span><br>
                        Tarif: 80.-<br>
                        De 2 à 5 enfants (dès 6 ans)
                    </li>
                    <li><span class="fw-bold">Black Water: une escape sur le thème des pirates</span><br>
                        <span class="amuseBar-text-red">Réservation nécessaire min 24h avant.</span><br>
                        Durée: 30min<br>
                        Tarif: 15.-/personnes<br>
                        Max 6 joueurs (dès 10 ans avec un adulte)
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p>Et si vous en voulez plus, vous trouverez des escape room à La Chaux-de-Fonds</p>
                <ul>
                    <li>Exit Locus: <a href="www.exitlocus.ch">www.exitlocus.ch</a></li>
                    <li>Escape or not: <a href="www.escape-or-not.ch">www.escape-or-not.ch</a></li>
                    <li>Challenge 27: <a href="www.challenge27.ch">www.challenge27.ch</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<?php require_once("footer.php"); ?>

<?php require_once("finish.php"); ?>

</body>
</html>
