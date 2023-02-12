<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Evénement";
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

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-red rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/jdr-small.png" class="rounded-top-10" alt="L'Amuse-Bar organise pour votre plaisir des animations régulières autours de différentes activités ludiques">
                                <img src="image/cards-small.png" class="rounded-top-10" alt="L'Amuse-Bar organise pour votre plaisir des animations régulières autours de différentes activités ludiques">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-red">Animations</h5>
                                <ul>
                                    <li><a target="_blank" href="image/flyerJdr.pdf">Jeu de rôle</a>:
                                        inscription à <a href="javascript:decryptEmail('amRyLmxhbXVzZWJhckBnbWFpbC5jb20=');">jdr.lamusebar(at)gmail.com</a></li>
                                    <li>Initiation au Backgammon, échec, chibre, belote</li>
                                    <li>Initiation cartes magic</li>
                                    <li>et bien plus encore</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-orange rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/chefHat-small.png" class="rounded-top-10" alt="L'Amuse-Bar est le lieu propice pour vos sorties d'entreprise">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-orange">Souper d'entreprise et team building</h5>
                                <p>L'Amuse-Bar est le lieu propice pour vos sorties d'entreprise. Il allie divertissement et menu sur mesure.
                                    Le jeu est un moyen idéal pour créer un esprit d'équipe et apprendre à gérer ses émotions et son leadership.</p>
                                <p>Nous proposons également des formations pour la prévention du burn out (sur demande)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-green-dark rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/birthday-small.png" class="rounded-top-10" alt="Organisez votre anniversaire à L'Amuse-Bar">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-green-dark">Anniversaire</h5>
                                <p>Venez fêter votre anniversaire ou autre événement festif à L'Amuse-Bar.
                                    On organise pour vous du jeu sur mesure avec animateur qui sera au petit soin.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-pink rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/school-small.png" class="rounded-top-10" alt="L'Amuse-Bar propose des activités ludiques aux écoles">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-pink">Ecoles et autres institutions</h5>
                                <p>L'Amuse-Bar propose des activités ludiques aux écoles afin que la jeune génération découvre un monde de rêverie infini.<br>
                                    Le jeu permet de développer des qualités essentielles à la vie en société, telles que la coopération, la gestion de la frustration,
                                    le plaisir d'être ensemble et bien plus encore.</p>
                            </div>
                        </div>
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
