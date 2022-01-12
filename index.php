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

        <div class="fixed-bottom">
            <div class="row p-5">
                <div class="col-lg-3" style="font-variant: small-caps">
                    <p class="fs-4 m-0"><span class="fs-3 amuseBarGreen">L'Amuse-Bar</span>,<br/>C'est plus qu'un bar, c'est un lieu de decouverte, de rencontre ludique et d'evasion</p>
                </div>
            </div>
        </div>

        <!-- Concept -->
        <div id="concept" class="pt-8 min-vh-100 container-fluid" style="background-image: url('image/concept_bg.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col bg-white mx-5 my-3">
                    <div class="h1 py-3 text-center">Concept</div>
                    <p class="ps-4">L'Amuse-Bar est un lieu de partage et de rencontre autour du jeu de société.
                        Nous sommes trois passionnés de jeux qui avions le rêve d'ouvrir un bar dans lequel les gens pourraient se retrouver pour jouer,
                        discuter et boire un verre en toute simplicité et convivialité, "comme à la maison".</p>
                    <p class="ps-4">Nous avons à coeur de vous offrir un espace particulier, original, à la décoration soignée, qui vous fera voyager dans une bulle intemporelle.</p>
                    <p class="ps-4">Vous êtes fan de jeux de société ? Vous trouverez votre bonheur parmi l'immense collection de jeux de Ludesco qui se compose de plus de 1000 jeux de société.</p>
                    <p class="ps-4">Amateur ou non joueur ? Ne vous inquiétez pas, il y en a pour tous les goûts et nous ne parlons pas uniquement de jeux.</p>
                    <p class="ps-4">L'Amuse-Bar vous propose une petite restauration faite maison avec des produits du terroir choisis spécialement pour votre plaisir gustatif.
                        Ces produits d'exception proviennent directement des producteurs qui vous seront présentés dans les fiches "producteurs".</p>
                    <p class="ps-4">Et pour un plaisir encore plus grand, nos sommeliers du jeu seront là pour vous aiguiller dans vos choix,
                        mettre en place le jeu et vous expliquer les règles. Une manière simple et agréable de découvrir des nouveautés !</p>
                    <p class="ps-4">Tout cela accompagné d'une bonne bière artisanale, d'un cocktail original ou d'autres boissons faites maison...</p>
                    <p class="ps-4">Venez nous rendre visite et découvrez encore plein d'autres surprises.</p>
                    <p class="ps-4">L'Amuse-Bar, c'est plus qu'un bar, c'est un lieu de découverte, de rencontre ludique et d'évasion.</p>
                </div>
            </div>
        </div>

        <!-- Charte -->
        <div id="charte" class="pt-8 min-vh-100 container-fluid" style="background-image: url('image/convention_bg.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col bg-white mx-5 my-3">
                    <div class="h1 py-3 text-center">Charte de l'Amuse-Bar</div>
                    <ol>
                        <li>
                            <p>L'Amuse-Bar est un lieu de <span class="fw-bold">partage</span>. Si vous cherchez un moment convivial en famille ou entre ami.e.s, vous êtes au bon endroit.
                                <span class="fst-italic">"Jouer, c'est créer du lien" Gandhi</span></p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu de <span class="fw-bold">rencontre</span>. Jouer c"est partager un moment agréable autour d'un jeu.
                                Si vous êtes seul ou pas assez, n'hésitez pas à demander aux tables voisines ou à notre sommelier du jeu pour trouver des partenaires de jeu.
                                Vous ferez à coup sûr de belles rencontres.
                                <span class="fst-italic">"On peut en savoir plus sur quelqu'un en une heure de jeu qu'en une année de conversation" Platon</span></p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu de <span class="fw-bold">respect</span>. Les jeux sont mis à disposition <span class="fw-bold">gratuitement</span> par
                                l'Association Ludesco. Merci d'en prendre soin comme si c'était les vôtres, de contrôler et de ranger le jeu après utilisation.
                                Merci de nous faire part des pièces manquantes ou défectueuses le cas échéant.</p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu <span class="fw-bold">chaleureux</span>. Un.e sommelier.e du jeu se fera un plaisir de vous expliquer le
                                jeu et de vous accompagner dans la mise en place. Soyez patients, tout vient à point à qui sait attendre !</p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu <span class="fw-bold">gratuit</span>. Si vous avez apprécié les services de notre sommelier.ère,
                                notre mascotte sera heureuse de recevoir des petits mots doux ou des petits sous. Une consommation régulière pendant vos parties est
                                nécessaire afin que nous puissions poursuivre cette aventure avec vous le plus longtemps possible.</p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu <span class="fw-bold">simple</span> et <span class="fw-bold">convivial</span>. Si vous avez des remarques ou des suggestions,
                                des feuilles sont à votre disposition au bar. Afin de mieux vous servir, nous accueillons vos remarques avec plaisir.</p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est aussi un <span class="fw-bold">magasin de jeux</span>. Si un jeu vous plaît et que vous voulez vous l'offrir ou en faire un cadeau,
                                demandez à notre sommelier du jeu ou au bar, vous le trouverez certainement dans notre magasin de jeu.</p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est également un espace de <span class="fw-bold">coworking</span>. Merci de respecter le travail d'autrui.</p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu <span class="fw-bold">intergénérationnel</span>. Enfants et personnes âgées sont les bienvenus et encouragées à
                                partager des moments hors du temps.
                            <span>"On n'arrête pas de jouer en devenant vieux, on devient vieux parce qu'on arrête de jouer" Bernard Shaw</span></p>
                        </li>
                        <li>
                            <p>L'Amuse-Bar est un lieu <span class="fw-bold">d'amusement</span>. Jouer c'est aussi apprendre à perdre avec le sourire.
                                Alors amusez-vous et soyez bons perdants et bons gagnants. La chance tourne mais nos sourires restent
                                <span class="fst-italic">"Moi, je ne joue pas pour gagner ou pour perdre. Je joue pour savoir si je vais gagner ou si je vais perdre." Alfred Capus</span></p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div id="team" class="pt-8 min-vh-100 container-fluid">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col bg-white mx-5 my-3">
                    <div class="h1 py-3 text-center">Equipe</div>

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
        <div id="timetable" class="pt-8 min-vh-100 container-fluid" style="background-image: url('image/timetable_bg.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col mx-5 my-3">
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
