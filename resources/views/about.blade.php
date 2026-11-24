@extends('layouts.app')

@section('title', 'About Us')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

{{-- ============ HERO ============ --}}
<section class="cems-about-hero">
    <div class="container">
        <span class="cems-hero-badge">Caraga State University</span>
        <h1>About <span class="cems-gold">CEMS</span></h1>
        <p class="cems-hero-desc">
            Learn about the background, mission and vision, and team behind the Campus Event
            Management System of Caraga State University.
        </p>
        <div class="cems-hero-actions">
            <a href="{{ url('/') }}" class="btn btn-gold">Explore Home</a>
            <a href="{{ url('/contact') }}" class="cems-btn-outline">Contact Us</a>
        </div>
    </div>
</section>

{{-- ============ BACKGROUND ============ --}}
<section class="cems-sec-white">
    <div class="container cems-two-col">
        <div>
            <div class="cems-eyebrow">Background</div>
            <h2 class="cems-heading">Why we built CEMS for CSU</h2>
        </div>
        <div class="cems-copy">
            <p id="bg-text">
                CEMS was created to bring campus events, schedules, and student registrations into one
                organized hub for Caraga State University.
            </p>
            <p id="extra-bg" class="is-hidden">
                Instead of relying on scattered group chats and posts, students can browse upcoming
                activities easily while organizers publish events and admins review approvals smoothly.
            </p>
            <div class="cems-btn-row">
                <button type="button" class="btn btn-gold" id="toggle-bg-btn">Show More Details</button>
            </div>
        </div>
    </div>
</section>

{{-- ============ MISSION & VISION ============ --}}
<section class="cems-sec-sage">
    <div class="container">
        <div class="cems-center-head">
            <div class="cems-eyebrow">Mission &amp; Vision</div>
            <h2 class="cems-heading">What drives our platform</h2>
        </div>

        <div class="cems-grid-2">
            <article class="cems-card">
                <div class="cems-icon-box">🎯</div>
                <h3>Mission</h3>
                <p>
                    Provide a clear, organized, and accessible event hub where CSU students can discover
                    campus activities and organizers can manage events smoothly.
                </p>
            </article>

            <article class="cems-card">
                <div class="cems-icon-box">🌟</div>
                <h3>Vision</h3>
                <p>
                    Build a reliable digital campus event experience that strengthens student engagement
                    and Golden Paddler spirit across Caraga State University.
                </p>
            </article>
        </div>
    </div>
</section>

{{-- ============ TEAM & STAFF ============ --}}
<section class="cems-sec-white">
    <div class="container">
        <div class="cems-center-head">
            <div class="cems-eyebrow">Team &amp; Staff</div>
            <h2 class="cems-heading">Meet the project team</h2>
            <p class="cems-sublead">
                Highlighted members: <strong id="selected-count">0</strong>
            </p>
        </div>

        <div class="cems-grid-3">
            <article class="cems-card cems-team-card">
                <div class="cems-icon-box">🏠</div>
                <h3>Rolly Mar Guibao</h3>
                <span class="cems-member-tag">Member 1 • Home &amp; Core</span>
                <p>Built the Home page, event showcase slider, and shared navigation layout.</p>
                <button type="button" class="btn btn-gold highlight-btn">Highlight</button>
            </article>

            <article class="cems-card cems-team-card">
                <div class="cems-icon-box">📄</div>
                <h3>Lefayette Quilondrino</h3>
                <span class="cems-member-tag">Member 2 • About Module</span>
                <p>Developed the About CEMS page, mission &amp; vision cards, and interactive sections.</p>
                <button type="button" class="btn btn-gold highlight-btn">Highlight</button>
            </article>

            <article class="cems-card cems-team-card">
                <div class="cems-icon-box">✉️</div>
                <h3>Joshua Vasquez</h3>
                <span class="cems-member-tag">Member 3 • Contact Module</span>
                <p>Created the Contact Us page, campus inquiry details, and form handling.</p>
                <button type="button" class="btn btn-gold highlight-btn">Highlight</button>
            </article>
        </div>
    </div>
</section>

{{-- ============ CALL TO ACTION ============ --}}
<section class="cems-about-cta">
    <div class="container">
        <h2>Have questions about CEMS?</h2>
        <p>Reach out to our team for event inquiries or feedback.</p>
        <a href="{{ url('/contact') }}" class="btn btn-gold">Get in touch</a>
    </div>
</section>

@endsection

@push('scripts')
    <script src="{{ asset('js/about.js') }}" defer></script>
@endpush