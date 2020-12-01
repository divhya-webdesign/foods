<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}
?>

<html>

  <head>
    <title> Payment options </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="css/fixed.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
  

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
      <a class="nav-link disabled" href="#"> <b style="color:#ceb829"><i class="fas fa-user-circle" style="font-size:30px"></i></span> <?php echo $_SESSION['login_user2']; ?> </b> </a>
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
      

 <?php
$gtotal = 0;

  

  foreach($_SESSION["cart"] as $keys => $values)
  {

    $F_ID = $values["food_id"];
    $foodname = $values["food_name"];
    $quantity = $values["food_quantity"];
    $price =  $values["food_price"];
    $total = ($values["food_quantity"] * $values["food_price"]);
    $username = $_SESSION["login_user2"];
    $order_date = date('Y-m-d');
    $gtotal = $gtotal + $total;
    $number = $_SESSION["extra_loc"];


     $query1 = "INSERT INTO ORDERS (F_ID, foodname, price,  quantity, order_date, username, O_ID) 
              VALUES ('" . $F_ID . "','" . $foodname . "','" . $price . "','" . $quantity . "','" . $order_date . "','" . $username . "','" . $number . "');";
     $query2 = "DELETE FROM CART WHERE CART.username ='$username';";
             

              $success1 = $conn->query($query1); 
              $success2 = $conn->query($query2);         

      if(!$success1)
      {
        ?>
        <div class="container">
          <div class="jumbotron bg-4">
            <h1>Something went wrong!</h1>
            <p>Try again later </p> 
          </div>
        </div>

        <?php
      }
      if(!$success2)
      {
        ?>
        <div class="container">
          <div class="jumbotron bg-4">
            <h1>Couldn't delete cart!</h1>
            <p>Try again later </p> 
          </div>
        </div>

        <?php
      }
      
  }

        ?>
        <div style=" background-color: rgba(238,238,238,0.7); padding-top: 40px;">
        <div class="container" style="margin-top: 80px;">

          <div class="jumbotron bg-4">
            <h1>Choose your payment option</h1>
          </div>
        </div>
        
        
<h1 class="text-center">Grand Total: &#8377;<?php echo "$gtotal"; ?>/-</h1>
<h5 class="text-center">including all service charges. (no delivery charges applied)</h5>
<br>
<h1 class="text-center" style="padding-bottom: 0px;">
  <h3 class="text-center">Order Number: <?php echo "$number";?></h3>
  <!--<a href="order.php"><button class="btn btn-warning"><span class="glyphicon glyphicon-circle-arrow-left"></span> Go back to cart</button></a>-->
  <a href="onlinepay.php"><button class="btn btn-success"><span class="glyphicon glyphicon-credit-card"></span> Pay Online</button></a>
  <a href="COD.php"><button class="btn btn-success"><span class="glyphicon glyphicon-"></span> Cash On Delivery</button></a>
</h1>
        


<br><br><br><br><br><br>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        </body>
</html>