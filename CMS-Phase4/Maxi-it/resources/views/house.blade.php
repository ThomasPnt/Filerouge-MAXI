@extends('main')
@section('content')
    @if(!$haveHouse)
    <div class="login-page">
        <div class="form">
            <h1>Add a House</h1>
            <form method="post" action="/addHouse">
                <input name="address" type="text" placeholder="Adresse">
                <input name="nbRoom" type="number" placeholder="Nombre de pièce">
                <select name="type">
                    <option value="appartement">Appartement</option>
                    <option value="maison">Maison</option>
                </select>
                <button type="submit">Valider</button>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
        </div>
    </div>
    @else
    <div class="login-page">
        <div class="form">
            <h1>Delete Button on Profil Host</h1>
            <button type="submit"><a href="/delete">Delete</a></button>
        </div>
    </div>
    @endif
@stop