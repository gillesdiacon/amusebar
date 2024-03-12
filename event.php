<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Evénement";
    $activeMenuPage = "event";
    $activeSubMenuPage = "event";
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
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-ludesco.png" title="L'Amuse-Bar: Ludesco du 15 mars au 17 mars 2024" />
                    </div>
                    <div class="col-lg-6 p-3">
                        <a href="event-rolePlay.php">
                            <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0 hover-border-primary-2" src="image/event-jdr.png" title="L'Amuse-Bar: Jeux de Rôles mercredi 6 et 20 mars - 18h à 22h" />
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-birthday-1.png" title="L'Amuse-Bar: anniversaire 1 an - 23 mars 2024" />
                    </div>
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-birthday-2.png" title="L'Amuse-Bar: anniversaire 1 an - 23 mars 2024" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <video width="100%" controls poster="image/event-initiation-backgammon.png" title="L'Amuse-Bar: initiation au backgammon les 7, 21 et 28 mars">
                            <source src="files/event-initiation-backgammon.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-mondayFondueCards.png" title="L'Amuse-Bar: fondue - match aux cartes - 25 mars 2024" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <video width="100%" controls poster="image/event-blindTest-videoPoster.png" title="L'Amuse-Bar: blind test tous les vendredi à 19h">
                            <source src="files/event-blindTest.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-lundiFondue.png" title="L'Amuse-Bar: Lundi fondue tous les lundis" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <a target="_blank" href="https://www.eventbrite.com/e/la-coupe-des-maisons-tickets-741566103177?utm-campaign=social&utm-content=attendeeshare&utm-medium=discovery&utm-term=listing&utm-source=wsa&aff=ebdsshwebmobile">
                            <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0 hover-border-primary-2" src="image/event-murderParty-laCoupeDesMaisons.jpg" title="L'Amuse-Bar: joutes et meurtre mystère - La coupe des maisons" />
                            <div class="text-center font-raleway fw-bold">
                                <a target="_blank" href="https://diversi0n.com/evenement/la-coupe-des-maisons-amuse-bar-16-novembre/">
                                    <i class="bi bi-envelope pe-2"></i>inscription sur le site www.diversi0n.com
                                </a>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event-murderParty.png" title="L'Amuse-Bar: Murder Party" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-red rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/jdr-small.png" class="img-fluid" alt="L'Amuse-Bar organise pour votre plaisir des animations régulières autours de différentes activités ludiques">
                                <img src="image/cards-small.png" class="img-fluid" alt="L'Amuse-Bar organise pour votre plaisir des animations régulières autours de différentes activités ludiques">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-red">Animations</h5>
                                <ul>
                                    <li class="text-dark"><a target="_blank" href="event-rolePlay.php">Jeux de rôles</a></li>
                                    <li class="text-dark">Initiation au Backgammon, échec, chibre, belote</li>
                                    <li class="text-dark">Initiation cartes magic</li>
                                    <li class="text-dark">et bien plus encore</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <a href="event-company.php">
                            <div class="card h-100 amuseBar-bg-cream amuseBar-border-orange rounded-10 hover-border-primary-2">
                                <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                    <img src="image/chefHat-small.png" class="img-fluid" alt="L'Amuse-Bar est le lieu propice pour vos sorties d'entreprise">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title fw-bold amuseBar-text-orange">Souper d'entreprise et team building</h5>
                                    <p class="text-dark">L'Amuse-Bar est le lieu propice pour vos sorties d'entreprise. Il allie divertissement et menu sur mesure.
                                        Le jeu est un moyen idéal pour créer un esprit d'équipe et apprendre à gérer ses émotions et son leadership.</p>
                                    <p class="text-dark">Nous proposons également des formations pour la prévention du burn out (sur demande)</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-green-dark rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/birthday-small.png" class="img-fluid" alt="Organisez votre anniversaire à L'Amuse-Bar">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-green-dark">Anniversaire</h5>
                                <p class="text-dark">Venez fêter votre anniversaire ou autre événement festif à L'Amuse-Bar.
                                    On organise pour vous du jeu sur mesure avec animateur qui sera au petit soin.</p>
                                <p class="text-dark">Vous amenez votre gâteau: un forfait de 10.-/enfant comprenant une carafe
                                    de sirop/ 5 enfants vous sera demandé en plus des consommations sur place.</p>
                                <p class="text-dark">Nous nous occupons du gâteau: profitez pleinement de ce moment en consommant sur place
                                    Nous proposons en plus les services d'un animateur pour que vos enfants passent un chouette moment ludique.
                                    (30.-/h pour un animateur - dès 10 enfants, il est conseillé d'avoir un 2ème animateur
                                    pour garantir la qualité du service)</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 p-3">
                        <div class="card h-100 amuseBar-bg-cream amuseBar-border-pink rounded-10">
                            <div class="card-header bg-transparent border-bottom-0 text-center p-3">
                                <img src="image/school-small.png" class="img-fluid" alt="L'Amuse-Bar propose des activités ludiques aux écoles">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold amuseBar-text-pink">Ecoles et autres institutions</h5>
                                <p class="text-dark">L'Amuse-Bar propose des activités ludiques aux écoles afin que la jeune génération découvre un monde de rêverie infini.<br>
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
