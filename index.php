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

<div class="fixed-bottom d-none d-lg-block">
    <div class="row p-5">
        <div class="col-lg-3">
            <img src="image/punchline/punchline-home.svg" />
        </div>
    </div>
</div>

<!-- Concept -->
<div id="concept" class="pt-8 min-vh-100 container-fluid" style="background-image: url('image/bg/concept-filtre.png'); background-size: cover">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col amuseBar-bg-cream mx-5 my-3 px-4">
            <div class="h1 py-3 text-center">Concept</div>
            <p>L'Amuse-Bar est un lieu de partage et de rencontre autour du jeu de société.
                Nous sommes trois passionnés de jeux qui avions le rêve d'ouvrir un bar dans lequel les gens pourraient se retrouver pour jouer,
                discuter et boire un verre en toute simplicité et convivialité, "comme à la maison".</p>
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
<div id="charte" class="pt-8 min-vh-100 container-fluid">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col mx-5 my-3 px-4 convention_background">

            <img src="image/convention.png" width="100%" />

            <!--
            <table class="table table-borderless conventionTable">
                <tr class="align-middle text-center" style="background-image: url('image/convention/convention-top.png'); background-size: cover; height: 400px">
                    <td>
                        <span class="h2">Charte de l'Amuse-Bar</span>
                    </td>
                </tr>
                <tr style="background-image: url('image/convention/convention-main.png'); background-repeat: repeat-y; background-size: contain;">
                    <td class="text-center px-4">
                        <div class="h4 fw-bold">L'Amuse-Bar est un lieu de partage.</div>
                        <div>Si vous cherchez un moment convivial en famille ou entre ami.e.s, vous êtes au bon endroit.</div>
                        <div class="fst-italic">"Jouer, c'est créer du lien" Gandhi</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu de rencontre.</div>
                        <div>Jouer c'est partager un moment agréable autour d'un jeu. Si vous êtes seul ou pas assez, n'hésitez pas à demander aux tables voisines
                            ou à notre sommelier du jeu pour trouver des partenaires de jeu. Vous ferez à coup sûr de belles rencontres.</div>
                        <div class="fst-italic">"On peut en savoir plus sur quelqu'un en une heure de jeu qu'en une année de conversation" Platon</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu de respect.</div>
                        <div>Les jeux sont mis à disposition gratuitement par l'Association Ludesco. Merci d'en prendre soin comme si c'était les vôtres,
                            de contrôler et de ranger le jeu après utilisation. Merci de nous faire part des pièces manquantes ou défectueuses le cas échéant.</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu chaleureux.</div>
                        <div>Un.e sommelier.e du jeu se fera un plaisir de vous expliquer le jeu et de vous accompagner dans la mise en place.
                            Soyez patients, tout vient à point à qui sait attendre !</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu gratuit.</div>
                        <div>Si vous avez apprécié les services de notre sommelier.ère, notre mascotte sera heureuse de recevoir des petits mots doux ou des petits sous.
                            Une consommation régulière pendant vos parties est nécessaire afin que nous puissions poursuivre cette aventure avec vous le plus longtemps possible.</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu simple et convivial.</div>
                        <div>Si vous avez des remarques ou des suggestions, des feuilles sont à votre disposition au bar. Afin de mieux vous servir,
                            nous accueillons vos remarques avec plaisir.</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est aussi un magasin de jeux.</div>
                        <div>Si un jeu vous plaît et que vous voulez vous l'offrir ou en faire un cadeau,
                            demandez à notre sommelier du jeu ou au bar, vous le trouverez certainement dans notre magasin de jeu.</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est également un espace de coworking.</div>
                        <div>Merci de respecter le travail d'autrui.</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu intergénérationnel.</div>
                        <div>Enfants et personnes âgées sont les bienvenus et encouragés à partager des moments hors du temps.</div>
                        <div class="fst-italic">"On n'arrête pas de jouer en devenant vieux, on devient vieux parce qu'on arrête de jouer." Bernard Shaw</div>

                        <div class="pt-4 h4 fw-bold">L'Amuse-Bar est un lieu d'amusement.</div>
                        <div>Jouer c'est aussi apprendre à perdre avec le sourire. Alors amusez-vous et soyez bons perdants et bons gagnants.</div>
                        <div class="fst-italic">"La chance tourne mais nos sourires restent."</div>
                    </td>
                </tr>
                <tr class="" style="background-image: url('image/convention/convention-bottom.png'); background-size: cover; height: 113px">
                    <td>&nbsp;</td>
                </tr>
            </table>
            -->
        </div>
    </div>
</div>

<!-- Team -->
<div id="team" class="pt-8 min-vh-100 container-fluid">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col amuseBar-bg-cream mx-5 my-3 px-4">
            <div class="h1 py-3 text-center">Equipe</div>

            <div class="py-4 row">
                <div class="col-8">
                    <div class="fw-bold fs-4">Vanessa</div>
                    <div class="row ps-5">
                        <div class="col-3">
                            <img width="200" src="image/vanessa.png">
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
                        <div class="col-3">
                            <img width="200" src="image/laetitia.png">
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
                        <div class="col-3">
                            <img width="200" src="image/stephane.png">
                        </div>
                        <div class="col">
                            <p class="text-justify">Sociologue/statisticien, est un amoureux des produits du terroir qui aime le lien, le partage autour des jeux de société surtout quand c'est accompagné d'une bonne bière artisanale.</p>
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
<div id="timetable" class="pt-8 min-vh-100 container-fluid" style="background-image: url('image/bg/timetable-filtre-2.png'); background-size: cover">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
        <div class="col mx-5 my-3 px-4">
            <div class="h1 py-3 text-center">Horaires</div>
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
    </div>
</div>

<?php require_once("partners.php"); ?>

<?php require_once("footer.php"); ?>

<?php require_once("finish.php"); ?>

</body>
</html>
