@extends('admins.temp')

@section('content')


 
<table class="table">
        <thead class="thead-dark">
            <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Auther</th>
            <th>Edition Number</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Student Info</th>
            </tr>
        </thaed>
        @foreach($allboo as $books)
        
        <tr>
        <td>{{$books["id"]}}</td>
        <td>{{$books["book_name"]}}</td>
        <td>{{$books["auther"]}}</td>
        <td>{{$books["edition_number"]}}</td>
        <td>{{$books["created_at"]}}</td>
        <td>{{$books["updated_at"]}}</td>
        <td> <a class="btn btn-primary" href="get/{{$books['user_id']}}">Student Info</a></td>

        </tr>
        @endforeach
    
    </table>


@endsection