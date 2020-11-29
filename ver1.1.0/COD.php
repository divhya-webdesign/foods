<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

  <head>
    <title> Order complete </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <style type="text/css">
      body {
        font-family: sans-serif;
        background-color: #dddddd;
        text-align: center;
        }
        
      .bg-4{
        background-color: #2f2f2f;
        color: #ffffff;
      }
    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation" style="height: 70px; background-color: white; box-shadow: 0px 0px 2px #000000;">
    <a class="navbar-brand" href="index.html">Le Felicite</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar" style="width: 100%;">
    <ul class="navbar-nav mr-auto" style="width: 100%;">
      <li class="nav-item align-middle">
        <a class="nav-link" href="index.html">Back to home</a>
      </li>
  
<?php

//USER WHO HAS LOGGED IN
if (isset($_SESSION['login_user2'])) {
  ?>
        <div class="container px-0"> 
    <li class="nav-item active"><a class="nav-link" href="logout_u.php"> Log Out </a></li>  
    <li class="nav-item">
      <a class="nav-link disabled" href="#"> <b style="letter-spacing: 1px;"> Signed in as <?php echo $_SESSION['login_user2']; ?> </b> </a>
    </li>
    <li class="nav-item clickable" onclick="toggleCart()">
      <span class="nav-link active">  <img src="https://www.freeiconspng.com/uploads/grocery-basket-icon-1.png" height="30px" width="30px"> 
        (<?php
        if(isset($_SESSION["cart"])){
          $count = count($_SESSION["cart"]); 
          echo "$count"; 
        }
        else
          echo "0";
         ?>) 
       </span>
        </li>
      </div>
      </ul>
      </div>
    </nav>

  <?php        
}

//USER WHO HASN'T LOGGED IN
else {
  ?>
  <div class="container px-0">
  <li class="nav-item">
    <a class="nav-link active" href="customersignup.php">Register/Login</a>
  </li>
  <li class="nav-item clickable" onclick="toggleCart()">
      <span class="nav-link active">  <img src="https://www.freeiconspng.com/uploads/grocery-basket-icon-1.png" height="30px" width="30px"> 
        (<?php
        if(isset($_SESSION["cart"])){
          $count = count($_SESSION["cart"]); 
          echo "$count"; 
        }
        else
          echo "0";
         ?>) 
       </span>
        </li>
      </div>
  </ul>
   </div>

      </div>
    </nav>

<?php
}
?>
  



        <div class="container">
          <div class="jumbotron bg-4">
            <h1 class="text-center" style="color: green;"><span class="glyphicon glyphicon-ok-circle"></span> Order Placed Successfully.</h1>
          </div>
        </div>
        <br>

<h2 class="text-center"> Thank you for Ordering!</h2>


        </body>

</html>