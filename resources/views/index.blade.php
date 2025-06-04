<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; 
             frame-src 'self' https://www.youtube.com https://www.youtube-nocookie.com https://www.google.com; 
             style-src 'self' https://fonts.googleapis.com https://cdn.jsdelivr.net 'unsafe-inline'; 
             font-src 'self' https://fonts.gstatic.com data:; 
             script-src 'self' https://cdn.jsdelivr.net 'unsafe-inline';">

    <title>Hotel Miranda</title>

    <link rel="stylesheet" href="./Styles/CSS/home.css">
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
                    <img src="./Images/web-icon.svg" />
                </div>
                <div class="web-title-container">
                    <img src="./Images/hotel-miranda.svg" />
                </div>
            </div>
            <div class="links">
                <div class="menu-link">
                    <p><a href="./Pages/About.html">About Us</a></p>
                </div>
                <div class="menu-link">
                    <p><a href="./Pages/Rooms.html">Rooms</a></p>
                </div>
                <div class="menu-link">
                    <p><a href="./Pages/Offers.html">Offers</a></p>
                </div>
                <div class="menu-link">
                    <p><a href="./Pages/Contact.html">Contact</a></p>
                </div>
            </div>
            <div class="account-search-container">
                <div class="account-container">
                    <img src="./Images/account-icon.svg" />
                </div>
                <div class="search-container">
                    <img src="./Images/search-icon.svg" />
                </div>
            </div>
        </div>
    </header>
    <div class="menu-extended">
        <div class="menu-link">
            <p><a href="./Pages/About.html">About Us</a></p>
        </div>
        <div class="menu-link">
            <p><a href="./Pages/Rooms.html">Rooms</a></p>
        </div>
        <div class="menu-link">
            <p><a href="./Pages/Offers.html">Offers</a></p>
        </div>
        <div class="menu-link">
            <p><a href="./Pages/Contact.html">Contact</a></p>
        </div>
    </div>
    <div class="page-title perfect-base-container">
        <div class="ultimate-luxury-container">
            <h2>THE ULTIMATE LUXURY EXPERIENCE</h2>
        </div>
        <div class="luxury-title-container">
            <h1>The Perfect Base For You</h1>
        </div>
        <div class="tour-learn-btn-container">
            <button class="btn--light">
                <a href="./Rooms.html">TAKE A TOUR</a>
            </button>
            <button class="btn--dark">
                <a>LEARN MORE</a>
            </button>
        </div>
    </div>
    <div class="calendar-container">
        <div class="calendar-label-icon-input-container">
            <label>Arrival Date</label>
            <div id="icon-arrival-input-container">
                <img src="./Images/calendar-icon.svg" />
                <input id="arrival-date-input" type="date" />
                <span id="arrival-formatted-date"></span>
            </div>
        </div>
        <div class="calendar-label-icon-input-container">
            <label>Return Date</label>
            <div id="icon-return-input-container">
                <img src="./Images/calendar-icon.svg" />
                <div class="input-container">
                    <input id="return-date-input" type="date"></input>
                    <span id="return-formatted-date"></span>
                </div>
            </div>
        </div>
        <button class="btn-availability">
            <a href="./Rooms.html">CHECK AVAILABILITY</a>
        </button>
    </div>

    <div class="discover-section">
        <div class="about-us">
            <h6>ABOUT US</h6>
            <h2>Discover Our Underground.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>
            <button class="btn-book-now">BOOK NOW</button>
        </div>

        <div class="benefit-cards">
            <div class="benefit-card benefit-card--light">
                <img src="./Images/staff.jpg" />
                <div class="benefit-description">
                    <img src="./Images/team-icon.svg" />
                    <h2>Strong Team</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="benefit-card benefit-card--black">
                <img src="./Images/luxury-room.jpg" />
                <div class="benefit-description">
                    <img src="./Images/calendar.svg" />
                    <h2>Luxury Room</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="picked-rooms">
        <h6>ROOMS</h6>
        <h2>Hand Picked Rooms</h2>
        <div class="swiper mySwiper sliderWrapper">
            <div class="rooms-container swiper-wrapper">
                <div class="swiper-slide">
                    <div class="room-card">
                        <div class="image-container">
                            <img src="./Images/room9.jpg" />
                            <div class="room-features">
                                <img src="./Images/icon1.svg" />
                                <img src="./Images/icon2.svg" />
                                <img src="./Images/icon3.svg" />
                                <img src="./Images/icon4.svg" />
                                <img src="./Images/icon5.svg" />
                                <img src="./Images/icon6.svg" />
                                <img src="./Images/icon7.svg" />
                            </div>
                        </div>
                        <div class="image-description">
                            <h2>Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.</p>
                            <div>
                                <p class="room-price">$345<span>/Night</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="room-card">
                        <div class="image-container">
                            <img src="./Images/room12.jpg" />
                            <div class="room-features">
                                <img src="./Images/icon1.svg" />
                                <img src="./Images/icon2.svg" />
                                <img src="./Images/icon3.svg" />
                                <img src="./Images/icon4.svg" />
                                <img src="./Images/icon5.svg" />
                                <img src="./Images/icon6.svg" />
                                <img src="./Images/icon7.svg" />
                            </div>
                        </div>
                        <div class="image-description">
                            <h2>Minimal Duplex Room</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore.</p>
                            <div>
                                <p class="room-price">$345<span>/Night</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <div class="intro-video-container">
        <div class="video-description">
            <h6>INTRO VIDEO</h6>
            <h2>Meet With Our Luxury Place.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex
                ea commodo consequat you have to understand this.</p>
            <button class="btn-book-now">BOOK NOW</button>
        </div>
        <div class="background-side">
            <iframe width="100%" height="194"
                src="https://www.youtube.com/embed/Bu3Doe45lcU?controls=0&showInfo=0&modestbranding=1&rel=0&enablejsapi=1"
                frameborder="0">
            </iframe>
        </div>
    </div>

    <div class="core-features">
        <h6>FACILITIES</h6>
        <h2>Core Features</h2>
        <div class="swiper-core-features mySwiper-core-facilities sliderWrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hotel-feature bg-1">
                        <img src="./Images/rating.svg" />
                        <div class="field-container">
                            <h2>Have High Rating</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hotel-feature bg-2">
                        <img src="./Images/hour.svg" />
                        <div class="field-container">
                            <h2>Quiet Hours</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hotel-feature bg-3">
                        <img src="./Images/location-icon.svg" />
                        <div class="field-container">
                            <h2>Best Locations</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hotel-feature bg-4">
                        <img src="./Images/no-hour.svg" />
                        <div class="field-container">
                            <h2>Free Cancellation</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hotel-feature bg-5">
                        <img src="./Images/credit-card.svg" />
                        <div class="field-container">
                            <h2>Payment Options</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hotel-feature bg-6">
                        <img src="./Images/percent.svg" />
                        <div class="field-container">
                            <h2>Special Offers</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination-core-facilities"></div>
        </div>
    </div>

    <div class="menu">
        <h6>MENU</h6>
        <h2>Our Foods Menu</h2>
        <div class="mySwiper-menu swiper-menu">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="food-page">
                        <img src="./Images/food1.jpg" />
                        <div class="field-container">
                            <h2>Eggs & Bacon</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-page">
                        <img src="./Images/food2.jpg" />
                        <div class="field-container">
                            <h2>Tea or Coffe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-page">
                        <img src="./Images/food3.jpg" />
                        <div class="field-container">
                            <h2>Chia Oatmeal</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-page">
                        <img src="./Images/food4.jpeg" />
                        <div class="field-container">
                            <h2>Eggs & Bacon</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-page">
                        <img src="./Images/food5.jpg" />
                        <div class="field-container">
                            <h2>Tea or Coffe</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="food-page">
                        <img src="./Images/food6.jpg" />
                        <div class="field-container">
                            <h2>Chia Oatmeal</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <div class="images">
        <div class="swiper-images mySwiper-images sliderWrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./Images/food7.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="./Images/food8.jpg" />
                </div>
                <div class="swiper-slide">
                    <img src="./Images/food9.jpg" />
                </div>
            </div>
            <div class="swiper-pagination-images"></div>
        </div>
    </div>

    <div class="achievements">
        <div class="achievement">
            <img src="./Images/rocket.svg" />
            <div class="value">
                <h2>84k</h2>
                <p>+</p>
            </div>
            <p>Projects are Completed</p>
        </div>
        <div class="achievement">
            <img src="./Images/backers.svg" />
            <div class="value">
                <h2>10M</h2>
                <p>+</p>
            </div>
            <p>Active Backers Around World</p>
        </div>
        <div class="achievement">
            <img src="./Images/funds.svg" />
            <div class="value">
                <h2>02k</h2>
                <p>+</p>
            </div>
            <p>Idea Raised Funds</p>
        </div>
        <div class="achievement">
            <img src="./Images/categories.svg" />
            <div class="value">
                <h2>100M</h2>
                <p>+</p>
            </div>
            <p>Categories Served</p>
        </div>
    </div>

    <div class="hotel-resume">
        <div class="hotel-info-container">
            <div class="hotel-title-icon-container">
                <div class="web-icon-container">
                    <p>H</p>
                </div>
                <div class="web-title-container">
                    <img src="./Images/hotel-miranda.svg" />
                </div>
            </div>
            <p class="hotel-description">
                Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut
                labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
            </p>
            <div class="social-links">
                <img src="./Images/facebook-icon.svg" />
                <div class="link-container">
                    <img src="./Images/twitter-icon.svg" />
                </div>
                <img src="./Images/be-icon.svg" />
                <img src="./Images/linkedin-icon.svg" />
                <img src="./Images/youtube-icon.svg" />
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
                    <img src="./Images/phone.svg" />
                    <div class="field-container">
                        <h6>Phone Number</h6>
                        <p>+987 876 765 76 577</p>
                    </div>
                </div>
            </div>
            <div class="contact-methods">
                <div class="contact-method">
                    <img src="./Images/email.svg" />
                    <div class="field-container">
                        <h6>Email</h6>
                        <p>info@webmail.com</p>
                    </div>
                </div>
            </div>
            <div class="contact-methods">
                <div class="contact-method">
                    <img src="./Images/location.svg" />
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

    <script src="./js/script.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        window.onload = function () {
            const swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                centeredSlides: true,
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                    renderBullet: function (index, className) {
                        return `<span class="${className}"></span>`;
                    },
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1000: {
                        slidesPerView: 2.5
                    }
                }
            });

            const swiperCoreFacilities = new Swiper(".mySwiper-core-facilities", {
                slidesPerView: 3,
                slidesPerGroup: 3,
                grid: {
                    rows: 2,
                    fill: 'row'
                },
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination-core-facilities",
                    clickable: true,
                    renderBullet: function (index, className) {
                        return `<span class="${className}"></span>`;
                    },
                },
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        slidesPerGroup: 1,
                        grid: {
                            rows: 1,
                        },
                    },
                    1000: {
                        slidesPerView: 3,
                        slidesPerGroup: 3,
                        grid: {
                            rows: 2,
                        },
                    },
                }
            });

            const swiperMenu = new Swiper(".mySwiper-menu", {
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                breakpoints: {
                    1000: {
                        slidesPerView: 2,
                        slidesPerGroup: 6,
                        grid: {
                            rows: 3,
                            fill: "row"
                        }
                    }
                }
            });
            const swiperImages = new Swiper(".mySwiper-images", {
                spaceBetween: 30,
                pagination: {
                    el: ".swiper-pagination-images",
                    clickable: true,
                    renderBullet: function (index, className) {
                        return `<span class="${className}"></span>`;
                    },
                }
            });
        }
    </script>
</body>

</html>