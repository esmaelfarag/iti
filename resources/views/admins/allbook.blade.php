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
            <th>Edit</th>
            <th>Delete</th>
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
        <td><a class="btn btn-success" href="editpage/{{$books['id']}}">Edit</a></td>
        <td><a class="btn btn-danger" href="deletebook/{{$books['id']}}">Delete</a></td>
        </tr>
        @endforeach
        <tr><td colspan='8'><center><a class="btn btn-primary btn-lg" href="addbook">Add Book</a></center></td></tr>
    </table>
   



@endsection
