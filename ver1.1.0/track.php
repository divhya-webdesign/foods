<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['ordernum'])) {
$error = "Username or Password or Order Number is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
$ordernum=$_POST['ordernum'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
require 'connection.php';
$conn = Connect();

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password FROM CUSTOMER WHERE username=? AND password=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt -> bind_param("ss", $username, $password);
$stmt -> execute();
$stmt -> bind_result($username, $password);
$stmt -> store_result();

if ($stmt->fetch())  
{
  $_SESSION['login_user2']=$username; // Initializing Session
  header("location: order.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>
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
      </div>

      </div>
    </nav>


    <div class="container" style="padding-top: 2%; text-align: left;">
    <div class="jumbotron bg-4">
     <h1>Welcome Customer</h1>
     <br>

    <div class="container" style="margin-bottom: 2%;">
      <div class=" col-md-offset-4">
        <label style="margin-left: 5px; color: red;"><span> <?php echo $error;  ?> </span></label>
          <div class="panel panel-primary">
            <div class="panel-body">
              
            <form action="" method="POST">
              
            <div class="row">
              <div class="form-group col-xs-12">
                <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Username: </label>
                <div class="input-group">
                  <input class="form-control" id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
                  
                  </span>
                </div>           
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-12">
                <label for="password"><span class="text-danger" style="margin-right: 5px;">*</span> Password: </label>
                <div class="input-group">
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
                  
                  
                </div>           
              </div>
            </div>

            <div class="row">
              <div class="form-group col-xs-4">
                  <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
              </div>

            </div>
            <label>or</label> <br>
           <label><a href="customersignup.php">Create a new account.</a></label>

            </form>
            </div>     
          </div>  
      </div>
    </div>

    </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    </body>
</html>