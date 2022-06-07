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
                        <p class="fw-bold">La presse parle de l'Amuse Bar</p>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Le_O_p10_220225.pdf">
                                    <img src="image/news/Le_O_p10_220225.png" height="200px" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <span class="align-middle">D'ici trois mois au plus, une pédopsychiatre, une décoratrice d'intérieur et un sociologue de La Chaux-de-Fonds vont réduire
                                leur travail pour exercer dans un bar nouvellement créé! Plus que leur goût des bières artisanales, des cocktails et des produits
                                du terroir, c'est la mouche du jeu qui les a piqués! Le bar à jeux dont ils rêvent depuis dix ans est lancé. Recherche de fonds en cours</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/ArcInfo_p4_220225.pdf">
                                    <img src="image/news/ArcInfo_p4_220225.png" height="200px" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
                                <span>"Nous comptons ouvrir L'Amuse-bar sur 140 mètres carrès à la fin du printemps, une fois la mise à l'enquête et les travaux
                                terminés. Le bail est signé."<br>Trois fans de jeux de société, la pédopsychiatre Vanessa Thomann-Rechik, l'architexte d'intérieur Laetitia Fletcher et
                                le sociologue Stéphane Fleury, sont à l'origine de ce lieu qui ouvrira rue du Parc 71 à La Chaux-de-Fonds. Ils caressaient le même rêve: créer, dans la
                                Métropole horlogère, le plus grand bar jeux de Suisse. Et Stéphane a dit un jour: "Et si nous nous mobilisons pour qu'il devienne réalité!"</span>
                            </div>
                        </div>

                        <div class="row px-2 py-4">
                            <div class="col-lg-3 text-center">
                                <a target="_blank" href="news/Le_Tourbillon_p4_220225.pdf">
                                    <img src="image/news/Le_Tourbillon_p4_220225.png" height="200px" />
                                </a>
                            </div>
                            <div class="col d-none d-lg-block">
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
