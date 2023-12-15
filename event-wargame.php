<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Evénement - Wargame";
    $activeMenuPage = "event";
    $activeSubMenuPage = "wargame";
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
                <p class="font-raleway">Le monde des jeux de société ne serait pas complet sans évoquer les wargames. Lorsque nous étions petits,
                    nous adorions jouer avec des soldats en plastique, des vaisseaux spatiaux, des chevaliers en armure,
                    des bateaux de pirate qui évoluaient dans un univers de batailles flamboyantes.
                    Cette vitalité enfantine continue de traverser les âges de la vie. Parfois, son impact a eu une influence décisive.
                    Certains sont devenus historiens, d’autres militaires ou restés de simples, mais authentiques amateurs d’histoire.</p>

                <p class="font-raleway">Le wargame est précisément un jeu de société permettant d’explorer les grandes périodes de l’Histoire de l’humanité.
                    Par exemple, refaire la bataille de Waterloo de 1815 dont l’issue a changé la face du monde
                    (l’Angleterre s’est imposée comme la puissance majeure durant tout le 19e siècle).
                    Un des joueurs commande les troupes anglaises, prussiennes et ses alliés tandis que l’autre incarne
                    l’état-major de la Grande Armée. Chacun devra établir une stratégie en tenant compte du ravitaillement,
                    des lignes de communication pour amener ses troupes au combat final.</p>

                <p class="font-raleway">La bataille est simulée par des unités telles que des régiments d’infanterie de ligne, de cavalerie lourde et d’artillerie.
                    L’enchainement des actions et des combats (charge de cavalerie, déplacement des troupes, ordres donnés par les généraux, etc.)
                    fait émerger un récit. C’est bien la force du wargame et des jeux. Ils nous permettent de raconter
                    une histoire dont nous sommes à la fois scénaristes, acteurs et spectateurs. L’émotion est l’élément principal du jeu.</p>

                <p class="font-raleway">L’Amuse-Bar propose des soirées wargames un jeudi sur deux à compter du 30 novembre. La soirée est animée
                    par un spécialiste disposant d’une très importante collection de wargames. Les jeux seront sélectionnés
                    selon les critères suivants : partie jouable en une soirée, règles facilement accessibles et mise en
                    place rapide du jeu. Les propositions des joueurs sont les bienvenues.</p>

                <div class="row align-items-end">
                    <div class="col-lg-6 p-3">
                        <p class="fw-semi-bold">Notre prochaine soirée est le jeudi 14 décembre à 19h30. Venez nombreux. Voici les jeux que je propose pour cette première soirée :</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/VSHGP9AE3qc" title="Soirée wargame du 14 décembre à l&#39;Amuse-Bar (19h30-22h00)"
                                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 p-3">
                        <p class="fw-semi-bold">Notre prochaine soirée est le jeudi 30 novembre à 19h30. Venez nombreux. Voici les jeux que je propose pour cette première soirée :</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/6SKQmtk5A4c?si=uCVNRtpb1_Rs1Ld4" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                    <div class="col-lg-6 p-3">
                        <p class="fw-semi-bold">Explication du wargame en vidéo</p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/TQULl3ao67I?si=RbFV-MnKp2OaBx87" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
