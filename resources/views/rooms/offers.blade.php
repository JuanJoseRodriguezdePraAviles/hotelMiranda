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
                        @if($amenity == "AC")
                            <img src="./Images/air-conditioner.svg" />
                        @elseif($amenity == "Shower")
                            <img src="./Images/shower.svg" />
                        @elseif($amenity == "Towel")
                            <img src="./Images/towels.svg" />
                        @elseif($amenity == "Bathup")
                            <img src="./Images/shower.svg" />
                        @elseif($amenity == "Coffee Set")
                            <img src="./Images/grocery.svg" />
                        @elseif($amenity == "LED TV" || $amenity == "Wifi")
                            <img src="./Images/wifi.svg" />
                        @else
                            <img src="./Images/bed.svg" />
                        @endif
                        <p>{{ $amenity }}</p>
                    </div>
                    @endforeach
                </div>
                <div class="btn-book-now">
                    <p class="room-status"><a href="{{ url('/' . $room->id) }}">Booking Now</a></p>
                </div>
            </div>
            
            
            
        </div>
    @endforeach
</div>

<script src="{{ asset('js/script.js') }}" type="module"></script>