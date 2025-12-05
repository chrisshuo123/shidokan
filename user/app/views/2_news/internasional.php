<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- 1 - BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- 2 - Styling CSS Files -->
    <link rel="stylesheet" type="text/css" href="../../2_styleCSS/navbar2.0.css">
    <link rel="stylesheet" type="text/css" href="../../2_styleCSS/style.css">
    <link rel="stylesheet" type="text/css" href="../../2_styleCSS/bannerImage.css">
    <!-- 3 - React, ReactDOM, Babel Standalone -->
    <title>Berita Internasional Shidokan</title>
</head>
<body>
    <!-- Navbar -->
    <header class="fixed-navbar">
        <nav class="navbar navbar-expand-lg bg-custom"> <!-- Recently .navbar-light .bg-light -->
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="../img/7-sprites/1-shidokan-logo/shidokan-indonesia.png" alt="Shidokan Indonesia Logo" style="width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(110, 4, 110);">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../1_home/index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        News
                    </a>
                    <ul class="dropdown-menu active" aria-labelledby="newsDropdown">
                        <li><a class="dropdown-item" href="../2_news/berita.html">News</a></li>
                        <li><a class="dropdown-item" href="../2_news/nasional.html">&nbsp;National</a></li>
                        <li><a class="dropdown-item active" href="#">&nbsp;International</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="../3_about-us/about-us.html">About Us</a></li>
                            <li><a class="dropdown-item" href="../3_about-us/sejarah.html">&nbsp;History</a></li>
                            <li><a class="dropdown-item" href="../3_about-us/profile1.html">&nbsp;Profile</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#" id="blackbeltsmenu">&nbsp;Blackbelts</a>
                                <ul class="dropdown-menu" aria-labelledby="blackbeltsmenu">
                                    <li><a class="dropdown-item" href="#">&nbsp;Blackbelts</a></li>
                                    <li><a class="dropdown-item" href="../3_about-us/blackbelts/1_shodan.html">&nbsp;&nbsp;Shodan</a></li>
                                    <li><a class="dropdown-item" href="../3_about-us/blackbelts/2_nidan.html">&nbsp;&nbsp;Nidan</a></li>
                                    <li><a class="dropdown-item" href="../3_about-us/blackbelts/3_sandan.html">&nbsp;&nbsp;Sandan</a></li>
                                    <li><a class="dropdown-item" href="../3_about-us/blackbelts/4_yondan.html">&nbsp;&nbsp;Yondan</a></li>
                                    <li><a class="dropdown-item" href="../3_about-us/blackbelts/5_godan.html">&nbsp;&nbsp;Godan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact & Dojo List
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="contactDropdown" style="max-height: 200px; overflow-y: auto; overflow-x: hidden;">
                        <li><a class="dropdown-item" href="../4_contact-us/contactAndDojoList.html">Contacts & Dojo List</a></li>
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
                        <li><a class="dropdown-item" href="../5_voice-from-shibucho/voiceFromShibucho.html">Voice from Shibucho</a></li>
                        <li><a class="dropdown-item" href="../5_voice-from-shibucho/tataTertibDojo.html">&nbsp;Tata Tertib Dojo</a></li>
                        <li><a class="dropdown-item" href="../5_voice-from-shibucho/joinUs.html">&nbsp;Join Us!</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="sponsorsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Our Sponsors
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="sponsorsDropdown">
                        <li><a class="dropdown-item" href="../6_sponsors/sponsors.html">Our Sponsors</a></li>
                        <li><a class="dropdown-item" href="../6_sponsors/our_partner.html">&nbsp;Our Partner</a></li>
                        <li><a class="dropdown-item" href="../6_sponsors/merchandise.html">&nbsp;Merchandise</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
        </div>
        </nav>
    </header>
    <!-- Header Title & Sub -->
    <div class="banner bannerimage banner_beritaInternasional">
        <div class="banner-content">
            <h1>Berita Internasional Shidokan</h1>
            <p>Seputar berita Shidokan Kyokushin berskala Internasional terutama berasal dari Jepang sebagai Basecamp Shidokan Global</p>
        </div>
    </div>
    <!-- Isi -->
    <div class="container">
        <div class="row">
            <div class="col-12" style="background-color: purple; color:white;">
                <img src="../img/4-news/shidokan-news-sample-1.jpg">
                <h2 style="text-align: left;">JUDUL</h2>
                <p style="text-align: left;">Nama Penulis | Tanggal | Nama Media</p>
                <p style="text-align: left;">isi bla bla... Lorem ipsum dolor sit, amet consectetur adipisicing elit....<button>Selengkapnya</button></p>
            </div>
        </div>
        <!-- List Berita Nasional -->
        <!--
        Isi berupa JQUERY menggunakan Obj Literation, Next & Prev + Bulletin Page
        untuk Berita Shidokan Internasional (Khususnya di Jepang)
        -->
        <div class="content" id="page-content">
            <!-- Dynamic Content Loaded Here -->
        </div>
        <div class="pagination">
            <button id="prev" disabled>Previous</button>
            <div class="bullets" id="bullets"></div>
            <button id="next">Next</button>
        </div>
    </div>
    <!-- Footer -->
    <div class="footer" style="background-color: black;">
        <!-- Footer Atas -->
        <div class="footer-atas">
            <div class="flex-shidokanlogo-footer" style="padding-top:3%;">
                <ul class="footer-container">
                    <!-- First Logo -->
                    <li class="footer-item footer-logo">
                        <img src="../img/7-sprites/1-shidokan-logo/shidokan-internasional.png" alt="Logo 1">
                    </li>
                    <!-- Title and Description -->
                    <li class="footer-item footer-text">
                        <h3>Shidokan</h3>
                        <p>(Mottonya) Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla cupiditate, libero quod optio tempora rerum blanditiis quas dolore nemo ad sint possimus explicabo cum commodi, totam maiores cumque placeat consequuntur?</p>
                    </li>
                    <!-- Second Logo -->
                    <li class="footer-item footer-logo">
                        <img src="../img/7-sprites/1-shidokan-logo/shidokan-indonesia.png" alt="Logo 2">
                    </li>
                </ul>
                <div class="flex-nav-footer">
                    <ul>
                        <li><button class="button-style button-purple" data-link="../1_home/index.html">Home</button></li>
                        <li><button class="button-style button-purple" data-link="../2_news/berita.html">News</button></li>
                        <li><button class="button-style button-purple" data-link="../3_about-us/about-us.html">About Us</button></li>
                        <li><button class="button-style button-purple" data-link="../4_contact-us/contactAndDojoList.html">Contact & Dojo List</button></li>
                        <li><button class="button-style button-purple" data-link="../5_voice-from-shibucho/voiceFromShibucho.html">Voice from Shibucho</button></li>
                        <li><button class="button-style button-purple" data-link="../6_sponsors/sponsors.html">Our Sponsors</button></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Footer Tengah -->
        <div class="footer-tengah">
            <div class="row justify-content-sm-center text-center">
                <div class="col-sm-4 col-12 layout-infoDojo-footer">
                    <p><b>Lokasi Dojo:</b></p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-location-dot fa-lg" style="margin-top:4%; margin-right: 3%;"></i>
                            <p>Yuan Dojo Surabaya Barat</p>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot fa-lg" style="margin-top:4%; margin-right: 3%;"></i>
                            <p>Shidokan Dojo Bali Denpasar</p>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-4 col-12">
                    <p><b>Info Latihan:</b></p>
                    <div class="layout-infolatihan-footer">
                        <ul>
                            <li>
                                <i class="fa-solid fa-square-phone fa-xl" style="margin-top:7%; margin-right: 5%;"></i>
                                <p>62 812-3456-7890</p>
                            </li>
                            <li>
                                <i class="fa-solid fa-camera-retro fa-xl" style="margin-top:9%; margin-right: 5%;"></i>
                                <p>@shidokan.id</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bawah -->
        <div class="footer-bawah">
            <p><i class="fa-solid fa-copyright fa-lg"></i> 2024 - Situs Resmi Shidokan Indonesia by PixelMind Solution</p>
        </div>
    </div>
    <!-- 1 - THE BOOTSTRAP PLUGIN -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- 2 - FONT-STYLE PLUGIN -->
    <script src="https://kit.fontawesome.com/52139f278b.js" crossorigin="anonymous"></script>
    <!-- 3 - JAVASCRIPT FILES -->
    <script src="../../3_JavaScript/pagination.js"></script>
    <script src="../../3_JavaScript/app.js"></script>
    <script src="../../3_JavaScript/navbar2.0.js"></script>
    <script src="../../3_JavaScript/buttonLink.js"></script>
    <!-- 3.1 - To keep the Carousel JS Button -->
    <!-- 3.2 - Add the JSX Babel Code Below -->
</body>
</html>