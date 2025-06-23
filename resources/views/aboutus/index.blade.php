@extends('../layouts/layout')
<div class="about-us-title">
    <div class="ultimate-luxury-container">
        <h2>THE ULTIMATE LUXURY</h2>
    </div>
    <div class="luxury-title-container">
        <h1>About Us</h1>
    </div>
    <div class="breadcrumb">
        <p><a href="{{ route('rooms.index') }}">Home</a> | <span>About</span></p>
    </div>
</div>

<div class="video-presentation">
    <iframe width="100%" height="194"
        src="https://www.youtube.com/embed/Bu3Doe45lcU?controls=0&showInfo=0&modestbranding=1&rel=0&enablejsapi=1"
        frameborder="0">
    </iframe>
    <p>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</p>
</div>

<div class="hotel-benefits">
    <div class="benefit">
        <img src="./../Images/breakfast.svg" />
        <h6>BREAKFAST</h6>
    </div>
    <div class="benefit">
        <svg width="57" height="53" viewBox="0 0 57 53" fill="#BEAD8E" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <rect x="0.0250244" y="0.0673828" width="56.52" height="52.93" fill="url(#pattern0_54_1230)"/>
            <defs>
            <pattern id="pattern0_54_1230" patternContentUnits="objectBoundingBox" width="1" height="1">
            <use xlink:href="#image0_54_1230" transform="matrix(0.0139773 0 0 0.0149254 -0.0031845 0)"/>
            </pattern>
            <image id="image0_54_1230" width="72" height="67" preserveAspectRatio="none" xlink:href="data:image/png;base64,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"/>
            </defs>
            </svg>
            
        <h6>AIRPORT PICKUP</h6>
    </div>
    <div class="benefit">
        <img src="./../Images/city-guide.svg" />
        <h6>CITY GUIDE</h6>
    </div>
    <div class="benefit">
        <img src="./../Images/luxury-room.svg" />
        <h6>LUXURY ROOM</h6>
    </div>
</div>

<div class="restaurant">
    <img class="restaurant-photo" src="./../Images/restaurant.jpg" />
    <h6>Restaurant</p>
        <h2>Get Restaurant Facilities & Many Other More</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
        </p>
        <button class="btn-book-now">TAKE A TOUR</button>
</div>

<div class="core-features core-features--dark">
    <h6>FACILITIES</h6>
    <h2>Core Features</h2>
    <div class="swiper-core-features mySwiper-core-facilities sliderWrapper">
        <div class="swiper-wrapper">
            <div class="swiper-slide swiper-slide--dark">
                <div class="hotel-feature bg-1 bg-1--dark">
                    <img src="./../Images/rating.svg" />
                    <div class="field-container">
                        <h2>Have High Rating</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hotel-feature bg-2">
                    <img src="./../Images/hour.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hotel-feature bg-3">
                    <img src="./../Images/location-icon.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hotel-feature bg-4">
                    <img src="./../Images/no-hour.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hotel-feature bg-5">
                    <img src="./../Images/credit-card.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hotel-feature bg-6">
                    <img src="./../Images/percent.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination-core-facilities"></div>
    </div>
</div>

<div class="fun-facts-container">
    <h6>COUNTER</h6>
    <h2>Some Fun Facts</h2>
    <div class="fun-facts">
        <div class="fun-fact">
            <img src="./../Images/happy-user.svg">
            <div class="fun-fact-data">
                <h2>8000</h2>
                <p>Happy Users</p>
            </div>
            <img src="./../Images/arrow-right.svg">
        </div>
        <div class="fun-fact">
            <img src="./../Images/like.svg">
            <div class="fun-fact-data">
                <h2>10M</h2>
                <p>Reviews & Appriciate</p>
            </div>
            <img src="./../Images/arrow-right.svg">
        </div>
        <div class="fun-fact">
            <img src="./../Images/world.svg">
            <div class="fun-fact-data">
                <h2>100</h2>
                <p>Country Coverage</p>
            </div>
            <img src="./../Images/arrow-right.svg">
        </div>
    </div>
    <div class="images">
        <div class="swiper-images mySwiper-images sliderWrapper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./../Images/fun-fact-photo1.jpg"/>
                </div>
                <div class="swiper-slide">
                    <img src="./../Images/fun-fact-photo2.jpg"/>
                </div>
            </div>
            <div class="swiper-pagination-images"></div>
        </div>
    </div>
</div>

<div class="hotel-resume">
    <div class="hotel-info-container">
        <div class="hotel-title-icon-container">
            <div class="web-icon-container">
                <p>H</p>
            </div>
            <div class="web-title-container">
                <img src="./../Images/hotel-miranda.svg" />
            </div>
        </div>
        <p class="hotel-description">
            Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.
        </p>
        <div class="social-links">
            <img src="./../Images/facebook-icon.svg" />
            <div class="link-container">
                <img src="./../Images/twitter-icon.svg" />
            </div>
            <img src="./../Images/be-icon.svg" />
            <img src="./../Images/linkedin-icon.svg" />
            <img src="./../Images/youtube-icon.svg" />
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
                <img src="./../Images/phone.svg" />
                <div class="field-container">
                    <h6>Phone Number</h6>
                    <p>+987 876 765 76 577</p>
                </div>
            </div>
        </div>
        <div class="contact-methods">
            <div class="contact-method">
                <img src="./../Images/email.svg" />
                <div class="field-container">
                    <h6>Email</h6>
                    <p>info@webmail.com</p>
                </div>
            </div>
        </div>
        <div class="contact-methods">
            <div class="contact-method">
                <img src="./../Images/location.svg" />
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

<script src="./../js/script.js" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    window.onload = function () {
        const swiperCoreFacilities = new Swiper(".mySwiper-core-facilities", {
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination-core-facilities",
                clickable: true,
                renderBullet: function (index, className) {
                    return `<span class="${className}"></span>`;
                },
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