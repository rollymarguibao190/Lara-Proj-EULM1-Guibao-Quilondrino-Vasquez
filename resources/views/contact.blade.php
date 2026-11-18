
@extends('layouts.app')

@section('title', 'Contact Us')

{{-- Connect CSS --}}
@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@section('content')

<div class="contact-container">

    <div class="contact-header">
        <h1>Contact Us</h1>
        <p>We would love to hear from you!</p>
    </div>

    <div class="contact-content">

        <div class="contact-info">
            <h2>Get In Touch</h2>
            <p>Have questions or suggestions?
               Feel free to contact us.</p>

            <h3>Email</h3>
            <p>example@gmail.com</p>

            <h3>Phone</h3>
            <p>0912-345-6789</p>

            <h3>Address</h3>
            <p>Your City, Philippines</p>
        </div>

        <div class="contact-form">
            <h2>Send Us a Message</h2>

            <form id="contactForm" novalidate>

                <label for="name">Name</label>
                <input type="text" id="name"
                       placeholder="Enter your name">
                <small id="nameError" class="error"></small>

                <label for="email">Email</label>
                <input type="email" id="email"
                       placeholder="Enter your email">
                <small id="emailError" class="error"></small>

                <label for="subject">Subject</label>
                <input type="text" id="subject"
                       placeholder="Enter subject">
                <small id="subjectError" class="error"></small>

                <label for="message">Message</label>
                <textarea id="message"
                          placeholder="Write your message"></textarea>
                <small id="messageError" class="error"></small>

                <button type="submit">Send Message</button>

                <p id="successMessage"></p>

            </form>
        </div>

    </div>

</div>

@endsection

{{-- Connect JavaScript --}}
@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush
