<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #24272a;
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
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
<div>
<div class="col-5">
    <table class="table">
        <thead class="thead-inverse">
        <tr>
            <th>Contact Name</th>
            <th>Adults</th>
            <th>Children</th>
            <th>accommodation</th>
        </tr>
        </thead>
        <tbody>
        <tbody>
        @foreach ($refugeeList as $ref)
            <tr>
                <td>
                    {{ $ref->contactName}}
                </td>
                <td>
                    {{ $ref->nbAdult}}
                </td>
                <td>
                    {{ $ref->nbChild}}
                </td>
                <td>
                    {{ $ref->accommodation}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



</div>
</body>
</html>
