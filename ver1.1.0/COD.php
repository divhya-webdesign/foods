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
    <link rel="stylesheet"  href="style.css">

    <link rel="stylesheet"  href="css/fixed.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/flaticon.css">
  

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <style type="text/css">
      body {
          font-family: sans-serif;
          background: #eeeeee url(https://assets.yellowtrace.com.au/wp-content/uploads/2013/07/APOLLO-Sydney-by-George-Livissianis-Yellowtrace-01.jpg) fixed;
          text-align: center;
        }
        
      .bg-4{
        background-color: #2f2f2f;
        color: #ffffff;
      }
    </style>
  </head>
  <body>

  <nav class="navbar navbar-expand-md navbar-custom navbar-dark fixed-top show-on-scroll " style="border-bottom: 5px solid #ceb829;font-size:20px">
    <div class="container-fluid " id="navbarResponsive">

      <div class="header_content ">
        <div class="logo">
          <a href="index.php">
            <div style="font-size: 33px;line-height: 1;color: #FFFFFF;font-family: 'PT Sans Narrow', sans-serif;">The Venue</div>
            <div style="font-size: 14px;text-transform: uppercase;color: #FFFFFF;letter-spacing: 0.600em;line-height: 0.80;margin-top: 12px;">restaurant</div>
          </a>
        </div>
      </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto" style="padding-left:10px;color:white">
    
      <li class="nav-item" style="padding-right:15px;">
        <a class="nav-link" href="index.php" >HOME</a>
      </li>
      <li class="nav-item" style="padding-right:15px">
        <a class="nav-link" href="booking.php" >RESERVATION</a>
      </li>
       <li class="nav-item" style="padding-right:15px" >
        <a class="nav-link" href="order.php">MENU</a>
      </li>
       <li class="nav-item" style="padding-right:15px">
        <a class="nav-link" href="gal.php">GALLERY</a>
      </li>
  
<?php

//USER WHO HAS LOGGED IN
if (isset($_SESSION['login_user2'])) {
  ?>
        <li class="nav-item" style="padding-right:15px"><a class="nav-link" href="logout_u.php"> Log Out </a></li>  
    <li class="nav-item" style="padding-right:15px">
      <a class="nav-link disabled" href="#"> <b style="color:#ceb829">Signed in as <?php echo $_SESSION['login_user2']; ?> </b> </a>
    </li>
    <li class="nav-item clickable" onclick="toggleCart()" >
      <span class="nav-link active">  <img src="https://www.materialui.co/materialIcons/action/shopping_basket_white_192x192.png" height="30px" width="30px"> 
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
      </ul>
      </div>
    </div>
    </nav>


  <?php        
}

//USER WHO HASN'T LOGGED IN
else {
  ?>
  
  </ul>
   </div>

      </div>
    </nav>

<?php
}
?>

        <div class="container" style="background-color: rgba(238,238,238,0.6); padding-bottom: 180px; margin-top: 75px;">
          <div class="jumbotron bg-4">
            <h1 class="text-center" style="color: white;"><span class="glyphicon glyphicon-ok-circle"> </span> Order Placed Successfully.</h1>
          </div>
          <br><br><br><br>
          <h2 class="text-center" > Thank you for Ordering!</h2>
        </div>
        <br>




        </body>

</html>