@extends('admins.temp')

@section('content')

<form method="post" action="/editbook/{{$bookid}}" class="container">
    @csrf
    @method("put")
 
    <table class="table ">
            

        <tr>
            <th>Book Name</th><td><input type="text" name="book_name"></td>
            <td><label class="text-danger"> {{$errors->first("book_name")}}</label></td>
        </tr>
        <tr>
            <th>Auther</th><td><input type="text" name="auther"></td>
            <td><label class="text-danger"> {{$errors->first("auther")}}</label></td>
        </tr>
        <tr>
            <th>Edition Number</th><td><input type="text" name="edition"></td>
            <td><label class="text-danger"> {{$errors->first("edition_number")}}</label></td>
        </tr>
        
        
    </table>

    <input class="btn btn-primary" type="submit" value="Done">
   
    <a class="btn btn-warning" href="/allbook">Cancel</a>
</form>


@endsection