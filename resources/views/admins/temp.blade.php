<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
      right:50px;
      top:17px;
      font-size:25px;
      font-weight:bold;
      color:#000;
      padding:5px;
      background-color:#CCC;
      border-radius:20px;
    }
    .log:hover
    {
      background-color:#EEE;
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
   
    


    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-light navbar-fixed">
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
        <a class="nav-link btn btn-secondary log" href="/logout">Logout</a>
      </li>
 
    </ul>

  </div>

  
</nav>

<br><br>   

    <div class="container">
    @yield('content')
    </div>

</body>

</html>