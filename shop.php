<?php
    require_once("init.php");

    $shopAgeService = new ShopAgeService();
    $shopCategoryService = new ShopCategoryService();
    $shopDurationService = new ShopDurationService();
    $shopPlayerService = new ShopPlayerService();
    $shopThemeService = new ShopThemeService();
    $shopTypeService = new ShopTypeService();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php 
            $activeMenuTitle = "Le Magasin";
            $activeMenuPage = "shop";
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
                    <p class="fs-4 m-0"><span class="fs-3 amuseBar-text-purple">L'Amuse-Bar</span>,<br/>le magasin où on peut tester les jeux avant de les acheter</p>
                </div>
            </div>
        </div>

        <div id="events" class="pt-6 min-vh-100 container-fluid" style="background-image: url('image/shop_bg.png'); background-size: cover">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">&nbsp;</div>
                <div class="col amuseBar-bg-cream mx-5 my-3 px-4">
                    <div class="h1 py-3 text-center"><?php echo $activeMenuTitle?></div>

                    <p>Vous trouverez sûrement votre bonheur dans notre magasin de jeux. Pour offrir ou pour votre plaisir,
                        notre sommelier du jeu se fera un plaisir de vous conseiller dans le vaste choix du monde du jeu de société.</p>

                    <p>Si d'aventure, nous n'avons pas le jeu souhaité, nous le commanderons pour vous et nous vous le livrerons à domicile le plus rapidement possible.</p>

                    <div class="row">
                        <div class="col">
                            <div class="card bg-transparent">
                                <div class="card-header p-0">
                                    <a class="btn btn-sm w-100" data-bs-toggle="collapse" href="#collapseFilter">
                                        Filtres
                                    </a>
                                </div>
                                <div class="card-body collapse" id="collapseFilter">
                                    <form>
                                        <div class="row mb-3">
                                            <label for="title" class="col-sm-1 col-form-label text-end pe-3">Titre</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="title">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <div class="row">
                                                    <label for="player" class="col-sm-2 col-form-label text-end pe-3">Joueurs(s)</label>
                                                    <div class="col-sm-5">
                                                        <select id="player" class="form-select">
                                                            <option selected></option>
                                                            <?php foreach ($shopPlayerService->getShopPlayers() as $key => $value) {
                                                                echo "<option value='" . $value->value . "'>" . $value->text . "</option>";
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <label for="maxDuration" class="col-sm-3 col-form-label text-end pe-3">Durée maximum</label>
                                                    <div class="col-sm-5">
                                                        <select id="player" class="form-select">
                                                            <option selected></option>
                                                            <?php foreach ($shopDurationService->getShopDurations() as $key => $value) {
                                                                echo "<option value='" . $value->value . "'>" . $value->text . "</option>";
                                                            } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="ages" class="col-sm-1 col-form-label text-end pe-3 pt-0">Age</label>
                                            <div class="col-sm-10">
                                                <?php foreach ($shopAgeService->getShopAges() as $key => $value) {
                                                    echo "<div class='form-check form-check-inline'>";
                                                    echo "<input class='form-check-input' type='checkbox' id='" . $value->value . "' name='ages' value='" . $value->value . "'>";
                                                    echo "<label class='form-check-label' for='" . $value->value . "'>" . $value->text . "</label>";
                                                    echo "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="categories" class="col-sm-1 col-form-label text-end pe-3 pt-0">Catégorie</label>
                                            <div class="col-sm-10">
                                                <?php foreach ($shopCategoryService->getShopCategories() as $key => $value) {
                                                    echo "<div class='form-check form-check-inline'>";
                                                    echo "<input class='form-check-input' type='checkbox' id='" . $value->value . "' name='catgeories' value='" . $value->value . "'>";
                                                    echo "<label class='form-check-label' for='" . $value->value . "'>" . $value->text . "</label>";
                                                    echo "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="them" class="col-sm-1 col-form-label text-end pe-3 pt-0">Thème</label>
                                            <div class="col-sm-10">
                                                <?php foreach ($shopThemeService->getShopThemes() as $key => $value) {
                                                    echo "<div class='form-check form-check-inline'>";
                                                    echo "<input class='form-check-input' type='checkbox' id='" . $value->value . "' name='themes' value='" . $value->value . "'>";
                                                    echo "<label class='form-check-label' for='" . $value->value . "'>" . $value->text . "</label>";
                                                    echo "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="them" class="col-sm-1 col-form-label text-end pe-3 pt-0">Type</label>
                                            <div class="col-sm-10">
                                                <?php foreach ($shopTypeService->getShopTypes() as $key => $value) {
                                                    echo "<div class='form-check form-check-inline'>";
                                                    echo "<input class='form-check-input' type='checkbox' id='" . $value->value . "' name='types' value='" . $value->value . "'>";
                                                    echo "<label class='form-check-label' for='" . $value->value . "'>" . $value->text . "</label>";
                                                    echo "</div>";
                                                } ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col">
                            <div class="border border-3 border-info d-flex align-items-center justify-content-center" style="height: 800px">
                                Liste des jeux
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
