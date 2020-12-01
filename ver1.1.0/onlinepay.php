<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2']) || !isset($_SESSION['cart'])){
header("location: customerlogin.php"); 
}

?>

<html>

  <head>
    <title> Online Payment </title>
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
      a:hover {
        text-decoration: none;
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
   


<div class="container" style=" background-color: rgba(210,210,210,1); margin-top: 75px;">
    <div class="row bg-4">
        <div class="jumbotron bg-4">
          <h1 class="text-center">Online Payment</h1>
          <p class="text-center">Enter your payment details below.</p>
        </div>
    </div>
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <div class="credit-card-div">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <br>
                                <h5 class="text-muted"> Credit Card Number</h5>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" placeholder="0000"/>
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font"> Expiry Month</span>
                                <input type="text" class="form-control" placeholder="MM"  />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  Expiry Year</span>
                                <input type="text" class="form-control" placeholder="YY" r/>
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3">
                                <span class="help-block text-muted small-font">  CCV</span>
                                <input type="text" class="form-control" placeholder="CCV"  />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-3"><br>
                                <img src="images/creditcard.png" class="img-rounded"  />
                            </div>
                        </div>
                        <br>
                        <div class="row ">
                            <div class="col-md-12 pad-adjust">

                                <input type="text" class="form-control" placeholder="Name On The Card" required="" />
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 pad-adjust">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked class="text-muted" required=""> Save details for fast payments. 
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row ">
                            <div class="col-md-6 col-sm-6 col-xs-6 pad-adjust">
                              <a href="COD.php"><input type="submit" class="btn btn-success btn-block" value="PAY NOW" required="" /></a>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</div>
<br><br>
  
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  </body>
</html>