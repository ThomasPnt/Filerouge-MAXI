
<div>
    <form method="post" action="/edit">
        <input name="{{$house->address}}" type="text" value="">
        <input name="{{$house->nbRoom}}" type="number" value="">
        <input name="{{$house->free}}" type="checkbox" checked value={{true}}>
        <select name="type">
            <option value="apartement">appartement</option>
            <option value="House">maison</option>
        </select>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Submit</button>
    </form>
</div>
