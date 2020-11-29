<?php
session_start();
require 'connection.php';
$conn = Connect();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Restaurant</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet"  href="style.css">
	<link rel="stylesheet"  href="css/fixed.css">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="font/flaticon.css">
</head>

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
<!--- End of Script Source Files -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Order food</title>
    <style type="text/css">
      body {
        font-family: sans-serif;
        background-color: #dddddd;
        text-align: center;
      }
      .active-sp {
        text-align: center;
        overflow-wrap: break-word;
      }
      .menu-sp {
        display: grid;
        grid-template-columns: auto auto;
        grid-gap: 40px;
        padding-top: 60px;
        padding-left: 90px;
      }
      .select-sp {
        width: 450px;
        position: fixed;
        border: solid 1px #555555;
        background-color: rgba(255,255,255,0.7);
        height: 500px;
        z-index: 99;
        bottom: 40px; 
          right: 30px;
          overflow: scroll;
      }
      #checkout {
        height: 50px;
        width: 90px;
        background-color: #454545;
        color: white;
        font-weight: bold;
        font-size: 16px;
        border: hidden;
        margin-top: 40px;
        margin-bottom: 20px;
      }
      .menu-item {
        padding: 40px;
      }
      a {
        color: black;
        text-decoration: none;
      }
      a:hover {
        color: blue;
      }
      #toTop{
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
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
      .clickable:hover {
        cursor: pointer;
      }
      </style>


  <body>

    <button onclick="topFunction()" id="toTop" title="Go to top">
       <b>^</b>
      top
    </button>
  
  <!--<nav class="navbar navbar-expand-lg navbar-light bg-light" role="navigation" style="height: 70px; background-color: white; box-shadow: 0px 0px 2px #000000;">
    <a class="navbar-brand" href="#">Le Felicite</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar" style="width: 100%;">
    <ul class="navbar-nav mr-auto" style="width: 100%;">
      <li class="nav-item align-middle">
        <a class="nav-link" href="index.php">Back to home</a>
      </li>-->
  

      <nav class="navbar navbar-expand-md navbar-custom navbar-dark fixed-top show-on-scroll " style="border-bottom: 5px solid #ceb829;">
		<div class="container-fluid " id="navbarResponsive">

			<div class="header_content ">
				<div class="logo">
					<a href="#">
						<div style="font-size: 30px;line-height: 0.75;color: #FFFFFF;font-family: 'PT Sans Narrow', sans-serif;">The Venue</div>
						<div style="font-size: 12px;text-transform: uppercase;color: #FFFFFF;letter-spacing: 0.680em;line-height: 0.75;margin-top: 12px;">restaurant</div>
					</a>
				</div>
			</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto" style="padding-left:10px;">
		
			<li class="nav-item" style="padding-right:15px;">
			  <a class="nav-link" href="index.php" >HOME</a>
			</li>
			<li class="nav-item" style="padding-right:15px">
			  <a class="nav-link" href="booking.php" >RESERVATION</a>
			</li>
		   <li class="nav-item active" style="padding-right:15px" >
			  <a class="nav-link" href="order.php">MENU</a>
			</li>
		   <li class="nav-item" style="padding-right:15px">
			  <a class="nav-link" href="gal.php">GALLERY</a>
			</li>

<?php

//USER WHO HAS LOGGED IN
if (isset($_SESSION['login_user2'])) {
  ?>
        
    <li class="nav-item" style="padding-right:15px"><a class="nav-link" href="logout_u.php">LOG OUT</a></li>  

    <li class="nav-item" style="padding-right:15px">
      <a class="nav-link disabled" href="#" style="color:#ceb829"><B>Signed in as <?php echo $_SESSION['login_user2']; ?> </b> </a>
    </li>
    <li class="nav-item clickable" onclick="toggleCart()" style="padding-right:15px">
      <span class="nav-link active"> <img src="https://www.freeiconspng.com/uploads/grocery-basket-icon-1.png" height="25px" width="25px"> 
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
      
    </nav>

    <div class="wide">

      <div class="active-sp">
        <div class="menu-sp">

              <!--AUTO GENERATING FOOD CARDS FROM SQL-->
              <?php

                

                $sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0)
                {
                  $count=0;
                  while($row = mysqli_fetch_assoc($result)){
                    
                  ?>
                  <div class="card menu-item" style="width: 85%; margin-top: 20px; margin-bottom: 20px;">
                    <form method="post" action="order.php?action=add&id=<?php echo $row["F_ID"]; ?>">
                      <img src="<?php echo $row["images_path"]; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                        <p class="card-text"><?php echo $row["description"]; ?></p>
                        <p class="card-text"><?php echo $row["price"]; ?>/-</p>
                        <p class="card-text">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 50px; display: inline;"></p>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                        <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
                        <input type="submit" name="add" class="btn btn-primary" value="Add to Cart">
                      </div>
                    </form>
                  </div>
                  <?php
                  
                  }
                }
                  ?>

          </div>


          <!--CART-->
          <div class="select-sp" id="floatCart" style="visibility: hidden;">
            <?php
              if(!empty($_SESSION["cart"]))
              {
                ?>
            <h1>Your Order</h1>
            <div class="table-responsive" >
            <table class="table table-striped">
              <thead class="thead-dark">
            <tr>
            <th width="40%">Food Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price Details</th>
            <th width="15%">Order Total</th>
            <th width="5%">Action</th>
            </tr>
            </thead>

            <?php  

            $total = 0;
            foreach($_SESSION["cart"] as $keys => $values)
            {
            ?>
            <tr>
            <td><?php echo $values["food_name"]; ?></td>
            <td><?php echo $values["food_quantity"] ?></td>
            <td>&#8377; <?php echo $values["food_price"]; ?></td>
            <td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
            <td><a href="?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["food_quantity"] * $values["food_price"]);
            }
            ?>
            <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
            <td></td>
            </tr>
            </table>
            
            <?php
              echo '<a href="?action=empty"><button class="btn btn-danger"></span> Empty Cart </button></a><a href="order.php"><button class="btn btn-warning"> Continue Shopping</button></a>&nbsp;<a href="payment.php"><button class="btn btn-success pull-right"></span> Check Out</button></a>';
            ?>
            
            </div>
            <br><br><br><br><br><br><br>
            <?php
            }
            if(empty($_SESSION["cart"]))
            {
              ?>
              <div id="items">
                 Nothing selected
            </div>
               
                <?php
            }
            ?>


            <?php


            if(isset($_POST["add"]))
            {
            if(isset($_SESSION["cart"]))
            {
            $item_array_id = array_column($_SESSION["cart"], "food_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
            $count = count($_SESSION["cart"]);

            $item_array = array(
            'food_id' => $_GET["id"],
            'food_name' => $_POST["hidden_name"],
            'food_price' => $_POST["hidden_price"],
            'R_ID' => $_POST["hidden_RID"],
            'food_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
            }
            else
            {
            echo '<script>alert("Products already added to cart")</script>';
            }
            }
            else
            {
            $item_array = array(
            'food_id' => $_GET["id"],
            'food_name' => $_POST["hidden_name"],
            'food_price' => $_POST["hidden_price"],
            'R_ID' => $_POST["hidden_RID"],
            'food_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
            }
            }
            if(isset($_GET["action"]))
            {
            if($_GET["action"] == "delete")
            {
            foreach($_SESSION["cart"] as $keys => $values)
            {
            if($values["food_id"] == $_GET["id"])
            {
            unset($_SESSION["cart"][$keys]);
            echo '<script>alert("Food has been removed")</script>';
            echo '<script>window.location="order.php"</script>';
            }
            }
            }
            }

            if(isset($_GET["action"]))
            {
            if($_GET["action"] == "empty")
            {
            foreach($_SESSION["cart"] as $keys => $values)
            {

            unset($_SESSION["cart"]);
            echo '<script>alert("Cart is made empty!")</script>';
            echo '<script>window.location="order.php"</script>';

            }
            }
            }


            ?>
            <?php

            ?>

        </div>
      </div>
      
    </div>
     

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

    <div class="wide">

      <div class="active-sp">
        <div class="menu-sp">

              <!--AUTO GENERATING FOOD CARDS FROM SQL-->
              <?php

                
                $sql = "SELECT * FROM FOOD WHERE options = 'ENABLE' ORDER BY F_ID";
                $result = mysqli_query($conn, $sql);
                  $count=0;
                  while($row = mysqli_fetch_assoc($result)){
                    
                  ?>
                  <div class="card menu-item" style="width: 85%; margin-top: 20px; margin-bottom: 20px;">
                    <form method="post" action="order.php?action=add&id=<?php echo $row["F_ID"]; ?>">
                      <img src="<?php echo $row["images_path"]; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                        <p class="card-text"><?php echo $row["description"]; ?></p>
                        <p class="card-text"><?php echo $row["price"]; ?>/-</p>
                        <p class="card-text">Quantity: <input type="number" min="1" max="25" name="quantity" class="form-control" value="1" style="width: 50px; display: inline;"></p>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                        <input type="hidden" name="hidden_RID" value="<?php echo $row["R_ID"]; ?>">
                        <input type="submit" name="add" class="btn btn-primary" value="Add to Cart">
                      </div>
                    </form>
                  </div>
                  <?php
                  
                  }
                  ?>

          </div>


          <!--CART-->
          <div class="select-sp" id="floatCart" style="visibility: hidden;">
            <?php
              if(!empty($_SESSION["cart"]))
              {
                ?>
            <h1>Your Order</h1>
            <div class="table-responsive" >
            <table class="table table-striped">
              <thead class="thead-dark">
            <tr>
            <th width="40%">Food Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price Details</th>
            <th width="15%">Order Total</th>
            <th width="5%">Action</th>
            </tr>
            </thead>

            <?php  

            $total = 0;
            foreach($_SESSION["cart"] as $keys => $values)
            {
            ?>
            <tr>
            <td><?php echo $values["food_name"]; ?></td>
            <td><?php echo $values["food_quantity"] ?></td>
            <td>&#8377; <?php echo $values["food_price"]; ?></td>
            <td>&#8377; <?php echo number_format($values["food_quantity"] * $values["food_price"], 2); ?></td>
            <td><a href="order.php?action=delete&id=<?php echo $values["food_id"]; ?>"><span class="text-danger">Remove</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["food_quantity"] * $values["food_price"]);
            }
            ?>
            <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">&#8377; <?php echo number_format($total, 2); ?></td>
            <td></td>
            </tr>
            </table>
            
            <?php
              echo '<a href="order.php?action=empty"><button class="btn btn-danger"></span> Empty Cart</button></a><a href="order.php"><button class="btn btn-warning">Continue Shopping</button></a>&nbsp;<a href="customerlogin.php"><button class="btn btn-success pull-right"></span> Check Out</button></a>';
            ?>
            
            </div>
            <br><br><br><br><br><br><br>
            <?php
            }
            if(empty($_SESSION["cart"]))
            {
              ?>
              <div id="items">
                 Nothing selected
            </div>
               
                <?php
            }
            ?>


            <?php


            if(isset($_POST["add"]))
            {
            if(isset($_SESSION["cart"]))
            {
            $item_array_id = array_column($_SESSION["cart"], "food_id");
            if(!in_array($_GET["id"], $item_array_id))
            {
            $count = count($_SESSION["cart"]);

            $item_array = array(
            'food_id' => $_GET["id"],
            'food_name' => $_POST["hidden_name"],
            'food_price' => $_POST["hidden_price"],
            'R_ID' => $_POST["hidden_RID"],
            'food_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
            }
            else
            {
            echo '<script>alert("Products already added to cart")</script>';
            echo '<script>window.location=""</script>';
            }
            }
            else
            {
            $item_array = array(
            'food_id' => $_GET["id"],
            'food_name' => $_POST["hidden_name"],
            'food_price' => $_POST["hidden_price"],
            'R_ID' => $_POST["hidden_RID"],
            'food_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][0] = $item_array;
            }
            }
            if(isset($_GET["action"]))
            {
            if($_GET["action"] == "delete")
            {
            foreach($_SESSION["cart"] as $keys => $values)
            {
            if($values["food_id"] == $_GET["id"])
            {
            unset($_SESSION["cart"][$keys]);
            echo '<script>alert("Food has been removed")</script>';
            echo '<script>window.location=""</script>';
            }
            }
            }
            }

            if(isset($_GET["action"]))
            {
            if($_GET["action"] == "empty")
            {
            foreach($_SESSION["cart"] as $keys => $values)
            {

            unset($_SESSION["cart"]);
            echo '<script>alert("Cart is made empty!")</script>';
            echo '<script>window.location=""</script>';

            }
            }
            }


            ?>
            <?php

            ?>

        </div>
      </div>
      <br>
      <!--<div class="col-xs-5"><hr></div>
      <br>
      <div class="orderblock">
        <h2>Feeling Hungry?</h2>
        <p>Order now to select from more items</p><br>
        <center><a class="btn btn-outline-dark btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
      </div>
    </div>-->

<?php
}
?>
       

    <br><br>
    <div class= "footer bg-dark" id="footer" style="text-align: center;padding-top: 7%;color:white">

	<div class="container">
		<div class="row">
		<div class="col-md-3 fadeInUp ">
		<div class="d-block text-center block-7 ">
		<div class="d-flex justify-content-center align-items-center mb-5">
			<B>VISIT US</B>
		</div>
		<div class="media-body">
			Kamala Mills Compound,<br> Lower Parel,<br>Mumbai, Maharashtra 400013
			</div>
		</div>
		</div>

		<div class="col-md-3 fadeInUp">
		<div class="d-block text-center block-7 ">
		<div class="d-flex justify-content-center align-items-center mb-5">
			<b>OPENING HOURS</b>
		</div>
		<div class="media-body">
			Dine-in; Monday-Sunday<br>Lunch: 12pm – 4pm<br>Dinner: 7pm – 10pm 
			</div>
		</div>
		</div>

		<div class="col-md-3 fadeInUp">
			<div class="d-block text-center block-7">
			<div class="d-flex justify-content-center align-items-center mb-5">
				<b>DELIVERY</b>
			</div>
			<div class="media-body">
				Monday – Thursday <br>12pm – 10pm<br>Friday – Sunday <br> 12pm – 10.30pm
				</div>
			</div>
			</div>

			<div class="col-md-3 fadeInUp">
				<div class="d-block text-center block-7">
				<div class="d-flex justify-content-center align-items-center mb-5">
					<b>GENERAL ENQUIRIES</b>
				</div>
				<div class="media-body">
					Call +919876543210,<BR>+911234567890,<br>+919876543210
					</div>
				</div>
				</div>
			
		</div>
		<br><br>
		<!--<a href="#" style="color: #77724b;"><i class="fab fa-facebook" style="font-size: 50px;margin-right: 30px;"></i></a>
		<a href="#" style="color: #77724b;"><i class="fab fa-instagram" style="font-size: 50px;margin-right: 30px;"></i></a>
		<a href="#" style="color: #77724b;"><i class="fab fa-twitter" style="font-size: 50px;"></i></a>-->
		<br><br>
	    <div style="display: grid;">
		  <div style="grid-column:1;grid-row:1;">© 2020, The Venue</div>
		  <div style="grid-column:2;float: right;">Designed by Lakshmi, Mansi and Divhya</div>
	    </div>
		<br><br>
    </div>
</div>


      <script type="text/javascript">
        window.onscroll = function()
        {
          scrollFunction()
        };

        function scrollFunction(){
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("toTop").style.display = "block";
          } else {
            document.getElementById("toTop").style.display = "none";
          }
        }

        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }

        function toggleCart() {
          if(document.getElementById("floatCart").style.visibility == "visible") {
            document.getElementById("floatCart").style.visibility = "hidden";
          }
          else if(document.getElementById("floatCart").style.visibility == "hidden") {
            document.getElementById("floatCart").style.visibility = "visible";
          }
        }
      </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>