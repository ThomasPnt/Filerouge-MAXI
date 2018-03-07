
<div>
    <form method="post" action="/updateHouse">
        <input name="address" value="{{$house->address}}" type="text" value="">
        <input name="nbRoom" value="{{$house->nbRoom}}" type="number" value="">
        <input name="free" value="{{$house->free}}" type="checkbox" checked value={{true}}>
        <select name="type">
            <option value="apartement">appartement</option>
            <option value="House">maison</option>
        </select>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button>edit</button>
    </form>
</div>
