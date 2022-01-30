<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Concept";
    $activeMenuPage = "concept";
    require_once("head.php");
    ?>
</head>
<body>

<?php
require_once("nav.php");
?>

<div class="fixed-bottom d-none d-lg-block">
    <div class="row p-5">
        <div class="col-lg-3">
            <img src="image/punchline/punchline-home.svg" />
        </div>
    </div>
</div>

<!-- Concept -->
<div id="concept" class="py-4 px-lg-4 container-fluid" style="background-image: url('image/bg/concept-filtre.png'); background-size: cover">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col amuseBar-bg-cream mx-lg-5 px-4">
            <div class="h1 py-3 text-center">Concept</div>
            <p>L'Amuse-Bar est un lieu de partage et de rencontre autour du jeu de société.</p>
            <p>Nous avons à coeur de vous offrir un espace particulier, original, à la décoration soignée, qui vous fera voyager dans une bulle intemporelle.</p>
            <p>Vous êtes fan de jeux de société ? Vous trouverez votre bonheur parmi l'immense collection de jeux de Ludesco qui se compose de plus de 1000 jeux de société.</p>
            <p>Amateur ou non joueur ? Ne vous inquiétez pas, il y en a pour tous les goûts et nous ne parlons pas uniquement de jeux.</p>
            <p>L'Amuse-Bar vous propose une petite restauration faite maison avec des produits du terroir choisis spécialement pour votre plaisir gustatif.
                Ces produits d'exception proviennent directement des producteurs qui vous seront présentés dans les fiches "producteurs".</p>
            <p>Et pour un plaisir encore plus grand, nos sommeliers du jeu seront là pour vous aiguiller dans vos choix,
                mettre en place le jeu et vous expliquer les règles. Une manière simple et agréable de découvrir des nouveautés !</p>
            <p>Tout cela accompagné d'une bonne bière artisanale, d'un cocktail original ou d'autres boissons faites maison...</p>
            <p>Venez nous rendre visite et découvrez encore plein d'autres surprises.</p>
            <p>L'Amuse-Bar, c'est plus qu'un bar, c'est un lieu de découverte, de rencontre ludique et d'évasion.</p>
        </div>
    </div>
</div>

<!-- Charte -->
<div id="charte" class="py-4 px-lg-4 container-fluid">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col mx-lg-5 px-4 convention_background">
            <img src="image/convention.png" width="100%" />
        </div>
    </div>
</div>

<!-- Team -->
<div id="team" class="py-4 px-lg-4 container-fluid">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col amuseBar-bg-cream mx-lg-5 px-4">
            <div class="h1 py-3 text-center">Equipe</div>

            <p>Nous sommes trois passionnés de jeux qui avions le rêve d'ouvrir un bar dans lequel les gens pourraient se retrouver pour jouer,
                discuter et boire un verre en toute simplicité et convivialité, "comme à la maison".</p>

            <div class="row">
                <div class="col">
                    <div class="fw-bold fs-4">Vanessa</div>
                    <div class="row ps-lg-5">
                        <div class="col-lg-3">
                            <img width="200" src="image/vanessa.png">
                        </div>
                        <div class="col pt-lg-4">
                            <p class="text-justify">Salut, je suis pédopsychiatre et passionnée de jeux de société. Je suis sportive, dynamique et enthousiaste. J'adore partager mes passions avec mes amis, ma famille et le jeu m'a permis de faire de belles rencontres inattendues. Je me réjouis de vous faire découvrir cet univers magique et partager avec vous ma passion pour les jeux de société.</p>
                            <p class="fst-italic text-justify">"Ceci est le véritable secret de la vie - Être complètement engagé avec ce que vous faites dans l'ici et le maintenant. Au lieu d'appeler cela travailler, réalisez que c'est jouer." Alan Watts</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4 row">
                <div class="col">
                    <div class="fw-bold fs-4">Laetitia</div>
                    <div class="row ps-lg-5">
                        <div class="col-lg-3">
                            <img width="200" src="image/laetitia.png">
                        </div>
                        <div class="col pt-lg-4">
                            <div class="text-justify">Salut ! Je suis architecte d'intérieur de formation (mais pas que) et je viens directement du plat pays (la Belgique donc) pour partager avec vous un moment sympa, autour d'un jeu, d'une bonne bière, ou simplement pour papoter. J'ai l'habitude d'animer des groupes et je me ferai un plaisir de vous expliquer des jeux.</div>
                            <div class="fst-italic text-justify">"Le bonheur le plus doux est celui qu'on partage." Jacques Delille</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-4 row">
                <div class="col">
                    <div class="fw-bold fs-4">Stéphane</div>
                    <div class="row ps-lg-5">
                        <div class="col-lg-3">
                            <img width="200" src="image/stephane.png">
                        </div>
                        <div class="col pt-lg-4">
                            <p class="text-justify">Salut ! Je suis sociologue-statisticien. Ce que j'aime dans le jeux de société, c'est le partage d'un moment hors du temps. Mais ma passion se tourne vers la rencontre avec les agriculteurs locaux pour dénicher de bons produits du terroir et faire la tournée des brasseries artisanales. J'aurai un immense plaisir à vous servir au bar.</p>
                            <p class="fst-italic text-justify">"On pense trop et on ressent trop peu. Plus que de machines, on a besoin d'humanité. Plus que d'intelligence, on a besoin de gentillesse et de douceur. Sans ces qualités, la vie perd son sens"
                                Charlie Chaplin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Timetable -->
<div id="timetable" class="py-4 px-lg-4 container-fluid" style="background-image: url('image/bg/timetable-filtre-2.png'); background-size: cover">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col mx-lg-5 px-lg-4">
            <div class="h1 py-lg-3 text-center">Horaires</div>
            <div class="row pt-lg-3 justify-content-center">
                <div class="col-lg-8">
                    <div class="ms-3">
                        <?php
                        require_once("timetable.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("partners.php"); ?>

<?php require_once("footer.php"); ?>

<?php require_once("finish.php"); ?>

</body>
</html>
