<?php
    require_once("initAdmin.php");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php
        $activeMenuTitle = "Admin";
        $activeMenuLink = "/admin/index.php";
        require_once("../head.php");
        ?>
    </head>
    <body>

        <?php
            require_once("navAdmin.php");
        ?>

        <!-- Section 1 -->
        <div id="home" class="pt-3">
            <h1>Accueil</h1>
            <p>Try to scroll this page and look at the navigation bar while scrolling!</p>
        </div>

        <?php require_once("../footer.php"); ?>


            
        <?php require_once("../finish.php"); ?>

    </body>
</html>
