<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Accueil";
            $activeMenuPage = "index";
            require_once("head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("nav.php");
        ?>

        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div style="width: 20rem">&nbsp;</div>
                <div class="collapse navbar-collapse" id="homeNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link h5 py-0" href="#concept">Concept</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5 py-0" href="#charte">Charte</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5 py-0" href="#team">Equipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link h5 py-0" href="#timetable">Horaires</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Concept -->
        <div id="concept" class="pt-3 min-vh-100 " style="background-image: url('image/map.png'); background-size: cover">
        <div class="container-fluid w-75">
            <h1>Concept</h1>
            <p class="ps-4">L'Amuse-Bar sera le premier bar à jeux de société de la Chaux-de-Fonds. Nous avons à cœur de proposer un lieu particulier,
                original, à la décoration soignée qui vous emmènera, l'espace d'un instant, dans une bulle intemporelle faite de détente, de partage et d'amusement.
                Sa spécificité s'articule autour du concept de jeux de société. Vous pourrez profiter d'une collection de 1000 jeux mis à disposition gratuitement
                tout en sirotant une bière artisanale, un cocktail original ou une limonade maison. La plus value ? Nos sommeliers du jeu.
                Ils vous accompagneront et vous guideront dans le choix du jeu, les explications et la mise en route du jeu afin que vous puissiez
                profiter pleinement de ce moment de détente. Vous pourrez ainsi découvrir de nouveaux jeux sans la contrainte de devoir lire les nouvelles règles.</p>
            <p class="ps-4">Et comme jamais deux sans trois, une place sera dédiée pour le magasin de jeux ce qui vous permettra de faire vos cadeaux de Noël ou d'anniversaire
                avec les conseils avisés de nos sommeliers du jeu. Vous pourrez également tester les jeux avant de les acheter et cela gratuitement.</p>
            <p class="ps-4 fw-bold">L'Amuse-Bar c'est plus qu'un simple bar, c'est avant tout un lieu de rencontre, de partage et d'amusement.</p>
        </div>
        </div>

        <!-- Charte -->
        <div id="charte" class="pt-3 min-vh-100 container-fluid w-75">
            <h1>Charte</h1>
            <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
        </div>

        <!-- Team -->
        <div id="team" class="pt-3 min-vh-100" style="background-image: url('image/map.png'); background-size: cover">
        <div id="team" class="container-fluid w-75">
            <div class="h1 py-3">Equipe</div>

            <div class="py-4 row">
                <div class="col-8">
                    <div class="fw-bold fs-4">Vanessa</div>
                    <div class="row ps-5">
                        <div class="col-2">
                            <img width="100%" src="image/vanessa.png">
                        </div>
                        <div class="col">
                            <p class="text-justify">Pédopsychiatre, est une passionnée de jeux qui aime découvrir et faire découvrir cet univers riche et féérique. En plus si c'est accompagnée d'un bon cocktail elle ne dit pas non.</p>
                            <p class="fst-italic text-justify">"Ceci est le véritable secret de la vie - Être complètement engagé avec ce que vous faites dans l'ici et le maintenant. Au lieu d'appeler cela travailler, réalisez que c'est jouer." Alan Watts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 row justify-content-end">
                <div class="col-8">
                    <div class="fw-bold fs-4">Laetitia</div>
                    <div class="row ps-5">
                        <div class="col-2">
                            <img width="100%" src="image/laetitia.png">
                        </div>
                        <div class="col">
                            <div class="text-justify">Architecte d'intérieur, est une joueuse passionnée et expérimentée dans les animations, qui nous vient tout droit de la Belgique. Elle aime partager les rires, les jeux et les bières avec quiconque est prêt à la suivre dans ses délires.</div>
                            <div class="fst-italic text-justify">"Le bonheur le plus doux est celui qu'on partage." Jacques Delille</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 row">
                <div class="col-8">
                    <div class="fw-bold fs-4">Stéphane</div>
                    <div class="row ps-5">
                        <div class="col-2">
                            <img width="100%" src="image/stephane.png">
                        </div>
                        <div class="col">
                            <p class="text-justify">Sociologue/statisticien, est un amoureux des produits du terroir qui aime le lien, le partage autour des jeux de société surtout quand c’est accompagné d’une bonne bière artisanale.</p>
                            <p class="fst-italic text-justify">"On pense trop et on ressent trop peu. Plus que de machines, on a besoin d’humanité. Plus que d’intelligence, on a besoin de gentillesse et de douceur. Sans ces qualités, la vie perd son sens"
                                Charlie Chaplin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- Timetable -->
        <div id="timetable" class="pt-3 min-vh-100  container-fluid w-75">
            <div class="h1 py-3">Horaires</div>
            <div class="row pt-3">
                <div class="col-8">
                    <div class="ms-3">
                        <?php
                        require_once("timetable.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <?php require_once("footer.php"); ?>

            
        <?php require_once("finish.php"); ?>

    </body>
</html>
