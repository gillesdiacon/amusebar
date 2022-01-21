    <div class="nav-container fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light pb-0">
            <div class="container-fluid">
<!--                    <a class="navbar-brand" href="--><?php //echo $activeMenuPage; ?><!--.php">--><?php //echo $activeMenuTitle; ?><!--</a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="h1 ps-3 pe-5">L'AMUSE-BAR</div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="flex-column ml-auto">
                        <ul class="navbar-nav">
                            <li class="nav-item px-1 m-0">
                                <a class="nav-link h3 py-0 <?php if('index'==$activeMenuPage) echo 'active amuseBar-text-green' ?>" href="/index.php">Accueil</a></li>
                            </li>
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

                        <?php if('index'==$activeMenuPage) { ?>
                            <ul class="navbar-nav flex-row">
                                <li class="nav-item">
                                    <a class="nav-link h5 py-0" href="#concept">Concept</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h5 py-0" href="#charte">Charte</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h5 py-0" href="#team">Equipe</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link h5 py-0" href="#timetable">Horaires</a>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>