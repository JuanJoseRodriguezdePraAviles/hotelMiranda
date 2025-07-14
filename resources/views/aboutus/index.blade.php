@extends('../layouts/layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about-us-page.css') }}">
@endpush
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
        <img src="./../Images/party.svg" />
        <h6>BBQ PARTY</h6>
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
    <div>
        <h6>Restaurant</h6>
        <h2>Get Restaurant Facilities & Many Other More</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
        </p>
        <button class="btn-book-now">TAKE A TOUR</button>
    </div>
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
            <div class="swiper-slide swiper-slide--dark">
                <div class="hotel-feature bg-2 bg-2--dark">
                    <img src="./../Images/hour.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="hotel-feature bg-3 bg-3--dark">
                    <img src="./../Images/location-icon.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="hotel-feature bg-4 bg-4--dark">
                    <img src="./../Images/no-hour.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="hotel-feature bg-5 bg-5--dark">
                    <img src="./../Images/credit-card.svg" />
                    <div class="field-container">
                        <h2>Quiet Hours</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna..</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide--dark">
                <div class="hotel-feature bg-6 bg-6--dark">
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
    <h2 class="fun-fact-title">Some Fun Facts</h2>
    <div class="fun-facts">
        <div class="fun-fact">
            <img class="fun-fact-icon" src="./../Images/happy-user.svg">
            <div class="fun-fact-data">
                <h2>8000</h2>
                <p>Happy Users</p>
            </div>
            <img class="arrow" src="./../Images/arrow-right.svg">
        </div>
        <div class="fun-fact">
            <img class="fun-fact-icon" src="./../Images/like.svg">
            <div class="fun-fact-data">
                <h2>10M</h2>
                <p>Reviews & Appriciate</p>
            </div>
            <img class="arrow" src="./../Images/arrow-right.svg">
        </div>
        <div class="fun-fact">
            <img class="fun-fact-icon" src="./../Images/world.svg">
            <div class="fun-fact-data">
                <h2>100</h2>
                <p>Country Coverage</p>
            </div>
            <img class="arrow" src="./../Images/arrow-right.svg">
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

<script src="./../js/script.js" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    window.onload = function () {
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
                        rows: 1
                    }
                },
                1000: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    grid: {
                        rows: 2
                    }
                }
            }
        });
        const swiperImages = new Swiper(".mySwiper-images", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination-images",
                clickable: true,
                renderBullet: function (index, className) {
                    return `<span class="${className}"></span>`;
                },
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                1000: {
                    slidesPerView: 2
                }
            }
        });
    }
</script>