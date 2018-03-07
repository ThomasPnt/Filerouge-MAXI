<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
<div class="container">
    <h1 class="mt-4">Dashboard</h1>
    <div class="mt-5">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                   aria-controls="home" aria-selected="true">Refugees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                   aria-controls="profile" aria-selected="false">Houses</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                   aria-controls="contact" aria-selected="false">Host</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel"
                 aria-labelledby="home-tab">
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
                    @foreach ($refugeeList as $ref)
                        <tr>
                            <td>{{ $ref->contactName}}</td>
                            <td>{{ $ref->nbAdult}}</td>
                            <td>{{ $ref->nbChild}}</td>
                            <td>{{ $ref->accommodation ? "yes" : "no"}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Address</th>
                        <th>Nb rooms</th>
                        <th>Type</th>
                        <th>Available</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($houseList as $house)
                        <tr>
                            <td>{{ $house->address}}</td>
                            <td>{{ $house->nbRoom}}</td>
                            <td>{{ $house->type}}</td>
                            <td>{{ $house->free ? "yes" : "no"}}</td>
                            <td>
                                <a href="">edit</a>
                                <a href="">remove</a>
                                @if ($house->free)
                                    <a href="link/{{$house->id}}">link</a>
                                @else
                                    <a href="unlink/{{$house->id}}">unlink</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <table class="table">
                    <thead class="thead-inverse">
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>email</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($hostList as $host)
                        <tr>
                            <td>{{ $host->firstname}}</td>
                            <td>{{ $host->lastname}}</td>
                            <td>{{ $host->email}}</td>
                            <td>
                                <a href="">delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous"></script>
    </div>


</div>
</body>
</html>
