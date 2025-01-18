// navbarBabel.js

// Perbaiki bawah ini:
/**
 * 1. Using className Instead of class: In JSX, class is replaced with className because class is a reserved keyword in JavaScript.
 * 2. Using style={{}} for Inline Styles: Inline styles need to be passed as an object in JSX. So, replace style="width: 80px;" with style={{ width: '80px' }}
 * 3. Placed Comments Outside JSX Tags: Comments like {/* This is a comment inside JSX */ //} should be placed outside the JSX tags themselves.
/**/

// React and Routing Setup
import React from 'react';
import { BrowserRouter as Router, Routes, Route, NavLink } from 'react-router-dom';

const Navbar = () => {
    return (
        <header class="headerStyle fixed-navbar">
            <a href="#" class="logo"><img src="../img/7-sprites/1-shidokan-logo/shidokan-indonesia.png" style="width:80px;"></a>
            <div class="menuToggle"></div>
            <nav class="navbarActive"> <!-- Class navbarActive hanya untuk memanggil li yang .active -->
                <ul class="adjust-navbar">
                    <li><a href="../1_home/index.html" >Home</a></li>
                    <li><a href="#" class="active">News<b class="arrow">&nbsp;▼</b></a>
                        <ul>
                            <li><a href="../2_news/nasional.html">National</a></li>
                            <li><a href="../2_news/internasional.html">International</a></li>
                        </ul>
                    </li>
                    <li><a href="../3_about-us/about-us.html">About Us<b>&nbsp;▼</b></a>
                        <ul>
                            <li><a href="../3_about-us/sejarah.html">History</a></li>
                            <li><a href="../3_about-us/profile.html">Profile</a></li>
                            <li><a href="../3_about-us/blackbelts/blackbelts.html">Blackbelts<b>&nbsp;+</b></a>
                                <ul>
                                    <li><a href="../3_about-us/blackbelts/1_shodan.html">Shodan</a></li>
                                    <li><a href="../3_about-us/blackbelts/2_nidan.html">Nidan</a></li>
                                    <li><a href="../3_about-us/blackbelts/3_sandan.html">Sandan</a></li>
                                    <li><a href="../3_about-us/blackbelts/4_yondan.html">Yondan</a></li>
                                    <li><a href="../3_about-us/blackbelts/5_godan.html">Godan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="scrollNavbar"><a href="../4_contact-us/contactAndDojoList.html">Contact & Dojo List<b>&nbsp;▼</b></a>
                        <ul>
                            <li><a href="#">DojoA</a></li>
                            <li><a href="#">DojoB</a></li>
                            <li><a href="#">DojoC</a></li>
                            <li><a href="#">DojoC</a></li>
                            <li><a href="#">DojoD</a></li>
                            <li><a href="#">DojoE</a></li>
                            <li><a href="#">DojoF</a></li>
                            <li><a href="#">DojoG</a></li>
                            <li><a href="#">DojoH</a></li>
                            <li><a href="#">DojoI</a></li>
                            <li><a href="#">DojoJ</a></li>
                            <li><a href="#">DojoK</a></li>
                            <li><a href="#">DojoL</a></li>
                            <li><a href="#">DojoM</a></li>
                            <li><a href="#">DojoN</a></li>
                            <li><a href="#">DojoO</a></li>
                        </ul>
                    </li>
                    <li><a href="../5_voice-from-shibucho/voiceFromShibucho.html">Voice from Shibucho<b>&nbsp;▼</b></a>
                        <ul>
                            <li><a href="../5_voice-from-shibucho/tataTertibDojo.html">Tata Tertib Dojo</a></li>
                            <li><a href="../5_voice-from-shibucho/joinUs.html">Join Us!</a></li>
                        </ul>
                    </li>
                    <li><a href="../6_sponsors/sponsors.html">Our Sponsors<b>&nbsp;▼</b></a>
                        <ul>
                            <li><a href="../6_sponsors/our_partner.html">Our Partner</a></li>
                            <li><a href="../6_sponsors/merchandise.html">Merchandise</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
    );
};

/*const Navbar = () => (
    
);*/

{/* This is a comment inside JSX */}
{/* Export Navbar if you want to use it in other files */}
{/* export default Navbar; */}

{/* Render Navbar to the div with id 'navbar' */}
{/* If only Navbar called, without Router */}
{/* ReactDOM.render(<Navbar />, document.getElementById('navbar')); */}

const Home = () => <div>Welcome to the home page</div>;
const News = () => <div>News Page</div>;
const NationalNews = () => <div>National News Page</div>;
const InternationalNews = () => <div>International News Page</div>;

const App = () => {
    <Router>
        <Navbar />
        <Routes>
            <Route path="/" element={<Home />} />
            <Route path="../1_main_page/2_news/berita.html" element={<News />} />
            <Route path="../1_main_page/2_news/nasional.html" element={<NationalNews />} />
            <Route path="../1_main_page/2_news/internasional.html" element={<InternationalNews />} />
        </Routes>
    </Router>
}

export default App;