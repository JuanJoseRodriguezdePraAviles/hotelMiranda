@extends('../layouts/layout')
<div class="room-title">
        <div class="ultimate-luxury-container">
            <h2>THE ULTIMATE LUXURY</h2>
        </div>
        <div class="luxury-title-container">
            <h1>Ultimate Room</h1>
        </div>
        <div class="breadcrumb">
            <p><a href="{{ route('rooms.index') }}">Home</a> | <span>Room Details</span></p>
        </div>
    </div>

    <div class="room-info">
        <h6>DOUBLE BED</h6>
        <h2>{{$room['roomName']}}</h2>
        <div class="price-container">
            <p class="price">{{$room['price']}}</p>
            <p class="night">/Night</p>
        </div>
        <img src="{{ json_decode($room->photos)[0]}}" />
    </div>

    <div class="calendar-container">
        <div class="calendar-label-icon-input-container">
            <label>Check In</label>
            <div id="icon-arrival-input-container">
                <input id="arrival-date-input" type="date" />
                <span id="arrival-formatted-date"></span>
                <img src="./../Images/calendar-icon-light.svg" />
            </div>

        </div>
        <div class="calendar-label-icon-input-container">
            <label>Check Out</label>
            <div id="icon-return-input-container">
                <input id="return-date-input" type="date" />
                <span id="return-formatted-date"></span>
                <img src="./../Images/calendar-icon-light.svg" />
            </div>
        </div>
        <button class="btn-availability">
            <a href="./Rooms.html">CHECK AVAILABILITY</a>
        </button>
    </div>

    <p class="extra-info">
        {{$room['description']}}
    </p>

    <div class="amenities">
        <h2>Amenities</h2>
        <div class="list-amenities">
            @foreach ($room['roomAmenities'] as $amenity)
                <div class="amenity">
                    <img src="./../Images/air-conditioner.svg" />
                    <p>{{ $amenity }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="founder">
        <img src="./../Images/avatar.jpg" />
        <div class="check">
            <img src="./../Images/check.svg" />
        </div>
        <h2>Rosalina D. William</h2>
        <h3>FOUNDER, QUX CO.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore.</p>
    </div>

    <div class="cancellation">
        <h2>Cancellation</h2>
        <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat
            metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full
            refund.</p>
    </div>

    <div class="related-rooms">
        <h2>Related Rooms</h2>
        <div class="swiper mySwiper sliderWrapper">
            <div class="rooms-container swiper-wrapper">
                @foreach ($relatedRooms as $related)
                    <div class="swiper-slide">
                        <div class="room-card">
                            <div class="image-container">
                                <img src="{{ json_decode($related->photos)[0] }}" />
                                <div class="room-features">
                                    <img src="./../Images/icon1.svg" />
                                    <img src="./../Images/icon2.svg" />
                                    <img src="./../Images/icon3.svg" />
                                    <img src="./../Images/icon4.svg" />
                                    <img src="./../Images/icon5.svg" />
                                    <img src="./../Images/icon6.svg" />
                                    <img src="./../Images/icon7.svg" />
                                </div>
                            </div>
                            <div class="image-description">
                                <h2>{{$related['roomName']}}</h2>
                                <p>{{$related['description']}}</p>
                                <div>
                                    <p class="room-price">{{$related['price']}}/Night</p>
                                    <p class="room-status"><a href="">Booking Now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        window.onload = function () {
            const swiper = new Swiper(".mySwiper", {
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
            });
        }
    </script>