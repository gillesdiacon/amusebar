<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?php if ('Admin' == $activeMenuTitle) echo 'active' ?>"
                       aria-current="page" href="<?php echo $activeMenuLink ?>">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section2">Section 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section3">Section 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#section4">Section 4</a>
                </li>
            </ul>
        </div>
        <div class="text-end">
            <a href="/logout.php">
                <span><?php echo $_SESSION['staffFirstName'] ?></span>
                <span><?php echo $_SESSION['staffLastName'] ?></span>
            </a>
        </div>
    </div>
</nav>