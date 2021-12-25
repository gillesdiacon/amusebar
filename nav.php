        <nav class="navbar navbar-expand-lg navbar-light bg-light pb-0">
            <div class="container-fluid">
<!--                    <a class="navbar-brand" href="--><?php //echo $activeMenuPage; ?><!--.php">--><?php //echo $activeMenuTitle; ?><!--</a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="h1 ps-3 pe-5">L'AMUSE-BAR</div>
                <div class="collapse navbar-collapse" id="navbarNav" style="background-image: url('image/dices-25.jpg'); background-size: cover">
                    <ul class="navbar-nav">
                        <li class="nav-item h3 px-1">
                            <a class="nav-link <?php if('index'==$activeMenuPage) echo 'active' ?>" href="/index.php">Accueil</a>
                        </li>
                        <li class="nav-item h3 px-1">
                            <a class="nav-link <?php if('bar'==$activeMenuPage) echo 'active' ?>" href="/bar.php">Le Bar à jeux</a>
                        </li>
                        <li class="nav-item h3 px-1">
                            <a class="nav-link <?php if('shop'==$activeMenuPage) echo 'active' ?>" href="/shop.php">Le Magasin</a>
                        </li>
                        <li class="nav-item h3 px-1">
                            <a class="nav-link <?php if('menu'==$activeMenuPage) echo 'active' ?>" href="/menu.php">Menu</a>
                        </li>
                        <li class="nav-item h3 px-1">
                            <a class="nav-link <?php if('event'==$activeMenuPage) echo 'active' ?>" href="/event.php">Evénements</a>
                        </li>
                        <li class="nav-item h3 px-1">
                            <a class="nav-link <?php if('contact'==$activeMenuPage) echo 'active' ?>" href="/contacts.php">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>