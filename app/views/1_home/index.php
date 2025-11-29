

    <!-- Header Carousel -->
    <div id="customCarousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#customCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-image banner_home_shidokanTeam"></div>
                <!--<img src="../img/1-banner/banner_baru.png" class="d-block w-100" alt="Slide 1">-->
                <div class="carousel-caption">
                    <h3>Team Shidokan Honbu!</h3>
                    <!--<p>Discover the best moments captured in a single frame.</p>-->
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('<?= BASEURL; ?>/img/1-banner/banner-sample-2.jpg');"></div>
                <!--<img src="../img/1-banner/banner-sample-2.jpg" class="d-block w-100" alt="Slide 2">-->
                <div class="carousel-caption">
                    <h3>Explore Slide 2</h3>
                    <p>Uncover new perspectives and innovative ideas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('<?= BASEURL; ?>/img/1-banner/banner-sample-1.jpg');"></div>
                <!--<img src="../img/1-banner/banner-sample-1.jpg" class="d-block w-100" alt="Slide 3">-->
                <div class="carousel-caption">
                    <h3>Experience Slide 3</h3>
                    <p>Take a step forward into a world of possibilities.</p>
                </div>
            </div>
        </div>
    
        <!-- Navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#customCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#customCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="container">
        <!-- INTRODUCTION -->
        <div class="paragraph-intro font-responsive intro-home" style="margin-top: 5%;">
            <h1>Selamat datang di Shidokan Indonesia</h1>
            <div class="fullParagraph">
                <div class="image-text-wrapper" style="width: 80%; margin:0% auto;">
                    <img src="<?= BASEURL; ?>/img/2-instruktur-face/2-home-profil.JPG" class="intro-image">
                    <div class="text-content">
                        <p style="font-size: 1.2rem;">Sebuah organisasi Kyokushin Internasional yang langsung terpusat dengan Jepang ini didirikan oleh Yoshiji Soeno, founder dari Shidokan sekaligus merupakan salah satu murid berprestasinya Sosaimas Oyama.  Yoshiji Soeno, mempercayai serta menunjuk  Sensei Erick Danurahardja, mantan anggota dari Kyokushin Karate Indonesia (KKI) yang saat itu dipimpin oleh Shihan JB Sujoto, untuk menjabat Head Branch Shidokan Indonesia demi mengembang dan memperkenalkan organisasi Shidokan di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-dark" style="margin: 2% auto; margin-bottom:-2%; display:block; font-size: 1.2rem;">Lihat Sejarah Kami</button>
        <div class="bottomline"></div>

        <!-- Berita -->
        <!--<div class="berita" style="margin-bottom: 7%;">
            <h1>Berita Terkini</h1>
            <p style="text-align:center;">Berita terupdate seputar Shidokan baik pada tingkat Nasional maupun Internasional</p>
            <h2 style="text-align:center;">Berita Nasional</h2>
            <!-- Carousel berita nasional -->
        <!--   <div class="carousel-berita">
                <div class="list-carousel-berita font-berita" style="margin-bottom: 2%;">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: black; padding:0;">
                            <img src="../img/3-news/shidokan-news-sample-1.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: gray;">
                            <p>Tanggal | Penulis | Nama Media</p>
                            <h3>JUDUL</h3>
                            <p>isi....bla bla bla...<button type="button" class="btn btn-dark" style="padding:0px 5px;">Selengkapnya</button></p>
                        </div>
                    </div>
                </div>
                <div class="list-carousel-berita font-berita" style="margin-bottom: 2%;">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: black; padding:0;">
                            <img src="../img/3-news/shidokan-news-sample-1.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: gray;">
                            <p>Tanggal | Penulis | Nama Media</p>
                            <h3>JUDUL</h3>
                            <p>isi....bla bla bla...<button type="button" class="btn btn-dark" style="padding:0px 5px;">Selengkapnya</button></p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-dark">Lihat Berita Nasional Selengkapnya</button>
            </div>
            
            <h2 style="text-align:center;">Berita Internasional</h2>
            <!-- Carousel berita nasional -->
        <!--  <div class="carousel-berita">
                <div class="list-carousel-berita font-berita" style="margin-bottom: 2%;">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: black; padding:0;">
                            <img src="../img/3-news/shidokan-news-sample-1.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: gray;">
                            <p>Tanggal | Penulis | Nama Media</p>
                            <h3>JUDUL</h3>
                            <p>isi....bla bla bla...<button type="button" class="btn btn-dark" style="padding:0px 5px;">Selengkapnya</button></p>
                        </div>
                    </div>
                </div>
                <div class="list-carousel-berita font-berita" style="margin-bottom: 2%;">
                    <div class="row justify-content-center">
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: black; padding:0;">
                            <img src="../img/3-news/shidokan-news-sample-1.jpg" class="img-fluid">
                        </div>
                        <div class="col-md-5 col-sm-6 col-12" style="background-color: gray;">
                            <p>Tanggal | Penulis | Nama Media</p>
                            <h3>JUDUL</h3>
                            <p>isi....bla bla bla...<button type="button" class="btn btn-dark" style="padding:0px 5px;">Selengkapnya</button></p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-dark">Lihat Berita Internasional Selengkapnya</button>
            </div>
        </div>
        <div class="bottomline" style="margin-bottom: 5%;"></div>-->

        <!-- Profile -->
        

        <!-- Daftar Dojo -->
        <div class="katalog-layout">
            <h1>Daftar Dojo</h1>
            <div class="row justify-content-md-center justify-content-center text-center daftar-dojo" style="margin-left:1.5%;">
                <!-- #1 - Shidokan Ikigai Honbu -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding1.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Shidokan Ikigai Honbu</p>
                </div>
                <!-- #2 - As-Sa'adah Integrated Islamic Elementary School -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding2.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">As-Sa'adah Integrated Islamic Elementary School</p>
                </div>
                <!-- #3 - Asrama Denpom III/1 Shidokan Jawa Barat Honbu -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding3.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Asrama Denpom III/1 Shidokan Jawa Barat Honbu</p>
                </div>
                <!-- #4 - Shidokan Penerbad Semarang -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding4.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Shidokan Penerbad Semarang</p>
                </div>
                <!-- #5 - Shidokan Yuan Surabaya Barat -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding4.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Shidokan Yuan Surabaya Barat</p>
                </div>
                <!-- #6 - Shidokan Main Branch (Walikota Mustajab) -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding4.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Shidokan Main Branch (Walikota Mustajab)</p>
                </div>
                <!-- #7 - Shidokan Bali Lion Dojo -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding4.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Shidokan Bali Lion Dojo</p>
                </div>
                <!-- #8 - Kyokushin Ampel -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding4.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Kyokushin Ampel</p>
                </div>
                <!-- #9 - Kyokushin Alkhairiyah -->
                <div class="catalog-btn col-lg-4 col-md-5 col-5" data-link="#">
                    <img src="<?= BASEURL; ?>/img/3-katalog/dojoBuilding4.png" class="img-fluid">
                    <p style="padding:0 1% 0 1%;">Kyokushin Alkhairiyah</p>
                </div>
            </div>
        </div>
        <div class="bottomline" style="margin-bottom: 5%;"></div>

        <!-- Our Partner -->
        <div class="our-partner font-responsive">
            <h1>Our Partner</h1>
            <div class="row justify-content-md-center justify-content-center text-center">
                <!-- Data-Link tinggal diterapin URL Saja -->
                <div class="logo_dataLink col-md-2 col-5" style="padding:0; margin-right:3%; margin-bottom: 2%;" data-link="#">
                    <img src="<?= BASEURL; ?>/img/5-partner/tokoemas.png" class="img-fluid">
                    <p>Toko Emas</p>
                </div>
                <div class="logo_dataLink col-md-2 col-5" style="padding:0; margin-right:3%; margin-bottom: 2%;" data-link="#">
                    <img src="<?= BASEURL; ?>/img/5-partner/uc1000.png" class="img-fluid">
                    <p>You C-1000</p>
                </div>
                <div class="logo_dataLink col-md-2 col-5" style="padding:0; margin-right:3%; margin-bottom: 2%;" data-link="#">
                    <img src="<?= BASEURL; ?>/img/5-partner/tokoemas.png" class="img-fluid">
                    <p>Shidokan Jepang</p>
                </div>
                <div class="logo_dataLink col-md-2 col-5" style="padding:0; margin-right:3%; margin-bottom: 2%;" data-link="#">
                    <img src="<?= BASEURL; ?>/img/5-partner/uc1000.png" class="img-fluid">
                    <p>Logo A</p>
                </div>
                <div class="logo_dataLink col-md-2 col-5" style="padding:0; margin-right:3%; margin-bottom: 2%;" data-link="#">
                    <img src="<?= BASEURL; ?>/img/5-partner/tokoemas.png" class="img-fluid">
                    <p>Logo B</p>
                </div>
                <div class="logo_dataLink col-md-2 col-5" style="padding:0; margin-right:3%; margin-bottom: 2%;" data-link="#">
                    <img src="<?= BASEURL; ?>/img/5-partner/uc1000.png" class="img-fluid">
                    <p>Logo C</p>
                </div>
            </div>
        </div>
        <div class="bottomline"></div>

        <!-- Merchandise -->
        <div class="merchandise">
            <h1 style="margin-top:3%;">Merchandise</h1>
            <div class="row justify-content-md-center justify-content-center text-center">
                <div class="col-md-3 col-5" style="padding:0; margin-right:3%;">
                    <img src="<?= BASEURL; ?>/img/6-merchandise/uc1000_merchandise.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-5" style="padding:0; margin-right:3%;">
                    <img src="<?= BASEURL; ?>/img/6-merchandise/tomoemas1_merchandise.png" class="img-fluid">
                </div>
                <div class="col-md-3 col-5" style="padding:0; margin-right:3%;">
                    <img src="<?= BASEURL; ?>/img/6-merchandise/tokoemas2_merchandise.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    