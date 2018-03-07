{{--<!doctype html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}
    {{--<head>--}}
        {{--<meta charset="utf-8">--}}
        {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
        {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

        {{--<title>Maxi-it</title>--}}

        {{--<!-- Fonts -->--}}
        {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

        {{--<!-- Styles -->--}}
        {{--<style>--}}
            {{--html, body {--}}
                {{--background-color: #fff;--}}
                {{--color: #636b6f;--}}
                {{--font-family: 'Raleway', sans-serif;--}}
                {{--font-weight: 100;--}}
                {{--height: 100vh;--}}
                {{--margin: 0;--}}
            {{--}--}}

            {{--.full-height {--}}
                {{--height: 100vh;--}}
            {{--}--}}

            {{--.flex-center {--}}
                {{--align-items: center;--}}
                {{--display: flex;--}}
                {{--justify-content: center;--}}
            {{--}--}}

            {{--.position-ref {--}}
                {{--position: relative;--}}
            {{--}--}}

            {{--.top-right {--}}
                {{--position: absolute;--}}
                {{--right: 10px;--}}
                {{--top: 18px;--}}
            {{--}--}}

            {{--.content {--}}
                {{--text-align: center;--}}
            {{--}--}}

            {{--.title {--}}
                {{--font-size: 84px;--}}
            {{--}--}}

            {{--.links > a {--}}
                {{--color: #636b6f;--}}
                {{--padding: 0 25px;--}}
                {{--font-size: 12px;--}}
                {{--font-weight: 600;--}}
                {{--letter-spacing: .1rem;--}}
                {{--text-decoration: none;--}}
                {{--text-transform: uppercase;--}}
            {{--}--}}

            {{--.m-b-md {--}}
                {{--margin-bottom: 30px;--}}
            {{--}--}}
        {{--</style>--}}
    {{--</head>--}}
    {{--<body>--}}
@extends('main')
    @section('content')

        <section class="section-features js--section-features" id="features">
            <div class="row">
                <h2>Everyone deserves a roof</h2>
                <p class="long-copy">
                    Hello! We are Maxi, a non-profit organisation based in Belgium that
                    connects locals and refugees. Every day people arrive in Belgium.
                    In many cases, they do not have a place to sleep. Our platform connects
                    new arrivals to locals, who have an extra bed and would like to welcome
                    them in their home for a night. Find out how it works on this website.
                    If you have any questions, we would be happy to hear from you!
                </p>
            </div>

            <div class="row js--wp-1">
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-location-outline icon-big"></i>
                    <h3>find a host</h3>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-social-euro-outline icon-big"></i>
                    <h3>donate</h3>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-people icon-big"></i>
                    <h3>meet-up volunteer</h>
                </div>
                <div class="col span-1-of-4 box">
                    <i class="ion-ios-telephone-outline icon-big"></i>
                    <h3>emergency</h3>
                </div>
            </div>
        </section>


        <section class="section-house">
            <ul class="house-showcase clearfix">
                <li>
                    <figure class="house-photo">
                        <img src="img/1.jpeg" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="house-photo">
                        <img src="img/2.jpeg" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="house-photo">
                        <img src="img/3.jpeg" alt="">
                    </figure>
                </li>
                <li>
                    <figure class="house-photo">
                        <img src="img/4.jpeg" alt="">
                    </figure>
                </li>
            </ul>
        </section>

        <section class="section-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div class="num">1</div>
                        <p> sign up today</p>
                    </div>
                    <div class="works-step">
                        <div class="num">2</div>
                        <p>select to be a guest or host</p>
                    </div>
                    <div class="works-step">
                        <div class="num">3</div>
                        <p>Enjoy maxi company</p>
                    </div>
                    <a href="#" class="btn-app">
                        <img src="img/download-app.svg" alt="App Store Button">
                    </a>
                    <a href="#" class="btn-app">
                        <img src="img/download-app-android.png" alt="Play Store Button">
                    </a>
                </div>
            </div>
        </section>

        @stop
    {{--</body>--}}
{{--</html>--}}

{{--<div>
            <h1>Sign Up Host</h1>
            <form method="post" action="/signup">
                <input name="firstname" value="" type="firstname"/>
                <input name="lastname" value="" type="lastname"/>
                <input name="email" value="" type="email"/>
                <input name="password" value="" type="password"/>
                <button type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <h1>Login</h1>
            <form method="post" action="/login">
                <input name="email" value="" type="email"/>
                <input name="password" value="" type="password"/>
                <button type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <h1>Update Information Host</h1>
            <form method="post" action="/update">
                <input name="firstname" value="" type="firstname"/>
                <input name="lastname" value="" type="lastname"/>
                <input name="email" value="" type="email"/>
                <input name="password" value="" type="password"/>
                <button type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <h1>Add an House</h1>
            <form method="post" action="/addHouse">
                <input name="address" type="text" value="">
                <input name="nbRoom" type="number" value="">
                <input name="free" type="checkbox" checked value={{true}}>
                <select name="type">
                    <option value="appartement">appartement</option>
                    <option value="maison">maison</option>
                </select>
                <button type="submit">Submit</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
            <h1>Delete Button on Profil Host</h1>
            <button><a href="/delete">Delete</a></button>
        </div>--}}
