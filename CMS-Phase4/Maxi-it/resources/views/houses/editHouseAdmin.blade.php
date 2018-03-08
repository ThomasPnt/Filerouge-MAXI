
<div>
    <form method="post" action="/updateHouse">
        <input name="address" value="{{$house->address}}" >
        <input name="nbRoom" value="{{$house->nbRoom}}" type="number" >
        <input name="free" value="{{$house->free}}" type="checkbox" checked value={{true}}>
        <input name="houseId" value="{{$house->id}}" type="hidden" checked value={{true}}>
        <select name="type">
            <option value="apartement">appartement</option>
            <option value="House">maison</option>
        </select>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>edit</button>
    </form>
    <a class="btn btn-primary" href="/dashboard">Back</a>
</div>
