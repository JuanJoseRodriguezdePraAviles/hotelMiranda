<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; 
             frame-src 'self' https://www.youtube.com https://www.youtube-nocookie.com https://www.google.com; 
             style-src 'self' https://fonts.googleapis.com https://cdn.jsdelivr.net 'unsafe-inline'; 
             font-src 'self' https://fonts.gstatic.com data:; 
             script-src 'self' https://cdn.jsdelivr.net 'unsafe-inline';">

    <title>Hotel Miranda</title>

    @stack('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Roboto:ital,wght@0,100..900;1,100..900&family=Sora:wght@100..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <header class="header">
        <div class="header__comfortable">
            <p>We Make Your Feel Comfortable</p>
        </div>
        <div class="header__menu">
            <div class="hamburguer-container">
                <img class="hamburguer" src="./Images/hamburguer.svg" />
            </div>
            <div class="title-container">
                <div class="web-icon-container">
                    <img src="/Images/web-icon.svg" />
                </div>
                <div class="web-title-container">
                    <img src="/Images/hotel-miranda.svg" />
                </div>
            </div>
            <div class="links">
                <div class="menu-link">
                    <p><a href="{{ route('aboutus.index') }}">About Us</a></p>
                </div>
                <div class="menu-link">
                    <p><a href="{{ route('rooms.index', ['rooms' => true]) }}">Rooms</a></p>
                </div>
                <div class="menu-link">
                    <p><a href="{{ route('rooms.index', ['offers' => true]) }}">Offers</a></p>
                </div>
                <div class="menu-link">
                    <p><a href="{{ route('contact') }}">Contact</a></p>
                </div>
            </div>
            <div class="account-search-container">
                <div class="account-container">
                    <img src="/Images/account-icon.svg" />
                </div>
                <div class="search-container">
                    <img src="/Images/search-icon.svg" />
                </div>
            </div>
        </div>
    </header>
    <div class="menu-extended">
        <div class="menu-link">
            <p><a href="./AboutUs/">About Us</a></p>
        </div>
        <div class="menu-link">
            <p><a href="{{ route('rooms.index', ['rooms' => true]) }}">Rooms</a></p>
        </div>
        <div class="menu-link">
            <p><a href="{{ route('rooms.index', ['offers' => true]) }}">Offers</a></p>
        </div>
        <div class="menu-link">
            <p><a href="./contact/">Contact</a></p>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <div class="hotel-resume">
        <div class="hotel-info-container">
            <div class="hotel-title-icon-container">
                <div class="web-icon-container">
                    <p>H</p>
                </div>
                <div class="web-title-container">
                    <img src="/Images/hotel-miranda.svg" />
                </div>
            </div>
            <p class="hotel-description">
                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut
                labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <div class="social-links">
                <img src="/Images/facebook-icon.svg" />
                <div class="link-container">
                    <img src="/Images/twitter-icon.svg" />
                </div>
                <img src="/Images/be-icon.svg" />
                <img src="/Images/linkedin-icon.svg" />
                <img src="/Images/youtube-icon.svg" />
            </div>
        </div>
        <div class="services-container">
            <h2>Services</h2>
            <div class="services-list">
                <p>+ Restaurant & Bar</p>
                <p>+ Swimming Pool</p>
                <p>+ Wellness & Spa</p>
                <p>+ Restaurant</p>
                <p>+ Conference Room</p>
                <p>+ Coctail Party House</p>
                <p>+ Gaming Zone</p>
                <p>+ Marriage Party</p>
                <p>+ Party Planning</p>
                <p>+ Tour Consultancy</p>
            </div>
        </div>
        <div class="contact-us-container">
            <h2>Contact Us</h2>
            <div class="contact-methods">
                <div class="contact-method">
                    <img src="/Images/phone.svg" />
                    <div class="field-container">
                        <h6>Phone Number</h6>
                        <p>+987 876 765 76 577</p>
                    </div>
                </div>
            </div>
            <div class="contact-methods">
                <div class="contact-method">
                    <img src="/Images/email.svg" />
                    <div class="field-container">
                        <h6>Email</h6>
                        <p>info@webmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contact-methods">
                <div class="contact-method">
                    <img src="/Images/location.svg" />
                    <div class="field-container">
                        <h6>Hotel Address</h6>
                        <p>19/A, Cirikon City hall Tower New York, NYC</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-line">
            <p>Copyright By@Example - 2020</p>
        </div>
        <div class="footer-line">
            <p>Terms of Use<span>|</span>Privacy Environmental Policy</p>
        </div>
    </footer>
</body>
</html>