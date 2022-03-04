    <div class="nav-container amuseBar-menu-gradient">
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid align-items-start">
                <a class="navbar-brand text-dark p-0" href="/">
                    <img class="d-lg-none" src="image/logo_bleu.png" alt="L'Amuse-Bar" width="80px" />
                    <img class="d-none d-lg-block" src="image/logo_bleu.png" alt="L'Amuse-Bar" width="160px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav" aria-controls="menuNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuNav">
                    <div class="flex-column ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item px-4 d-lg-none">
                                <a title="Accueil" class="nav-link py-0 m-0" href="/index.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('home'==$activeMenuPage) echo 'active' ?>">Accueil</h1>
                                </a>
                            </li>
                            <li class="nav-item px-4">
                                <a title="News" class="nav-link py-0 m-0" href="/news.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('new'==$activeMenuPage) echo 'active' ?>">News</h1>
                                </a>
                            </li>
                            <li class="nav-item px-4">
                                <a title="Concept" class="nav-link py-0 m-0" href="/concept.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('concept'==$activeMenuPage) echo 'active' ?>">Concept</h1>
                                </a>
                            </li>
                                <ul class="navbar-nav ps-4 d-lg-none">
                                    <?php include("navHomeLi.php"); ?>
                                </ul>
                            <li class="nav-item px-4">
                                <a title="Bar à jeux" class="nav-link py-0 m-0" href="/bar.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('bar'==$activeMenuPage) echo 'active' ?>">Bar à jeux</h1>
                                </a>
                            </li>
                            <li class="nav-item px-4">
                                <a title="Crowdfunding" class="nav-link py-0 m-0" href="/crowdfunding.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('crowdfunding'==$activeMenuPage) echo 'active' ?>">Crowdfunding</h1>
                                </a>
                            </li>
                            <li class="nav-item px-4">
                                <a title="Coin gourmand" class="nav-link py-0 m-0" href="/catering.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('catering'==$activeMenuPage) echo 'active' ?>">Coin gourmand</h1>
                                </a>
                            </li>
                            <!--
                            <li class="nav-item px-1">
                                <a title="Evénements" class="nav-link py-0 m-0" href="/event.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('event'==$activeMenuPage) echo 'active' ?>">Evénements</h1>
                                </a>
                            </li>
                            -->
                            <li class="nav-item px-4">
                                <a title="Magasin" class="nav-link py-0 m-0" href="/shop.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('shop'==$activeMenuPage) echo 'active' ?>">Magasin</h1>
                                </a>
                            </li>
                            <li class="nav-item px-4">
                                <a title="Contact et horaires" class="nav-link py-0 m-0" href="/contact.php">
                                    <h1 class="text-smallcaps font-rainbow amusebar-menu m-lg-0 <?php if('contact'==$activeMenuPage) echo 'active' ?>">Contact</h1>
                                </a>
                            </li>
                        </ul>

                        <?php if('concept'==$activeMenuPage) { ?>
                            <div class="d-none d-lg-block">
                                <ul class="navbar-nav flex-row px-3">
                                    <?php include("navHomeLi.php"); ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </>
                </div>
            </div>
            <div class="text-end">
                <a href="https://www.facebook.com/lamusebarlcdf">
                    <i class="bi bi-facebook text-dark px-3" alt="facebook"></i>
                </a>
                <a href="https://www.instagram.com/lamusebar_chauxdefonds/">
                    <i class="bi bi-instagram text-dark px-3" alt="instagram"></i>
                </a>
            </div>
        </nav>
    </div>