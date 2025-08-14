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
                        <p><span class="room-value">{{ $room->price }}</span><span class="price-unit">/Night</span></p>
                    </div>
                    <div class="price-container--new">
                        <p><span class="room-value">{{ $room->price }}</span><span class="price-unit">/Night</span></p>
                    </div>
                </div>
            </div>
            <div class="offer-description">
                <h6>{{ $room->roomType }}</h6>
                <h2>{{ $room->roomName }}</h2>
                <p class="offer-text">{{ $room->description }}</p>
                <div class="list-amenities">
                    @foreach($room->roomAmenities as $amenity)
                    <div class="amenity">
                        <img src="./Images/icon1.svg" />
                        <p>{{ $amenity }}</p>
                    </div>
                    @endforeach
                    <div class="amenity">
                        <img src="./../Images/icon2.svg" />
                        <p></p>
                    </div>
                    <div class="amenity">
                        <img src="./../Images/icon3.svg" />
                        <p></p>
                    </div>
                    <div class="amenity">
                        <img src="./../Images/icon4.svg" />
                        <p></p>
                    </div>
                    <div class="amenity">
                        <img src="./../Images/icon5.svg" />
                        <p></p>
                    </div>
                    <div class="amenity">
                        <img src="./../Images/icon6.svg" />
                        <p></p>
                    </div>
                    <div class="amenity">
                        <img src="./../Images/icon7.svg" />
                        <p></p>
                    </div>
                </div>
                <div class="btn-book-now">
                    <p class="room-status"><a href="{{ url('/' . $room->id) }}">Booking Now</a></p>
                </div>
            </div>
            
            
            
        </div>
    @endforeach
</div>

<script src="{{ asset('js/script.js') }}" type="module"></script>