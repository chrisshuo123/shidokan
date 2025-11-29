<!-- Footer -->
    <div class="footer" style="background-color: black;">
        <!-- Footer Atas -->
        <div class="footer-atas">
            <div class="flex-shidokanlogo-footer" style="padding-top:3%;">
                <ul class="footer-container">
                    <!-- First Logo -->
                    <li class="footer-item footer-logo">
                        <img src="<?= BASEURL; ?>/img/7-sprites/1-shidokan-logo/shidokan-internasional.png" alt="Logo 1">
                    </li>
                    <!-- Title and Description -->
                    <li class="footer-item footer-text">
                        <h3>Shidokan</h3>
                        <p>(Mottonya) Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla cupiditate, libero quod optio tempora rerum blanditiis quas dolore nemo ad sint possimus explicabo cum commodi, totam maiores cumque placeat consequuntur?</p>
                    </li>
                    <!-- Second Logo -->
                    <li class="footer-item footer-logo">
                        <img src="<?= BASEURL; ?>/img/shidokan-indonesia.png" alt="Logo 2">
                        <!-- <img src="<?= BASEURL; ?>/img/7-sprites/1-shidokan-logo/shidokan-indonesia.png" alt="Logo 2"> -->
                    </li>
                </ul>
                <div class="flex-nav-footer">
                    <ul>
                        <li><button class="button-style button-purple" data-link="#">Home</button></li>
                        <li><button class="button-style button-purple" data-link="#">News</button></li>
                        <li><button class="button-style button-purple" data-link="#">About Us</button></li>
                        <li><button class="button-style button-purple" data-link="#">Contact & Dojo List</button></li>
                        <li><button class="button-style button-purple" data-link="#">Voice from Shibucho</button></li>
                        <li><button class="button-style button-purple" data-link="#">Our Sponsors</button></li>
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
            <p><i class="fa-solid fa-copyright fa-lg"></i> 2024 - Situs Resmi Shidokan Indonesia by TTank360</p>
        </div>
    </div>
    <!-- 1 - THE BOOTSTRAP PLUGIN -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <!-- Untuk menjalankan fungsi pop-up nya: -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- 2 - FONT-STYLE PLUGIN -->
    <script src="https://kit.fontawesome.com/52139f278b.js" crossorigin="anonymous"></script>
    <!-- 3 - JAVASCRIPT FILES -->
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL; ?>/js/app.js"></script>
    <script src="<?= BASEURL; ?>/js/buttonLink.js"></script>
    <script src="<?= BASEURL; ?>/js/carouselHome.js"></script>
    <script src="<?= BASEURL; ?>/js/navbar2.1.js"></script>
    <script src="<?= BASEURL; ?>/js/navbar2.0Babel.js"></script>
    <script src="<?= BASEURL; ?>/js/map.js"></script>
    <script src="<?= BASEURL; ?>/js/pagination.js"></script>
    <script src="<?= BASEURL; ?>/js/blackbeltStatus.js"></script>
    <!-- Navbar Sebelumnya -->
    <script src="<?= BASEURL; ?>/js/navbar2.0.js"></script>
    <script type="text/babel" src="<?= BASEURL; ?>/js/navbar2.0Babel.js"></script>
    <!-- Include your navbarBabel.js file -->
    <script type="text/javascript" src="<?= BASEURL; ?>/js/navbarBabel.js"></script>
    <!-- 3.1 - To keep the Carousel JS Button -->
    <!-- 3.2 - Add the JSX Babel Code Below -->
    <!-- Include Babel to allow JSX syntax -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-standalone/6.26.0/babel.min.js"></script>
    <script src="<?= BASEURL; ?>/js/popUp.js"></script>
    <!-- Load Google Maps API with your API key -->
    <!--<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>-->
</body>
</html>