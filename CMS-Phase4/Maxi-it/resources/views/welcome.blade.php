<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maxi</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <style>
        a {
            color: inherit;
            text-decoration: inherit;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', sans-serif;
        }

        ::selection {
            background-color: #f7ca18;
            color: #1b1b1b;
        }

        section {
            height: 100vh;
            display: flex;
        }

        section .title {
            max-width: 60%;
            width: 100%;
            align-self: center;
            transform: translateY(-50px);
            margin: 0 auto;
            overflow: hidden;
            padding-bottom: 10px;
        }

        section .title span {
            display: inline-block;
            font-size: 5vw;
            color: #efefef;
            width: 100%;
            text-transform: uppercase;
            transform: translateX(-100%);
            animation: byBottom 1s ease both;
            font-weight: 600;
            letter-spacing: 0.25vw;
        }

        section .title span:last-child {
            font-size: 1rem;
            animation: byBottom 1s 0.25s ease both;
        }

        section .title span a {
            position: relative;
            display: inline-block;
            margin-left: 0.5rem;
            text-decoration: none;
            color: #ebb256;
        }

        section .title span a::after {
            content: "";
            height: 2px;
            background-color: #ebb256;
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 0;
            animation: linkAfter 0.5s 1s ease both;
        }

        .section h1 {
            color: light gray;
        }

        @-moz-keyframes pop {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes pop {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @-o-keyframes pop {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes pop {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @-moz-keyframes byBottom {
            0% {
                transform: translateY(150%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @-webkit-keyframes byBottom {
            0% {
                transform: translateY(150%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @-o-keyframes byBottom {
            0% {
                transform: translateY(150%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @keyframes byBottom {
            0% {
                transform: translateY(150%);
            }
            100% {
                transform: translateY(0);
            }
        }

        @-moz-keyframes linkAfter {
            0% {
                width: 0;
            }
            100% {
                width: 30px;
            }
        }

        @-webkit-keyframes linkAfter {
            0% {
                width: 0;
            }
            100% {
                width: 30px;
            }
        }

        @-o-keyframes linkAfter {
            0% {
                width: 0;
            }
            100% {
                width: 30px;
            }
        }

        @keyframes linkAfter {
            0% {
                width: 0;
            }
            100% {
                width: 30px;
            }
        }

        }
    </style>
</head>
<body>
@extends('main')
@section('content')
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <section>
        <div class="title">
            <span>
            Maxi</span>
            <span>
               Connecting <a>host communities</a> to <a>refugees</a>
               <h4><br> Bonjour! We are Maxi, a non-profit organisation based in Belgium that connects locals and refugees. Every day people arrive in Belgium. In many cases, they do not have a place to sleep. Our platform connects new arrivals to locals, who have an extra bed and would like to welcome them in their home for a night. Find out how it works on this website. If you have any questions, we would be happy to hear from you! </h4>
              <br>How it works — Simple as 1, 2, 3
              <br>
              <br>
               1. sign up today.
               <br>
               2.
               Select to be a guest or host.
               <br>
               3.
               Enjoy maxi company.
            </span>
        </div>
    </section>
    </section>
@stop
</body>
</html>

