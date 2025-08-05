@extends('../layouts/layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/rooms-page.css') }}">
@endpush
<div class="rooms-title">
    <div class="ultimate-luxury-container">
        <h2>THE ULTIMATE LUXURY</h2>
    </div>
    <div class="luxury-title-container">
        <h1>Our offers</h1>
    </div>
    <div class="breadcrumb">
        <p><a href="{{ route('rooms.index') }}">Home</a> | <span>Rooms</span></p>
    </div>
</div>
<div class="swiper mySwiper sliderWrapper">
    <div class="rooms-container swiper-wrapper">
        @foreach($rooms->chunk(12) as $roomGroup)
        <div class="swiper-slide">
            <div class="room-grid">
                @foreach($roomGroup as $room)
                <div class="room-card">
                    <div class="image-container">
                        <img src="{{ json_decode($room->photos)[0] }}" />
                        <div class="room-features">
                            <img src="./Images/icon1.svg" />
                            <img src="./../Images/icon2.svg" />
                            <img src="./../Images/icon3.svg" />
                            <img src="./../Images/icon4.svg" />
                            <img src="./../Images/icon5.svg" />
                            <img src="./../Images/icon6.svg" />
                            <img src="./../Images/icon7.svg" />
                        </div>
                    </div>
                    <div class="image-description">
                        <h2>{{ $room->roomName }}</h2>
                        <p>{{ $room->description }}</p>
                        <div>
                            <p class="room-price">{{ $room->price }}/Night</p>
                            <p class="room-status"><a href="{{ url('/' . $room->id) }}">Booking Now</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
    <div class="swiper-pagination"></div>
</div>

<script src="{{ asset('js/script.js') }}" type="module"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    window.onload = function () {
        const swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
                renderBullet: function (index, className) {
                    return `<span class="${className}">${index + 1}</span>`;
                },
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                1000: {
                    slidesPerView: 1
                }
            }
        });
    }
</script>