<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-light concepta-navbar">
        <div class="container-fluid">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggler" aria-controls="navbarToggler"
                    aria-expanded="false" aria-label="Toggle navigation">
                <div></div>
                <div></div>
                <div></div>
            </button>
            <div class="row w-100">
                <div class="col-lg-6">
                    <a href="<?= PROJECT_ROOT ?>" class="logo-wrapper <?php echo (parse_url( $_SERVER[ 'REQUEST_URI' ], PHP_URL_PATH ) == PROJECT_ROOT ? 'big-logo' : '');?>">
                        <div>
                            <img src="<?= PROJECT_ASSETS . 'images/logo-full.png' ?>"/>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 nav-items-wrapper">
                    <div class="collapse navbar-collapse w-100" id="navbarToggler">
                        <div class="row nav-items">
                            <a href="<?= PROJECT_ROOT ?>" class="col-12 col-md-6 col-xl-3 active">
                                <span>
                                    HOME
                                </span>
                            </a>
                            <a href="<?= PROJECT_ROOT . 'pages/about' ?>" class="col-md-6 col-xl-3">
                                <span>
                                    ABOUT
                                </span>
                            </a>
                            <a href="<?= PROJECT_ROOT . 'pages/projects' ?>" class="col-md-6 col-xl-3">
                                <span>
                                    PROJECTS
                                </span>
                            </a>
                            <a href="<?= PROJECT_ROOT . 'pages/contact' ?>" class="col-md-6 col-xl-3">
                                <span>
                                    CONTACT
                                </span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>