    <div class="nav-container">
        <nav class="navbar navbar-expand-lg navbar-light py-0">
            <div class="container-fluid">
                <a class="navbar-brand text-dark p-0" href="/">
                    <img class="" src="image/logo_<?php if(isset($menuDarkText)) echo 'gray'; else echo 'blanc'; ?>_notext.png" alt="L'Amuse-Bar" width="40px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav" aria-controls="menuNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="menuNav">
                    <div class="flex-column ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item px-2 py-2 mx-lg-2 d-lg-none amusebar-menu-list rounded-pill <?php if('home'==$activeMenuPage) echo 'active' ?>">
                                <a title="Accueil" class="nav-link py-0 m-0" href="/index.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">ACCUEIL</h1>
                                </a>
                            </li>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('news'==$activeMenuPage) echo 'active' ?>">
                                <a title="News" class="nav-link py-0 m-0" href="/news.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">NEWS</h1>
                                </a>
                            </li>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('concept'==$activeMenuPage) echo 'active' ?>">
                                <a title="Concept" class="nav-link py-0 m-0" href="/concept.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">CONCEPT</h1>
                                </a>
                            </li>
                                <ul class="navbar-nav ps-5 mb-2 d-lg-none">
                                    <?php include("navHomeLi.php"); ?>
                                </ul>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('bar'==$activeMenuPage) echo 'active' ?>">
                                <a title="Bar à jeux" class="nav-link py-0 m-0" href="/bar.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">BAR À JEUX</h1>
                                </a>
                            </li>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('catering'==$activeMenuPage) echo 'active' ?>">
                                <a title="Coin gourmand" class="nav-link py-0 m-0" href="/catering.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">COIN GOURMAND</h1>
                                </a>
                            </li>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('event'==$activeMenuPage) echo 'active' ?>">
                                <a title="Evénements" class="nav-link py-0 m-0" href="/event.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">EVÉNEMENTS</h1>
                                </a>
                            </li>
                                <ul class="navbar-nav ps-5 mb-2 d-lg-none">
                                    <?php include("navEventLi.php"); ?>
                                </ul>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('shop'==$activeMenuPage) echo 'active' ?>">
                                <a title="Magasin" class="nav-link py-0 m-0" href="/shop.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">MAGASIN</h1>
                                </a>
                            </li>
                            <li class="nav-item px-2 py-2 mx-lg-2 amusebar-menu-list rounded-pill <?php if('contact'==$activeMenuPage) echo 'active' ?>">
                                <a title="Contact et horaires" class="nav-link py-0 m-0" href="/contact.php">
                                    <h1 class="fw-semi-bold font-raleway amusebar-menu fs-5 m-lg-0 <?php if(isset($menuDarkText)) echo 'dark' ?>">CONTACT</h1>
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

                        <?php if(substr($activeMenuPage, 0, 5) === 'event') { ?>
                            <div class="d-none d-lg-block">
                                <ul class="navbar-nav flex-row px-3">
                                    <?php include("navEventLi.php"); ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </>
                </div>
            </div>
            <div class="text-end">
                <a href="https://www.facebook.com/lamusebarlcdf">
                    <i class="bi bi-facebook text-white p-3" alt="facebook"></i>
                </a>
                <a href="https://www.instagram.com/lamusebar_chauxdefonds/">
                    <i class="bi bi-instagram text-white p-3" alt="instagram"></i>
                </a>
            </div>
        </nav>
    </div>
