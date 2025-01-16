// navbarBabel.js
const Navbar = () => (
    <header class="fixed-navbar">
        <nav class="navbar navbar-expand-lg bg-custom"> {/*Recently .navbar-light .bg-light*/}
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="../img/7-sprites/1-shidokan-logo/shidokan-indonesia.png" alt="Shidokan Indonesia Logo" style="width: 80px;"/>
            </a>
            <button class="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: rgb(110, 4, 110);">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        News
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="newsDropdown">
                        <li><a class="dropdown-item active" href="../2_news/berita.html">News</a></li>
                        <li><a class="dropdown-item" href="../2_news/nasional.html">&nbsp;National</a></li>
                        <li><a class="dropdown-item" href="../2_news/internasional.html">&nbsp;International</a></li>
                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="../3_about-us/about-us.html">About Us</a></li>
                            <li><a class="dropdown-item" href="../3_about-us/sejarah.html">&nbsp;History</a></li>
                            <li><a class="dropdown-item" href="../3_about-us/profile.html">&nbsp;Profile</a></li>
                            <li class="dropdown-submenu active">
                                <a class="dropdown-item dropdown-toggle active" href="#" id="blackbeltsmenu">&nbsp;Blackbelts</a>
                                <ul class="dropdown-menu" aria-labelledby="blackbeltsmenu">
                                    <li><a class="dropdown-item active" href="#">&nbsp;Blackbelts</a></li>
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
                        <li><a class="dropdown-item" href="#">&nbsp;DojoA</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoB</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoC</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoD</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoE</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoF</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoG</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoH</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoI</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoJ</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoK</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoL</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoM</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoN</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoO</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoP</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoQ</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoR</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoS</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoT</a></li>
                        <li><a class="dropdown-item" href="#">&nbsp;DojoU</a></li>
                        {/* Add more Dojos as needed */}
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
);

{/* This is a comment inside JSX */}
{/* Export Navbar if you want to use it in other files */}
{/* export default Navbar; */}

{/* Render Navbar to the div with id 'navbar' */}
ReactDOM.render(<Navbar />, document.getElementById('navbar'));
