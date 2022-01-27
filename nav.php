    <div class="nav-container amuseBar-menu-gradient pb-3">
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">
                <a class="navbar-brand text-dark" href="/">
                    <img class="d-lg-none" src="image/logo_bleu.png" alt="L'Amuse-Bar" width="80px" />
                    <img class="d-none d-lg-block" src="image/logo_bleu.png" alt="L'Amuse-Bar" width="160px" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="flex-column ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('concept'==$activeMenuPage) echo 'active amuseBar-text-green' ?>" href="/concept.php">Concept</a>
                            </li>
                                <ul class="navbar-nav ps-4 d-lg-none">
                                    <?php include("navHomeLi.php"); ?>
                                </ul>

                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('bar'==$activeMenuPage) echo 'active amuseBar-text-orange' ?>" href="/bar.php">Le Bar à jeux</a>
                            </li>
                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('shop'==$activeMenuPage) echo 'active amuseBar-text-purple' ?>" href="/shop.php">Le Magasin</a>
                            </li>
                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('catering'==$activeMenuPage) echo 'active amuseBar-text-blue' ?>" href="/catering.php">Resto</a>
                            </li>
                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('event'==$activeMenuPage) echo 'active amuseBar-text-maroon' ?>" href="/event.php">Evénements</a>
                            </li>
                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('contact'==$activeMenuPage) echo 'active' ?>" href="/contact.php">Contacts</a>
                            </li>
                        </ul>

                        <?php if('concept'==$activeMenuPage) { ?>
                            <div class="d-none d-lg-block">
                                <ul class="navbar-nav flex-row">
                                    <?php include("navHomeLi.php"); ?>
                                </ul>
                            </div>
                        <?php } ?>
                    </>
                </div>
            </div>
        </nav>
    </div>