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

<body style="width: 100%;margin-left: 0%;margin-right:0%;margin: 0px;">

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
		
			<li class="nav-item active" style="padding-right:15px;">
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
		   <!--<li class="nav-item" style="padding-right:15px">
				  <a class="nav-link" href="customerlogin.php" >LOG IN</a>
				</li>
				<li class="nav-item" style="padding-right:15px">
					<a class="nav-link" href="#" >CART</a>
				  </li>
			  </ul>
			</div>
			</div>
			</nav>-->
			<?php
            session_start();
            ?>
		   <?php
if(isset($_SESSION['login_user1'])){
?>
      <span class="nav navbar-nav navbar-right" style="color: black;">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
        <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
        <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
      </span>
<?php 
}


//USER WHO HAS LOGGED IN
else if (isset($_SESSION['login_user2'])) {
  ?>
        

        <li class="nav-item" style="padding-right:15px">
			  <a class="nav-link" href="logout_u.php">LOG OUT</a>
      </li>  
      
    <li class="nav-item" style="padding-right:15px">
      <a class="nav-link disabled" href="#"> <b style="color:#ceb829">Signed in as <?php echo $_SESSION['login_user2']; ?> </b></a>
    </li>

    <!--<li class="nav-item clickable" onclick="toggleCart()">
    <span class="nav-link active"> <img src="https://www.freeiconspng.com/uploads/grocery-basket-icon-1.png" height="30px" width="30px" >
        (<?php
        if(isset($_SESSION["cart"])){
          $count = count($_SESSION["cart"]); 
          echo "$count"; 
        }
        else
          echo "0";
         ?>) 
       </span>
        </li>-->

      
      </ul>
      </div>
    </nav>
    <?php        
}
    //USER WHO HASN'T LOGGED IN
else {
  ?>

  <li class="nav-item" style="padding-right:15px">
    <a class="nav-link" href="customerlogin.php">LOG IN</a>
  </li>

  <!--<li class="nav-item clickable" onclick="toggleCart()">
  <a class="nav-link" href="#">CART</a> 
  </li>-->
  </ul>
   </div>

      </div>
    </nav>
    <?php
}
?>

		<div class="d-flex flex-row align-items-center justify-content-start" id="home">
		<div id="myCarousel" class="carousel slide " data-ride="carousel" style="width: 100%;">

			<ul class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ul>
			
			<div class="carousel-inner">
			  <div class="carousel-item active ">
				<img src="https://luxurylaunches.com/wp-content/uploads/2015/08/Nusantao_Doha_-1.jpg" alt="Los Angeles" style="height:100%;width: 100%;">
			  </div>
		  
			  <div class="carousel-item ">
				<img src="img/5.jpg" alt="Chicago" style="height:100%;width: 100%;" >
			  </div>
			  <div class="carousel-item">
				<img src="img/1.jpg" alt="New York" style="height:100%;width: 100%;">
			  </div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
			  <span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" data-slide="next">
			  <span class="carousel-control-next-icon"></span>
			</a>
								
		  </div>
     </div>

<div id="about us" style="background-color:white;">
	<div class="aboutusrow">
			
		<div class="col-md-4 fadeInUp " >
			<div class="d-block text-center block-6">
			<div class="d-flex justify-content-center align-items-center mb-5">
			<img src="img/intro_1.jpg" style="max-width: 100%;max-height: 100%;">
			</div>
			</div>
		</div>
	
		<div class="col-md-4 fadeInUp" >
			<div class="d-block text-center block-6 ">
			<div class="d-flex justify-content-center align-items-center mb-5">
				<img src="img/intro_2.jpg" style="max-width: 100%;max-height: 100%;">
			</div>
			</div>
		</div>
	
		<div class="col-md-4 fadeInUp" >
			<div class="d-block text-center block-6 ">
			<div class="d-flex justify-content-center align-items-center mb-5">
				<img src="img/intro_2.jpg" style="max-width: 100%;max-height: 100%;">
			</div>
			</div>
		</div>
	</div>
	</div>
</div>
	</div>
</div>

<div class="parallax menu" id="course" 
style="background-image: url(https://images.squarespace-cdn.com/content/v1/5b1e763d45776e42e78d23c4/1541136765634-FW2LKHKY53OABRJGLHMD/ke17ZwdGBToddI8pDm48kLkXF2pIyv_F2eUT9F60jBl7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0iyqMbMesKd95J-X4EagrgU9L3Sa3U8cogeb0tjXbfawd0urKshkc5MgdBeJmALQKw/SML_KOKO+April+20188700.jpg?format=1000w);background-color: burlywood;padding-top: 180px;padding-bottom: 180px;color: white;">

	<div class="col-12 narrow text-center">
		<h1>Discover Our Menu</h1>
		<p class="lead"> Our talented team of chefs are seriously picky about our kitchen produce, using quality ingredients from fresh and local sources wherever possible. </p>
		<a class="btn btn-secondary btn-md" href="order.php" target="_blank" style="background-color: #ceb829;color: black;">View Our Menu</a>
	</div>
</div>


<div class="easytoorder" id="easy to order" style="background-color: #1f1c1c;color: white;">
	<div class="container">
		<div class="row">

		<div class="col-md-4">
		<div class="d-block text-center block-6 ">
		<div class="d-flex justify-content-center align-items-center mb-5">
		<span class="flaticon-choices"></span>
		</div>
		<div class="media-body">
		<h3 class="heading">Easy to Order</h3>
		<p>Getting food delivered right at your doorstep anytime anywhere is easier than ever.</p>
		</div>
		</div>
		</div>

		<div class="col-md-4">
		<div class="d-block text-center block-6 ">
		<div class="d-flex justify-content-center align-items-center mb-5">
		<span class="flaticon-delivery-man"></span>
		</div>
		<div class="media-body">
		<h3 class="heading">Fastest Delivery</h3>
		<p>For the times when you’re busy and too time-cramped to step out for lunch, We are here for you.</p>
		</div>
		</div>
		</div>
		<div class="col-md-4">
		<div class="d-block text-center block-6">
		<div class="d-flex justify-content-center align-items-center mb-5">
		<span class="flaticon-tray"></span>
	    </div>
		<div class="media-body">
		<h3 class="heading">Quality Food</h3>
		<p>We set a high standard for our food quality with quality ingredients and an experienced cook.
		</p>
		</div>
		</div>
		</div>
		</div>
		</div>
</div>

<div class= "parallax reviews" id="reviews" style="background-image: url(img/7.jpg);color: white;background-repeat: no-repeat;background-size: cover;">
	<div class="container" >
		<div class="row justify-content-center mb-5">
		  <div class="col-md-7 text-center">
			  <span class="subheading">Testimony</span>
			<h2 class="mb-4">Customers Says</h2>
		  </div>
		</div>
	  </div>

	  <div class="container-wrap"> 
		<div class="row d-flex no-gutters" >
		  <div class="col-lg align-self-sm-end ">
			<div class="testimony">
			   <blockquote>
				  <p>“The food was fresh, properly prepared and a great value for the price. We highly recommend it. The breakfast buffet on Sunday was equally as good.”</p>
				</blockquote>
				<div class="person d-flex mt-4">
				  <div class="image mr-3 align-self-center">
					<img src="img/person1.jpg" alt="">
				  </div>
				  <div class="name align-self-center">Kelly Louise <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		  </div>
		
		  <div class="col-lg align-self-sm-end " >
			<div class="testimony">
			   <blockquote>
				  <p>“A very friendly welcoming place to spend a couple of nights.  All personnel were very well trained, accommodating and helpful (all done with a smile).Food was delicious and the view was wonderful while dining. Thanks for doing such an outstanding job to make the stay so pleasurable. ”</p>
				</blockquote>
				<div class="person d-flex mt-4">
				  <div class="image mr-3 align-self-center">
					<img src="img/person2.jpg" alt="">
				  </div>
				  <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		  </div>
		
		  <div class="col-lg align-self-sm-end" style="color: gray;">
			<div class="testimony">
			   <blockquote>
				  <p>“Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small  line of blind text by the name. ”</p>
				</blockquote>
				<div class="person d-flex mt-4">
				  <div class="image mr-3 align-self-center">
					<img src="img/team/team1.png" alt="">
				  </div>
				  <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		  </div>
		
		  <div class="col-lg align-self-sm-end">
			<div class="testimony overlay">
			   <blockquote>
				  <p>“The food was fresh, properly prepared and a great value for the price. We highly recommend it. The breakfast buffet on Sunday was equally as good.”</p>
				</blockquote>
				<div class="person d-flex mt-4">
				  <div class="image mr-3 align-self-center">
					<img src="img/team/team2.png" alt="">
				  </div>
				  <div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
				</div>
			</div>
		  </div>
		
		  <div class="col-lg align-self-sm-end" >
			<div class="testimony">
			  <blockquote>
				<p>“Everything was handled with efficiency and attention to every detail was given. Food was delicious and the view was wonderful while dining. Thanks for doing such an outstanding job to make the stay so pleasurable.</p>
			  </blockquote>
			  <div class="person d-flex mt-4">
				<div class="image mr-3 align-self-center">
				  <img src="img/person2.jpg" alt="">
				</div>
				<div class="name align-self-center">Louise Kelly <span class="position">Illustrator Designer</span></div>
			  </div>
			</div>
		  </div>
		
		</div>
	  </div>
</div>

<div class= "footer" id="footer" style="text-align: center;padding-top: 7%;">

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

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
<!--- End of Script Source Files -->

</body>
</html>