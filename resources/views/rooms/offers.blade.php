@extends('../layouts/layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/offers-page.css') }}">
@endpush
<div class="offers">
    <div class="ultimate-luxury-container">
        <h2>THE ULTIMATE LUXURY</h2>
    </div>
    <div class="luxury-title-container">
        <h1>Our offers</h1>
    </div>
    <div class="breadcrumb">
        <p><a href="{{ route('rooms.index') }}">Home</a> | <span>Offers</span></p>
    </div>
</div>
<div class="room-offers">
    @foreach($rooms as $room)
        <div class="offer-card">
            <div class="offer-image-container">
                <img src="{{ json_decode($room->photos)[0] }}" />
                <div class="prices">
                    <div class="price-container--old">
                        <p><span class="price-value">${{ $room->price }}</span><span class="price-unit">/Night</span></p>
                    </div>
                    <div class="price-container--new">
                        <p><span class="price-value">${{ number_format(($room->price)*(100-$room->discount)/100, 2) }}</span><span class="price-unit">/Night</span></p>
                    </div>
                </div>
            </div>
            <div class="offer-description">
                <div class="room-header">
                    <div class="room-titles">
                        <h6>{{ $room->roomType }}</h6>
                        <h2>{{ $room->roomName }}</h2>
                    </div>
                    <div class="prices-extended">
                        <div class="price-container--old">
                            <p><span class="price-value">${{ $room->price }}</span><span class="price-unit">/Night</span></p>
                        </div>
                        <div class="price-container--new">
                            <p><span class="price-value">${{ number_format(($room->price)*(100-$room->discount)/100, 2) }}</span><span class="price-unit">/Night</span></p>
                        </div>
                    </div>
                </div>
                <p class="offer-text">{{ $room->description }}</p>
                <div class="list-amenities">
                    @foreach($room->roomAmenities as $amenity)
                    <div class="amenity">
                        @if($amenity == "AC")
                            <img src="./Images/air-conditioner.svg" />
                        @elseif($amenity == "Shower")
                            <img src="./Images/shower.svg" />
                        @elseif($amenity == "Towel")
                            <img src="./Images/towels.svg" />
                        @elseif($amenity == "Bathup")
                            <img src="./Images/shower.svg" />
                        @elseif($amenity == "Coffee Set")
                            <img src="./Images/coffee-cup.svg" />
                        @elseif($amenity == "LED TV")
                            <img src="./Images/tv.svg" />
                        @elseif($amenity == "Wifi")
                            <img src="./Images/wifi.svg" />
                        @else
                            <img src="./Images/bed.svg" />
                        @endif
                        <p>{{ $amenity }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="btn-book-now">
                    <p class="room-status"><a href="{{ url('/' . $room->id) }}">BOOK NOW</a></p>
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="popular-list">
    <h6>Popular List</h6>
    <h2>Popular Rooms</h2>
    <div class="swiper mySwiper sliderWrapper">
        <div class="rooms-container swiper-wrapper">
            @foreach ($popularRooms as $popular)
                <div class="swiper-slide">
                    <div class="room-card">
                        <div class="image-container">
                            <img src="{{ json_decode($popular->photos)[0] }}" />
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
                            <h2>{{$popular['roomName']}}</h2>
                            <p>{{$popular['description']}}</p>
                            <div>
                                <p class="room-price">{{$popular['price']}}/Night</p>
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

<script src="{{ asset('js/script.js') }}" type="module"></script>