@extends('layouts.app')
@section('root')
<div class="home container col fhw">
    <nav class="navigation container row fw">
        <div class="logo_holder container row">
            <img src="{{ asset('img/icons/lms-icon.png') }}" alt="" class="icon">
            <p>
                Library Management System
            </p>
        </div>
        @auth
            <a href="{{ route('dashboard') }}">Proceed to Dashboard</a>
        @endauth
        @guest
            <a href="{{ route('login') }}">Login</a>
        @endguest
    </nav>
    <div class="content container row fw">
        <img src="{{ asset('img/illustrations/home_illustration.png') }}" alt="" class="illustration">
        <div class="action container col">
            <h2>
                <strong>
                    “The reading of all good books is like a conversation with the finest minds of past centuries.” - Rene Descartes
                </strong>
            </h2>    
            <a href="{{route('add_new')}}" style="color: var(--color3); text-decoration: none;">
                <button style="margin:auto;">
                I wanna add a book!
                </button>
            </a>
        </div>
    </div>
    <footer class="container row fw">
        <p>
            Aphrodite © 2021
        </p>
        <div class="socials_holder container row">
            <a href="https://www.instagram.com/yanuarcp28_/" target="_blank">
                <img src="{{ asset('img/icons/instagram-icon.png') }}" alt="">
            </a>
            <a href="https://t.me/accismussinner" target="_blank">
                <img src="{{ asset('img/icons/message-icon.png') }}" alt="">
            </a>
        </div>
    </footer>
</div>
@endsection