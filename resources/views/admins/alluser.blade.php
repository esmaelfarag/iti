@extends('admins.temp')
@section('content')
<br>
<br>
<form method="get" action="getusr" class="form-inline container" style="margin">
    <input class="form-control mr-sm-2"  type="search" placeholder="Search" name="idsearch" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  <br>
  <br>
<table class="table container">
        <thead class="thead-dark">
            <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>E-Mail</th>
            </tr>
        </thaed>
        @foreach($usr as $books)
        <tr>
        <td>{{$books["id"]}}</td>
        <td>{{$books["name"]}}</td>
        <td>{{$books["email"]}}</td>
        </tr>
        @endforeach
    
    </table>
        
@endsection