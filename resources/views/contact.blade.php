@extends('layouts.app')

@section('content')
    {{-- <table> --}}
    <div class="grid-content">
        <div class="contact-pict">
            {{-- <img class="contact rounded-circle" src="{{asset('/welcome-background.jpg')}}" alt="contact_image"> --}}
        </div>
        <div class="contact-info">
            <h1>Contact Us</h1>
            <p>Let me know if you have further information about our travel information. </p>
            <h6>Email us</h6>
            <p>support@mytravel.com</p>
            <h6>Call us</h6>
            <p>021 - 123 - 456</p>

            {{-- <ul class="info-general">
                <li>
                    <p>Address</p>
                    <p>Kemanggisan 127</p>
                </li>
                <li>
                    <p>Email</p>
                    <p>contact@mytravel.com</p>
                </li>
                <li>
                    <p>Phone number</p>
                    <p>021 - 1234 - 5678</p>
                </li>
            </ul> --}}
            <h1>Social Media</h1>
            <p>Get frequent information about our service in our social media.</p>
            <div class="contact-social">
                <div class="contact-item">
                    <a href="https://facebook.com">
                        <img src="/storage/image/facebook-contact.png" alt="facebook">
                    </a>
                    <p>Facebook</p>
                </div>
                <div class="contact-item">
                    <a href="https://twitter.com">
                        <img src="/storage/image/twitter-contact.png" alt="twitter">
                    </a>
                    <p>Twitter</p>
                </div>
                <div class="contact-item">
                    <a href="https://instagram.com">
                        <img src="/storage/image/instagram-contact.png" alt="instagram">
                    </a>
                    <p>Instagram</p>
                </div>
                <div class="contact-item">
                    <a href="https://web.telegram.org">
                        <img src="/storage/image/telegram-contact.png" alt="telegram">
                    </a>
                    <p>Telegram</p>
                </div>
                <div class="contact-item">
                    <a href="https://youtube.com">
                        <img src="/storage/image/youtube-contact.png" alt="youtube">
                    </a>
                    <p>Youtube</p>
                </div>
            </div>
            {{-- <ul class="info-general">
                <li>
                    <p>Facebook</p>
                    <p>MyTravel</p>
                </li>
                <li>
                    <p>Instagram</p>
                    <p>@MyTravel</p>
                </li>
                <li>
                    <p>Twitter</p>
                    <p>@MyTravel</p>
                </li>
            </ul> --}}
        </div>
    {{-- </table> --}}
    </div>
@endsection