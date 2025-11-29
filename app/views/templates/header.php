<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- 1 - Bootstrap CSS -->
    <!-- Versi bootstrapnya jsdelivr dari GPT yang untuk menjalankan fungsi Carousel Banner -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- 1 - Bootstrap CSS for Navbar 2.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" type="text/css" href="../../2_styleCSS/navbarStyle.css">-->
    <!-- 2 - Styling CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/navbar2.0.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/bannerImage.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/map.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/waveAnimation.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/navbarStyle.css"> -->
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>/css/popUpStyle.css">
    <!-- 3 - React, ReactDOM, Babel Standalone -->
    <title>Halaman <?= $data['judul']; ?></title>
</head>
<body>
    <!-- Navbar -->
    <!--<div id="navbar"></div>--> <!-- Sengaja disable disini, butuh komentar tag // untuk menjelaskan masing2 kegunaan navbar yang dicode ini --> 
    <header class="fixed-navbar">
        <nav class="navbar navbar-expand-lg bg-custom"> <!-- Recently .navbar-light .bg-light -->
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="<?= BASEURL; ?>/img/7-sprites/1-shidokan-logo/shidokan-indonesia.png" alt="Shidokan Indonesia Logo" style="width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(110, 4, 110);">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        News
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="newsDropdown">
                        <li><a class="dropdown-item" href="#">News</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;National</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;International</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>/about">About Us</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>/about/sejarah">&nbsp;History</a></li>
                            <li><a class="dropdown-item" href="<?= BASEURL; ?>/about/profile1">&nbsp;Profile</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#" id="blackbeltsmenu">&nbsp;Blackbelts</a>
                                <ul class="dropdown-menu" aria-labelledby="blackbeltsmenu">
                                    <li><a class="dropdown-item active" href="<?= BASEURL; ?>/blackbelts">&nbsp;Blackbelts</a></li>
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/blackbelts/shodan">&nbsp;&nbsp;Shodan</a></li>
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/blackbelts/nidan">&nbsp;&nbsp;Nidan</a></li>
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/blackbelts/sandan">&nbsp;&nbsp;Sandan</a></li>
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/blackbelts/yondan">&nbsp;&nbsp;Yondan</a></li>
                                    <li><a class="dropdown-item" href="<?= BASEURL; ?>/blackbelts/godan">&nbsp;&nbsp;Godan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact & Dojo List
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="contactDropdown" style="max-height: 200px; overflow-y: auto; overflow-x: hidden;">
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/contactDojo">Contacts & Dojo List</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Shidokan Ikigai Honbu</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;As-Sa'adah Integrated Islamic Elementary School</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Asrama Denpom III/1 Shidokan Jawa Barat Honbu</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Shidokan Penerbad Semarang</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Shidokan Yuan Surabaya Barat</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Shidokan Main Branch (Walikota Mustajab)</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Shidokan Bali Lion Dojo</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Kyokushin Ampel</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;Kyokushin Alkhairiyah</a></li>
                        <!-- Add more Dojos as needed -->
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="shibuchoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Voice from Shibucho
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="shibuchoDropdown">
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/shibucho">Voice from Shibucho</a></li>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/shibucho/tataTertib">&nbsp;Tata Tertib Dojo</a></li>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/shibucho/joinUs">&nbsp;Join Us!</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sponsorsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Sponsors
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sponsorsDropdown">
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/sponsor">Our Sponsors</a></li>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/sponsor/ourPartner">&nbsp;Our Partner</a></li>
                        <li><a class="dropdown-item" href="<?= BASEURL; ?>/sponsor/merchandise">&nbsp;Merchandise</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>