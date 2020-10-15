@extends('admins.temp')
@section('content')
<form method="post" action="/edprof">    
    @csrf
    @method("put") 

    <table class="table ">
            
        @foreach($prof as $us)
        <tr>
            <th>New Name</th><td><input type="text" placeholder="{{$us['name']}}" value="{{$us['name']}}" name="name"></td>
            <td><label class="text-danger"> {{$errors->first("name")}}</label></td>
        </tr>
        <tr>
            <th>New Email</th><td><input type="text" name="email" placeholder="{{$us['email']}}" value="{{$us['email']}}"></td>
            <td><label class="text-danger"> {{$errors->first("email")}}</label></td>
        </tr>
        <tr>
            <th>New Password</th><td><input type="password" name="password"></td>
            <td><label class="text-danger"> {{$errors->first("password")}}</label></td>
        </tr>
        @endforeach
        
        
    </table>
<br>
<center><input type="submit" class="btn btn-primary btn-lg container" value="Confirm"></center>
<br>
<center><a class="btn btn-danger btn-lg container" href="/admin">Back</a></center>
</form> 



@endsection