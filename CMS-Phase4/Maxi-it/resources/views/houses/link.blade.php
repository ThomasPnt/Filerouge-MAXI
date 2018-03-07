<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion - Maxi</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!-- Styles -->
</head>
<body>
<div>
    <h3>{{ $house->address}}</h3>
    <p>Number of room : {{ $house->nbRoom}}</p>
    <p>Type : {{ $house->type}}</p>
    <p>Available : {{ $house->free ? 'yes' : 'no' }}</p>
    <h3>Link a contact</h3>
    <form method="post" action="/link">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="houseId" value="{{ $house->id }}">
        <div>
            <select name="refugeeId">
                @foreach ($refugeeList as $ref)
                    <option value="{{$ref->id}}">{{$ref->contactName}}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button>Link</button>
    </form>
</div>
</body>
</html>

