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
         @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);
         #cssmenu,
         #cssmenu ul,
         #cssmenu ul li,
         #cssmenu ul li a,
         #cssmenu #menu-button {
         margin: 0;
         padding: 0;
         border: 0;
         list-style: none;
         line-height: 1;
         display: block;
         -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
         box-sizing: border-box;
         }
         *{
         margin: 0;
         padding: 0;
         }
         #cssmenu:after,
         #cssmenu > ul:after {
         content: ".";
         display: block;
         clear: both;
         visibility: hidden;
         line-height: 0;
         height: 0;
         }
         #cssmenu {
         font-family: Montserrat, sans-serif;
         background: #303f42;
         }
         #cssmenu > ul > li {
         float: right;
         }
         #cssmenu > ul > li > a {
         padding: 17px;
         font-size: 12px;
         letter-spacing: 1px;
         text-decoration: none;
         color: #ebb256;
         font-weight: 700;
         text-transform: uppercase;
         }
         .Maxi a {
         float: left;
         padding: 17px;
         font-size: 12px;
         letter-spacing: 1px;
         text-decoration: none;
         color: #ebb256;
         font-weight: 700;
         text-transform: uppercase;
         }
      </style>
   </head>
   <body>
      <div id='cssmenu'>
         <div class="Maxi"><a href='/'>Maxi</a></div>
         <ul>
            <li><a href='/logout'>Logout</a></li>
            <li><a href='/profile'>Profile</a></li>
         </ul>
      </div>
   </body>
</html>

