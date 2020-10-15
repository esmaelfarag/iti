<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">




<!-- Scripts -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>


    <style>
    .log
    {
      position:fixed;
      right:0px;
      top:17px;
      font-size:25px;
      font-weight:bold;
      background-color:#EEE;
      color:#124;
      padding:5px;
      border-radius:20px;
    }
    .prof
    {
      position:fixed;
      right:120px;
      top:17px;
      font-size:25px;
      font-weight:bold;
      background-color:#EEE;
      color:#124;
      padding:5px;
      border-radius:20px;
    }
    .log:hover
    {
      background-color:#188;
      color:#124;
    }
    .navbar
    {
      padding:14px;
      border-bottom:2px solid #DDD;
      
    }
    .navbar-brand
    {
      color:olive;
      font-size:25px;
      margin-right:35px;
      font-weight:bold;
    }
    .navbar-brand:hover
    {
      color:olive;
      
    }
    .nav-item
    {
      font-size:23px;
      font-weight:bold;
      
    }
    .nav-item .nav-link
    {
      color:#000;
      margin-right:40px;
    }
    .nav-item .nav-link:hover
    {
      color:#030;
      background-color:#EEE;
      border-radius:20px;
    }
    body
    {
      background:rgba(134, 121, 121, 0.4);
    }
    table
    {
      background:rgb(255, 255, 255);
    }
    .card
    {
      margin-top:30px;
      margin:0;
      background:#FFF;
      border:2px solid #BBB;

    }

    .card-title
    {
      color:#AAA;
      font-size:50px;
      margin:10px;
    }
    .card .card-img 
    {
      width:100%;
      border:2px solid #BBB;
      opacity:0.8;
    }
    .card-text,.text-muted
    {
      color:#168;
      font-size:30px;
    }
    .card-body 
    {
      text-align:center;
      margin:50px;
    }
    footer .foo 
    {
      font-size:30px;
      font-weight:bold;
      color:#124;
      background-color:#EEE;
      padding:10px;
      border-top:2px solid #186;
      margin-top:50px;
    }
    .data 
    {
      margin:150px auto;
    } 
   
    


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-light fixed-top">
  <a class="navbar-brand" href="/dash">Administrator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item ">
        <a class="nav-link" href="/dash">Dashboard</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="/allbook">All_books </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/borrowedbook">borrowed_books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/getusr">All_Users</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link btn btn-info log" href="/logout">Logout</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link btn btn-success prof" href="/adprofile">Profile</a>
      </li>
 
    </ul>

  </div>

  
</nav>

<br><br>   
     
    <div>
    @yield('content2')
    </div> 
    <div class="container data">
    @yield('content')
    </div>
    
<footer class="text-center fixed-bottom">
<div class="foo">All CopyRights &copy; Reserved By &reg; EM_AS Team </div>
</footer>
</body>

</html>