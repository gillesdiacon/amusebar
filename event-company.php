<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
    $activeMenuTitle = "Evénement - Souper d'entreprise";
    $activeMenuPage = "event";
    $activeSubMenuPage = "company";
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

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event/event-company-1.png" title="L'Amuse-Bar: laissez-nous orchestrer votre souper d'entreprise" />
                    </div>

                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event/event-company-2.png" title="L'Amuse-Bar: laissez-nous orchestrer votre souper d'entreprise" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event/event-company-3.png" title="L'Amuse-Bar: laissez-nous orchestrer votre souper d'entreprise" />
                    </div>

                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event/event-company-4.png" title="L'Amuse-Bar: laissez-nous orchestrer votre souper d'entreprise" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event/event-company-5.png" title="L'Amuse-Bar: laissez-nous orchestrer votre souper d'entreprise" />
                    </div>

                    <div class="col-lg-6 p-3">
                        <img class="img-fluid p-3 p-sm-4 p-md-5 p-lg-0" src="image/event/event-company-6.png" title="L'Amuse-Bar: laissez-nous orchestrer votre souper d'entreprise" />
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
