@extends('../layouts/layout')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/contact-page.css') }}">
@endpush
<div class="contact-title">
        <div class="ultimate-luxury-container">
            <h2>THE ULTIMATE LUXURY</h2>
        </div>
        <div class="luxury-title-container">
            <h1>New Details</h1>
        </div>
        <div class="breadcrumb">
            <p><a href="{{ route('rooms.index') }}">Home</a> | <span>Blog</span></p>
        </div>
    </div>

    <div class="hotel-data">
        <div class="hotel-info bg-1">
            <img src="./../Images/location.svg" />
            <div class="field-container">
                <h6>Office Address</h6>
                <p>Calle de la Princesa, 31, 2º, Moncloa - Aravaca, 28008 Madrid</p>
            </div>
        </div>
        <div class="hotel-info bg-2">
            <img src="./../Images/phone.svg" />
            <div class="field-container">
                <h6>Phone Number</h6>
                <p>+34 678 208 342</p>
            </div>
        </div>
        <div class="hotel-info bg-3">
            <img src="./../Images/email.svg" />
            <div class="field-container">
                <h6>Email Address</h6>
                <p>jjpra196@gmail.com</p>
            </div>
        </div>
    </div>
    <img class="map" src="./../Images/map.png" />

    <form class="contact-form" method="POST" action="{{ route('reviews.store') }}">
        @csrf
        <input type="text" name="customerName" placeholder="Your full name">
        <img src="./../Images/account.svg" />
        <input type="text" name="phone" placeholder="Add phone number">
        <img src="./../Images/phone-contact.svg" />
        <input type="text" name="email" placeholder="Enter email address">
        <img src="./../Images/envelope.svg" />
        <input type="text" name="subject" placeholder="Enter subject">
        <img src="./../Images/book.svg" />
        <input class="message-input" name="comment" type="text" placeholder="Enter message">
        <img class="icon-message" src="./../Images/pen.svg" />
        <input type="hidden" name="date" value="{{ now()->toDateString() }}">
        <input type="submit" class="btn-send" value="SEND">
    </form>