<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "News";
            $activeMenuPage = "news";
            require_once("head.php");

            $menuDarkText = true;
        ?>
    </head>
    <body>

        <div class="fixed-bottom d-none d-lg-block">
            <div class="row p-5">
                <div class="col-lg-3">

                </div>
            </div>
        </div>

        <div id="bar" class="min-vh-100" style="background-image: url('image/bg/news-filtre.jpg'); background-size: cover">
            <?php
            require_once("nav.php");
            ?>
            <div id="bar" class="pb-4 px-lg-4 container-fluid">
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                    <div class="col amuseBar-bg-cream mx-lg-5 px-4">
                        <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>

                        <p class="fw-bold">Les newsletters</p>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="files/newsletter_2023_10.pdf">
                                    <img src="image/newsletter_2023_10.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">Octobre</div>
                                <span class="align-middle">Octobre est déjà là et avec lui le retour des soirées jeux de société !
                                    L’Amuse-Bar vous propose de vous réchauffer le coeur et le corps
                                    grâce à des parties endiablées, des animations variées et à ses bons
                                    petits plats maison !
                                    N'hésitez pas à nous suivre sur Instagram et Facebook, ainsi que
                                    d'aller zyeuter notre site internet car toutes les informations s'y
                                    trouvent (normalement)</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="files/newsletter_2023_08-09.pdf">
                                    <img src="image/newsletter_2023_08-09.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">Août - septembre</div>
                                <span class="align-middle">Vous trouverez dans cette newsletter quelques informations sur les
                                    diverses activités et animations que nous proposons à L'Amuse-Bar
                                    pour les mois d'août et septembre. N'hésitez pas à nous suivre sur
                                    Instagram et Facebook, ainsi que d'aller zyeuter notre site internet
                                    car toutes les informations s'y trouvent (normalement)</span>
                            </div>
                        </div>

                        <p class="fw-bold">La presse parle de l'Amuse Bar</p>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Zeit_20230319.pdf">
                                    <img src="image/news/Zeit_20230319.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">19 mars 2023: Alles ausser Monopoly - Ein Besuch in der grössten Spielbar der Schweiz in La Chaux-de-Fonds</div>
                                <span class="align-middle">Vanessa Rechik steht zwischen raumhohen Holzregalen, vollgepackt mit Gesellschaftsspielen, die nach einem genauen
                                    System geordnet sind: Von links nach rechts steigt das Mindestalter an, von unten nach oben die Mindestspieldauer.
                                    In der Ancien Manège in La Chaux-de-Fonds, wo einst Pferde trabten, ist heute die Amuse-Bar daheim, mit 1.300 Spielen für Erwachsene und Kinder.</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/ArcInfo_20230115.pdf">
                                    <img src="image/news/ArcInfo_20230115.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">15 janvier 2023: La Chaux-de-Fonds: un succès fou à l’Amuse-bar et des sommelières de jeu qu’on s’arrache</div>
                                <span class="align-middle">L’Amuse-bar, à La Chaux-de-Fonds, était plein à craquer ce vendredi 13 janvier.
                                    Les joueuses et joueurs ont aimé l’aide apportée par les sommelières et sommeliers de jeu,
                                    ainsi que les hors-d’œuvre et les boissons proposés à la carte.</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="https://www.rts.ch/info/regions/neuchatel/13703157-la-chauxdefonds-se-profile-de-plus-en-plus-comme-la-mecque-des-jeux-de-societe.html">
                                    <img src="image/news/RTS_20230115.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">15 janvier 2023: La Chaux-de-Fonds se profile de plus en plus comme la Mecque des jeux de société</div>
                                <span class="align-middle">L'ouverture lundi dernier à La Chaux-de-Fonds du plus grand bar à jeux de Suisse,
                                    ainsi que fin novembre d'une maison de jeux à mi-chemin entre l'escape game et le jeu d'aventure,
                                    viennent compléter le rayonnement du festival de jeux de société "Ludesco".</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Courrier_20230111.pdf">
                                    <img src="image/news/Courrier_20230111.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">11 janvier 2023: L’Amuse-Bar sort le grand jeu</div>
                                <span class="align-middle">Alors que la neige ramène un semblant de normalité, le froid et la curiosité attirent
                                    les Chaux-de-Fonnier·ères à l’Ancien Manège. Des enfants se pressent dans
                                    l’élégante cour, coiffée d’un toit de verre et décorée de marbre en trompel’œil. Quelques familles poussent pour
                                    la première fois les portes de l’AmuseBar qui a investi lundi les locaux du Manège du terroir.<br>
                                    Désormais ce petit bijou du patrimoine n’attire plus seulement les fervent·es d’histoire et d’architecture
                                    mais également les joueuses et joueurs en tout genre. Ce lieu de rencontres ludique et d’évasion» a été imaginé par
                                    trois membres du comité de Ludesco. Contraction de «ludique» et «UNESCO», ce festival annuel investit les
                                    lieux inscrits au patrimoine pour les transformer en terrain de jeux l’espace d’un week-end depuis treize ans. Avec
                                    sa collection de 1300 jeux, prêtés par la manifestation, l’Amuse-Bar peut désormais se targuer d’être le plus grand
                                    bar à jeux de Suisse. </span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="https://www.canalalpha.ch/play/le-journal/topic/28802/lamuse-bar-ouvre-enfin-ses-portes-a-lancien-manege">
                                    <img src="image/news/CanalAlpha_20230109.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">09 janvier 2023: L'Amuse-Bar ouvre enfin ses portes à l'Ancien Manège</div>
                                <span class="align-middle">Si vous n'avez pas reçu de jeu de société à Noël, pas de souci, L'Amuse-Bar ouvre enfin ses portes à
                                    l'Ancien Manège à La Chaux-de-Fonds. Après huit mois de combats pour obtenir un permis de construire, les cofondateurs
                                    devaient initialement poser leurs valises à la rue du Parc 71. Le bar prend finalement ses quartiers dans un lieu emblématique de la ville.
                                    Les fans de jeux en tout genre peuvent tester 1300 jeux fournis par Ludesco.</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/ArcInfo_20230109.pdf">
                                    <img src="image/news/ArcInfo_20230109.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">09 janvier 2023: Amuse-bar à La Chaux-de-Fonds: «Nous sommes crevés, mais heureux d’ouvrir à l’Ancien Manège!»</div>
                                <span class="align-middle">Ce lundi 9 janvier, l’Amuse-bar a enfin ouvert ses portes. Très cosy, l’espace installé à
                                    l’Ancien Manège a immédiatement séduit un public de joueuses et de joueurs. Nous y étions.</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/RTN_221104.pdf">
                                    <img src="image/news/RTN_221104.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">04 novembre 2022: Coup de sac pour l’Amuse-Bar qui rebondit à l’Ancien Manège</div>
                                <span class="align-middle">Retardé dans son développement lors de la mise à l’enquête publique, le nouveau bar à jeux
                                    de La Chaux-de-Fonds investira finalement le célèbre monument chaux-de-fonnier dans
                                    les locaux de la brasserie du Manège</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/CommuniqueDePresse_221104.pdf">
                                    <img src="image/news/CommuniqueDePresse_221104.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">04 novembre 2022: Coup de théatre pour l'Amuse-Bar</div>
                                <span class="align-middle">Un des plus grands bars à jeux de société de Suisse va enfin ouvrir ses portes en
                                    cette fin d’année 2022. Les trois Chaux-de-Fonniers passionnés de jeux auront l’immense plaisir de vous
                                    accueillir dans un lieu exceptionnel: L’Ancien Manège. Ils ont résilié le bail à la rue du Parc 71
                                    pour investir ce lieu dès la fin de l’année. L’Amuse-Bar y fera son nid avec de nouvelles opportunités:
                                    une salle de jeu séparée, une escape room et une terrasse intérieure.</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/ArcInfo_220922.pdf">
                                    <img src="image/news/ArcInfo_220922.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">22 septembre 2022: L'Amuse-Bar a enfin obtenu son permis de construire</div>
                                <span class="align-middle">«Nous avons le permis de construire. Enfin!», lance Vanessa Thomann-Rechik, cofondatrice
                                    du futur Amuse-bar, local de jeux prévu sur 145 m2 à la rue du Parc 71, à La Chaux-de-Fonds. «Nous l’avons reçu
                                    la semaine dernière, juste avant la prochaine édition de Ludesco, les 10 et 11 septembre.»</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Heroslocaux_20220619.pdf">
                                    <img src="image/news/Heroslocaux_20220619.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">19 juin 2022: Dernières nouvelles de L'Amuse-Bar</div>
                                <span class="align-middle">Voici quelques nouvelles pour ceux qui ne nous suivent pas sur FB ou Instagram.<br/>
                                Nous sommes bien occupés et avons rencontré quelques embûches sur notre chemin.</br>
                                Le premier imprévu est la mise à l'enquête pour les travaux.</br>
                                    Le local n'était en effet pas affecté à une utilisation en tant que bar et la commune devait donc demander à la population de "valider" cette option.</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Le_O_p10_220225.pdf">
                                    <img src="image/news/Le_O_p10_220225.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">25 février 2022: L'Amuse-Bar doit gagner la partie</div>
                                <span class="align-middle">D'ici trois mois au plus, une pédopsychiatre, une décoratrice d'intérieur et un sociologue de La Chaux-de-Fonds vont réduire
                                leur travail pour exercer dans un bar nouvellement créé! Plus que leur goût des bières artisanales, des cocktails et des produits
                                du terroir, c'est la mouche du jeu qui les a piqués! Le bar à jeux dont ils rêvent depuis dix ans est lancé. Recherche de fonds en cours</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/ArcInfo_p4_220225.pdf">
                                    <img src="image/news/ArcInfo_p4_220225.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">25 février 2022: L'Amuse-Bar, futur champion de Suisse des bars à jeux ?</div>
                                <span>"Nous comptons ouvrir L'Amuse-bar sur 140 mètres carrès à la fin du printemps, une fois la mise à l'enquête et les travaux
                                terminés. Le bail est signé."<br>Trois fans de jeux de société, la pédopsychiatre Vanessa Thomann-Rechik, l'architexte d'intérieur Laetitia Fletcher et
                                le sociologue Stéphane Fleury, sont à l'origine de ce lieu qui ouvrira rue du Parc 71 à La Chaux-de-Fonds. Ils caressaient le même rêve: créer, dans la
                                Métropole horlogère, le plus grand bar jeux de Suisse. Et Stéphane a dit un jour: "Et si nous nous mobilisons pour qu'il devienne réalité!"</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Le_Tourbillon_p4_220225.pdf">
                                    <img src="image/news/Le_Tourbillon_p4_220225.png" width="100%" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <div class="fw-bold">25 février 2022: L'Amuse-Bar, piquez vous au jeux !</div>
                                <span>L'une aime la bonne bière. La seconde les coktails. Le 3e complice en pince pour les produits du terroir. Mais ce qui les réunit plus que tout,
                                c'est la passion du jeu; avec désormais, un "crowdfunding" (levée de fonds) pour la réalisation d'un projet fantastique. "Que ça marche ou pas,
                                on partira: on a signé un bail de 10 ans!". Dès ce printemps, La Chaux-de-Fonds comptera dans son offre de loisirs l'Amuse-Bar, confortant son
                                titre de capitale ludique de Suisse romande.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once("footer.php"); ?>

        <?php require_once("finish.php"); ?>

    </body>
</html>
