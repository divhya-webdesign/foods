<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
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
	$num1 = rand(1,50); 
	$num2 = rand(1,50); 
	$num3 = rand(1,50);
	$number = $num1.$num2.$num3;

	$_SESSION['login_user2']=$username; // Initializing Session
	$_SESSION['extra_loc']=$number; //for saving cart

	$query1 = "SELECT * FROM CART WHERE username='" . $username . "';";
	$success1 = $conn->query($query1);
	$result = mysqli_query($conn, $query1);
                if (mysqli_num_rows($result) > 0)
                {
                  $count=0;
                  while($row = mysqli_fetch_assoc($result))
                  {
                  	$item_array = array(
		            'food_id' => $row["F_ID"],
		            'food_name' => $row["foodname"],
		            'food_price' => $row["price"],
		            'food_quantity' => $row["quantity"]);
		            $_SESSION["cart"][$count] = $item_array;
		            $count=$count+1;

                  }
                  echo '<script>alert("Found "' . $count . '" items in cart")</script>';
              }
	if(!$success1) {
		echo '<script>alert("Could not connect to cart")</script>';
	}

	header("location: index.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>