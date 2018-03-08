<div>
    <form method="post" action="/updateHost">
        <input name="firstname" value="{{$host->firstname}}" type="text">
        <input name="lastname" value="{{$host->lastname}}" type="text">
        <input name="email" value="{{ $host->email}}" type="text">
        <input name="hostId" value="{{$host->id}}" type="hidden">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>edit</button>
    </form>
</div>
