{{--<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Vos options - Maxi</title>
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <style>
         .login-page {
         width: 360px;
         padding: 3% 0 0;
         margin: auto;
         }
         .form {
         position: relative;
         z-index: 1;
         background: #303f42;
         max-width: 360px;
         margin: 0 auto 100px;
         padding: 45px;
         text-align: center;
         box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
         }
         .form input {
         font-family: "Arial", sans-serif;
         outline: 0;
         color: #ebb256;
         background: #2d383b;
         width: 100%;
         border: 0;
         margin: 0 0 15px;
         padding: 15px;
         box-sizing: border-box;
         font-size: 14px;
         }
         .form button {
         font-family: "Arial", sans-serif;
         outline: 0;
         background: #272f31;
         width: 100%;
         border: 0;
         padding: 15px;
         color: #FFFFFF;
         font-size: 14px;
         -webkit-transition: all 0.3 ease;
         transition: all 0.3 ease;
         cursor: pointer;
         }
         .form button:hover,.form button:active,.form button:focus {
         background: #ebb256;
         }
         .form .message {
         margin: 15px 0 0;
         color: #b3b3b3;
         font-size: 12px;
         }
         .form .message a {
         color: #ebb256;
         text-decoration: none;
         }
         .container {
         position: relative;
         z-index: 1;
         max-width: 300px;
         margin: 0 auto;
         }
         .container:before, .container:after {
         content: "";
         display: block;
         clear: both;
         }
         .container .info {
         margin: 50px auto;
         text-align: center;
         }
         .container .info h1 {
         margin: 0 0 15px;
         padding: 0;
         font-size: 36px;
         font-weight: 300;
         color: #1a1a1a;
         }
         .container .info span {
         color: #4d4d4d;
         font-size: 12px;
         }
         .container .info span a {
         color: #000000;
         text-decoration: none;
         }
         .container .info span .fa {
         color: #EF3B3A;
         }
         body {
         background: #272f31; /* fallback for old browsers */
         font-family: "Arial", sans-serif;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;      
         }
         select {
         font-family: "Arial", sans-serif;
         outline: 0;
         color: #ebb256;
         background: #2d383b;
         width: 100%;
         border: 0;
         margin: 0 0 15px;
         padding: 15px;
         box-sizing: border-box;
         font-size: 14px;  
         }
         a {
         text-decoration: none;
         color: white;
         }
         h1 {
         font-family: "Arial", sans-serif;
         outline: 0s;
         color: #ebb256;
         width: 100%;
         margin: 0 0 15px;
         padding: 15px;
         box-sizing: border-box;
         font-size: 18px;
         }
      </style>--}}
<!-- N°1 -->
@extends('main')
@section('content')
    <div class="login-page">
        <div class="form">
            <h1>Update Information Host</h1>
            <form method="post" action="/updateHost">
                <input name="firstname" placeholder="Prénom" type="firstname" value={{$infoProfile[0]->firstname}}>
                <input name="lastname" placeholder="Nom" type="lastname" value={{$infoProfile[0]->lastname}}>
                <input name="email" placeholder="E-mail" type="email" value={{$infoProfile[0]->email}}>
                <button type="submit">Valider</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
@stop
{{--
      </body>
</html>
--}}

