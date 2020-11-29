    <?php
include('login_u.php'); 

if(isset($_SESSION['login_user2'])){
header("location: order.php"); 
}
?>

<!DOCTYPE html>
<html>

  <head>
    <title> Login | Le Félicite </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style type="text/css">
      body {
      font-family: sans-serif;
      background-color: #dddddd;
      text-align: center;
      }
      #toTop{
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: white;
        color: #555555;
        cursor: pointer;
        padding: 15px;
        border-radius: 40px;
      }
      #toTop:hover {
        background-color: darkgreen;
        color: white;
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
        <li class="nav-item">
          <a class="nav-link" href="order.php">Back to menu</a>
        </li>
      </ul>
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