@if(isset($message))
    {{$message}}
@endif

<form method="post">
    {{csrf_field()}}
    Name: <input name="name" type="text"/> <br/>
    Description: <input name="description" type="text"/> <br/>
    <input type="submit" value="Create"/> <br/>
</form>