<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Date</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<style>
   .dd 
   {
       margin: 300px auto;
       background-color:#DDD;
       border-radius:20px;
       border:3px solid #124;
       padding:20px;
   }
   .dd #party 
   {
     
       width:350px;
       padding:20px;
       font-weight:bold;
       font-size:22px;
       border:3px solid #AAA;
   }
   .dd label 
   {
       display:block;
       padding:20px;
       font-weight:bold;
       font-size:30px;
       color:#168;
   }
   .dd #sub 
   {
       padding:15px;
       font-weight:bold;
       font-size:20px;
       color:#168;
       margin-left:50px;
       border:1.5px solid #123;
       border-radius:20px;

   }
   body{background-color:lightgreen;}
</style>
</head>
<body>
    <div class="container dd">
    <form action="">
    <label for="party">Select The Suitable Date And Time:</label>
    <input id="party" type="datetime-local" name="partydate" value="2020-10-16T08:30">
    <input id="sub" type="submit">
    </form>
    </div>
</body>
</html>