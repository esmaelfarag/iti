@extends('admins.temp')
@section('content')

<table class="table container">
        
        @foreach($usr as $us)
        <tr>
            <th>ID</th><td>{{$us['id']}}</td>
        </tr>
        <tr>
            <th>Student Name</th><td>{{$us['name']}}</td>
        </tr>
        <tr>
            <th>E-mail</th><td>{{$us['email']}}</td>
        </tr>
        @endforeach
             
</table>
<center><a class="btn btn-danger btn-lg container" href="/borrowedbook">Back</a></center>

        
@endsection