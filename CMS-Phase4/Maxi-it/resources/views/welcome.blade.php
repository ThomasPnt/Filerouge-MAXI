<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Maxi-it</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div>
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
        </div>
    </body>
</html>
