<?php
            session_start();
?>
<!doctype html>
<html>
	<head>
		<title></title>
   		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width" initial-scale=1>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="font/flaticon.css">
		<script src="jquery.js"></script> 
		
		<style>
			 nav{
				background-color:rgba(0, 0, 0, .6);
			}
			.para2{
 				
				background-image: url("https://wallpaperaccess.com/full/276233.jpg");

  				min-height: 580px; 
  				background-attachment: fixed;
  				background-position: center;
  				background-repeat: no-repeat;
  				background-size: cover;
			}	

			.container {
			  position: relative;
			}

			.zoom:hover {
  				transform: scale(1.25);
  			}
  			.zoom{
  				transition: transform .2s; 
  	
  				margin: 0 auto;
  			}
  				
			
			.text-block {
			  position: absolute;
			  bottom: 250px;
			  right: 520px;
			  border: 2px solid black;
			  background-color: black;
			  padding-left: 10px;
			  color: white;
			  letter-spacing: 10px;
			  font-size:35px;
			  font-weight: 400;
			}

			* {
			  box-sizing: border-box;
			}


			.row {
				display: -ms-flexbox; /* IE10 */
			    display: flex;
			    -ms-flex-wrap: wrap; /* IE10 */
			    flex-wrap: wrap;
			    padding: 0 10px;
			}

			
			.column {
			    -ms-flex: 25%; /* IE10 */
			    flex: 25%;
			    max-width: 25%;
			    padding: 0 25px;
			}

			.column img {
			    margin-top: 20px;
			    vertical-align: middle;
			    width: 100%;
			}

			
			@media screen and (max-width: 800px) {
			  .column {
			    -ms-flex: 50%;
			    flex: 50%;
			    max-width: 50%;
			  }
			}

			
			@media screen and (max-width: 600px) {
			  .column {
			    -ms-flex: 100%;
			    flex: 100%;
			    max-width: 100%;
			  }
			}



		</style>
	</head>
	<body data-spy="scroll" data-target="#navbarResponsive" style="background-color:;overflow-x: hidden;width: 100%;margin-left: 0%;margin-right:0%" >
		

		<nav class="navbar navbar-expand-md navbar-custom navbar-dark fixed-top show-on-scroll " style="border-bottom: 5px solid black;">
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
				  <a class="nav-link" href="index.php">HOME</a>
				</li>
				<li class="nav-item" style="padding-right:15px">
				  <a class="nav-link" href="booking.php">RESERVATION</a>
				</li>
			   <li class="nav-item" style="padding-right:15px" >
				  <a class="nav-link" href="order.php" >MENU</a>
				</li>
			   <li class="nav-item" style="padding-right:15px">
				  <a class="nav-link active" href="gal.php">GALLERY</a>
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

                <!-- <li class="nav-item clickable" onclick="toggleCart()">
                <span class="nav-link active">  <img src="https://www.freeiconspng.com/uploads/grocery-basket-icon-1.png" height="30px" width="30px" > 
                    (<?php
                    if(isset($_SESSION["cart"])){
                    $count = count($_SESSION["cart"]); 
                    echo "$count"; 
                    }
                    else
                    echo "0";
                    ?>) 
                </span>
                    </li> -->

                
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

            <!-- <li class="nav-item" style="padding-right:15px">
                <a class="nav-link" href="#">CART</a>
            </li> -->
            </ul>
            </div>

                </div>
                </nav>
                <?php
            }
            ?>
	
		<div class="para2">
			<div class="caption">
    			<span class="text-block">GAL<span style="color:white">L</span>E<span style="color:white">R</span>Y</span>
  			</div>
		</div>

		<div style="height:100px;background-color:white">
		
		</div>
		
		<!--<hr style="border: 1px solid black">-->
	   	<h2 style="text-align:center;letter-spacing: 2px;margin-bottom: 50px;">THE VENUE</h2>

	<br>


		<div class="row" style="background-color: "> 
		  <div class="column" >
		    <img src="https://preview.colorlib.com/theme/steak/images/img_isotope_2.jpg" class="zoom" style="width:100%">
		    <img src="https://preview.colorlib.com/theme/steak/images/img_isotope_5.jpg" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/85/4c/c7/854cc7c4b9d9e3d1576a31cc8e4399ce.jpg" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/88/d8/d7/88d8d7160915aff95ba09b2193e16f82.jpg"class="zoom" style="width:100%">
		    
		  </div>
		  <div class="column">
		    <img src="https://preview.colorlib.com/theme/steak/images/img_isotope_10.jpg" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/6c/cf/17/6ccf17a358a553c0ef7fd4dc295725ae.jpg" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/bf/1b/22/bf1b22ea6e075f90daa40aae4364fb97.jpg" class="zoom"style="width:100%">
		    <img src="https://i.pinimg.com/564x/c0/22/aa/c022aa877e3e5fcd849730d0204c094f.jpg" class="zoom" style="width:100%">
		    
		  </div>  
		  <div class="column">
		    <img src="https://images.unsplash.com/photo-1543392883-914cfa6f9ed4?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/45/84/a9/4584a9de52777f1ecfe93d520f3f4d2d.jpg" class="zoom"style="width:100%">
		    <img src="https://i.pinimg.com/564x/5e/80/67/5e80676efdb6e92a3054c0c41ad69021.jpg" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/6a/6e/ab/6a6eabeda50df653fe6e188adc177520.jpg" class="zoom"style="width:100%">
		    
		   
		  </div>
		  <div class="column">
		    <img src="https://i.pinimg.com/564x/ad/6a/93/ad6a9348c7023a28e58dca1e990c1a20.jpg" class="zoom"style="width:100%">
		    <img src="https://preview.colorlib.com/theme/steak/images/ximg_isotope_13_thumb.jpg.pagespeed.ic.capj08t_kv.webp" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/21/6b/7f/216b7f962149192d61af1c986a2e3a47.jpg" class="zoom" style="width:100%">
		    <img src="https://i.pinimg.com/564x/b4/ef/22/b4ef223f5092332662348b3362f7dbfa.jpg" class="zoom" style="width:100%">
		    
		  </div>
		</div>
		<div style="height:200px;background-color:">

		</div>
		<div class= "footer" id="footer" style="text-align: center;padding-top: 7%; border-top:1px solid black;">

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







		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	   		   	
	</body>
</html>	

