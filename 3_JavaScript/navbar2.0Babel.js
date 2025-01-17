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
        <header className="fixed-navbar">
            <nav className="navbar navbar-expand-lg bg-custom">
                <div className="container-fluid">
                    <NavLink to="/" className="navbar-brand">
                        <img
                            src="../img/7-sprites/1-shidokan-logo/shidokan-indonesia.png"
                            alt="Shidokan Indonesia Logo"
                            style={{ width: '80px' }}
                        />
                    </NavLink>
                    <button className="navbar-toggler" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style={{ backgroundColor: 'rgb(110, 4, 110)' }}>
                        <span className="navbar-toggler-icon"></span>
                    </button>

                    <div className="collapse navbar-collapse" id="navbarNav">
                        <ul className="navbar-nav">
                            <li className="nav-item">
                                <NavLink
                                    to="/"
                                    className={({isActive}) =>
                                        isActive ? 'nav-link active' : 'nav-link'
                                    }
                                >
                                    Home
                                </NavLink>
                            </li>
                            <li className="nav-item dropdown">
                            <NavLink to="/" className="nav-link dropdown-toggle" id="newsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                News
                            </NavLink>
                            <ul className="dropdown-menu" aria-labelledby="newsDropdown">
                                <li>
                                    <NavLink
                                        to="../2_news/berita.html"
                                        className= {({isActive}) =>
                                            isActive ? 'dropdown-item active' : 'dropdown-item'
                                        }
                                    >
                                        News
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink
                                        to="../2_news/nasional.html"
                                        className= {({isActive}) =>
                                            isActive ? 'dropdown-item active' : 'dropdown-item'
                                        }
                                    >
                                        &nbsp;National
                                    </NavLink>
                                </li>
                                <li>
                                    <NavLink
                                        to="../2_news/internasional.html"
                                        className= {({isActive}) =>
                                            isActive ? 'dropdown-item active' : 'dropdown-item'
                                        }
                                    >
                                        &nbsp;International
                                    </NavLink>
                                </li>
                            </ul>
                            </li>
                            <li className="nav-item dropdown">
                                <a className="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    About Us
                                </a>
                                <ul className="dropdown-menu" aria-labelledby="aboutDropdown">
                                    <li><a className="dropdown-item" href="../3_about-us/about-us.html">About Us</a></li>
                                    <li><a className="dropdown-item" href="../3_about-us/sejarah.html">&nbsp;History</a></li>
                                    <li><a className="dropdown-item" href="../3_about-us/profile.html">&nbsp;Profile</a></li>
                                    <li className="dropdown-submenu active">
                                        <a className="dropdown-item dropdown-toggle active" href="#" id="blackbeltsmenu">&nbsp;Blackbelts</a>
                                        <ul className="dropdown-menu" aria-labelledby="blackbeltsmenu">
                                            <li><a className="dropdown-item active" href="#">&nbsp;Blackbelts</a></li>
                                            <li><a className="dropdown-item" href="../3_about-us/blackbelts/1_shodan.html">&nbsp;&nbsp;Shodan</a></li>
                                            <li><a className="dropdown-item" href="../3_about-us/blackbelts/2_nidan.html">&nbsp;&nbsp;Nidan</a></li>
                                            <li><a className="dropdown-item" href="../3_about-us/blackbelts/3_sandan.html">&nbsp;&nbsp;Sandan</a></li>
                                            <li><a className="dropdown-item" href="../3_about-us/blackbelts/4_yondan.html">&nbsp;&nbsp;Yondan</a></li>
                                            <li><a className="dropdown-item" href="../3_about-us/blackbelts/5_godan.html">&nbsp;&nbsp;Godan</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li className="nav-item dropdown">
                            <a className="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Contact & Dojo List
                            </a>
                            <ul className="dropdown-menu" aria-labelledby="contactDropdown" style={{ maxHeight: 200, overflowY: "auto", overflowX: "hidden" }}>
                                <li><a className="dropdown-item" href="../4_contact-us/contactAndDojoList.html">Contacts & Dojo List</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoA</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoB</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoC</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoD</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoE</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoF</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoG</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoH</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoI</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoJ</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoK</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoL</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoM</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoN</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoO</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoP</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoQ</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoR</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoS</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoT</a></li>
                                <li><a className="dropdown-item" href="#">&nbsp;DojoU</a></li>
                            </ul>
                            </li>
                            <li className="nav-item dropdown">
                            <a className="nav-link dropdown-toggle" href="#" id="shibuchoDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Voice from Shibucho
                            </a>
                            <ul className="dropdown-menu" aria-labelledby="shibuchoDropdown">
                                <li><a className="dropdown-item" href="../5_voice-from-shibucho/voiceFromShibucho.html">Voice from Shibucho</a></li>
                                <li><a className="dropdown-item" href="../5_voice-from-shibucho/tataTertibDojo.html">&nbsp;Tata Tertib Dojo</a></li>
                                <li><a className="dropdown-item" href="../5_voice-from-shibucho/joinUs.html">&nbsp;Join Us!</a></li>
                            </ul>
                            </li>
                            <li className="nav-item dropdown">
                            <a className="nav-link dropdown-toggle" href="#" id="sponsorsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Our Sponsors
                            </a>
                            <ul className="dropdown-menu" aria-labelledby="sponsorsDropdown">
                                <li><a className="dropdown-item" href="../6_sponsors/sponsors.html">Our Sponsors</a></li>
                                <li><a className="dropdown-item" href="../6_sponsors/our_partner.html">&nbsp;Our Partner</a></li>
                                <li><a className="dropdown-item" href="../6_sponsors/merchandise.html">&nbsp;Merchandise</a></li>
                            </ul>
                            </li>
                        </ul>
                    </div>
                </div>
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