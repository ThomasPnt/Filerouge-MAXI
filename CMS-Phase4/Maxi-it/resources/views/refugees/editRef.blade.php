<div>
    <form method="post" action="/editInfos">
        <input name="contactName" value="{{$ref->contactName}}" type="text">
        <input name="nbAdult" value="{{$ref->nbAdult}}" type="text">
        <input name="nbChild" value="{{ $ref->nbChild}}" type="text">
        <input name="refId" value="{{$ref->id}}" type="hidden">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">edit</button>
    </form>
</div>
