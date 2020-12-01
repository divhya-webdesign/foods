    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: index.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Login </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet"  href="style.css">
    <link rel="stylesheet"  href="css/fixed.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="font/flaticon.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
  

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
      </ul>
    </div>
   </div>
  </nav>



    <div class="container" style="padding-top: 7%; text-align: left;">
    <center>
      <div class="jumbotron bg-4 text-center" style="width: 600px; height: 500px;">
        <h1 style="margin-left: 40px;">Welcome Customer</h1>

          <div class="container" style="margin-bottom: 2%;">
      
           <label style="margin-left: 5px; color: red;"><span> <?php echo $error;  ?> </span></label>
           <div class="panel panel-primary">
            <div class="panel-body">
              
            <form action="" method="POST">
              <center>
            
                <label for="username"><span class="text-danger">*</span> Username: </label>
                <div class="input-group" style="width: 200px;">
                  <input class="form-control"  id="username" type="text" name="username" placeholder="Username" required="" autofocus="">
                  
                </div>
                <br>
            
                <label for="password"><span class="text-danger">*</span> Password: </label>
                <div class="input-group" style="width: 200px;">
                  <input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">                  
                </div>
                <br>
            
                  <button class="btn btn-primary" name="submit" type="submit" value=" Login ">Submit</button>
              </center><br>
            <label style="">or</label> <br>
            <label ><a href="customersignup.php" style="color:white; text-decoration: underline;">Create a new account.</a></label>

            </form>
            </div>     
            </div>

          </div>

      </div>
    </center>
    </div>

  

    





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
    </body>
</html>