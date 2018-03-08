<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Maxi-it</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
      <style>
         .login-page {
         width: 360px;
         padding: 8% 0 0;
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
         color: #ebb256;
         font-size: 14px;
         -webkit-transition: all 0.3 ease;
         transition: all 0.3 ease;
         cursor: pointer;
         }
         .form button:hover,.form button:active,.form button:focus {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 20px 0 rgba(0, 0, 0, 0.1);
         }
         .form .message {
         margin: 15px 0 0;
         color: #b3b3b3;
         font-size: 12px;
         }
         .form a {
         color: #ebb256;
         text-decoration: none;
         }

         .beug{
             margin-top: 40px;
             margin-bottom: 40px;
         }

         body {
         background: #272f31; /* fallback for old browsers */
         font-family: "Arial", sans-serif;
         -webkit-font-smoothing: antialiased;
         -moz-osx-font-smoothing: grayscale;
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
      </style>
    </style>
</head>
<body>
<div class="container">

    <header class="row">
        @include('header')
    </header>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div id="main" class="row">

        @yield('content')

    </div>

    @include('footer')
</div>
</body>
</html>
