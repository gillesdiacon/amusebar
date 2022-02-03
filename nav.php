    <div class="nav-container amuseBar-menu-gradient">
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">
                <a class="navbar-brand text-dark p-0" href="/">
                    <img class="d-lg-none" src="image/logo_bleu.png" alt="L'Amuse-Bar" width="80px" />
                    <img class="d-none d-lg-block" src="image/logo_bleu.png" alt="L'Amuse-Bar" width="160px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNav" aria-controls="menuNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="menuNav">
                    <div class="flex-column ml-auto">
                        <ul class="navbar-nav pb-2">
                            <li class="nav-item px-4 d-lg-none">
                                <a class="nav-link h3 py-0 m-0 <?php if('home'==$activeMenuPage) echo 'active' ?>" href="/index.php">Accueil</a>
                            </li>
                            <li class="nav-item px-4">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-concept <?php if('concept'==$activeMenuPage) echo 'active' ?>" href="/concept.php"></a>
                            </li>
                                <ul class="navbar-nav ps-4 d-lg-none">
                                    <?php include("navHomeLi.php"); ?>
                                </ul>
                            <li class="nav-item px-4">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-bar <?php if('bar'==$activeMenuPage) echo 'active' ?>" href="/bar.php"></a>
                            </li>
                            <li class="nav-item px-4">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-crowdfunding <?php if('crowdfunding'==$activeMenuPage) echo 'active' ?>" href="/crowdfunding.php"></a>
                            </li>
                            <li class="nav-item px-4">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-catering <?php if('catering'==$activeMenuPage) echo 'active' ?>" href="/catering.php"></a>
                            </li>
                            <!--
                            <li class="nav-item px-1">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-event <?php if('event'==$activeMenuPage) echo 'active' ?>" href="/event.php"></a>
                            </li>
                            -->
                            <li class="nav-item px-4">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-shop <?php if('shop'==$activeMenuPage) echo 'active' ?>" href="/shop.php"></a>
                            </li>
                            <li class="nav-item px-4">
                                <a class="nav-link h3 py-0 m-0 amusebar-menu amusebar-menu-contact <?php if('contact'==$activeMenuPage) echo 'active' ?>" href="/contact.php"></a>
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