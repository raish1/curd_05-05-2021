<?php
session_start();
require"connection.php";
if(isset($_POST['submit'])){
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$sql="SELECT*FROM otp_123 Where email='$email' && password='$password'";
	$data=mysqli_query($conn,$sql);
	
	$result=mysqli_num_rows($data);
	if($result==1){
		$_SESSION['email']=$email;
		header("location: welcome.php");
	}else{
		echo "undefind email";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
  <body>
  <h1 style="text-align:center";>Login </h1
     <div id="box" class="text">
    <form action="login.php" method="post">
	<label  for="email">Email:</label>
    <input class="form-control" type="email" id="a" name="email" placeholder="email"/>
	<label for="password">Password:</label>
    <input class="form-control" type="password" id="fpass" name="password" placeholder="password"/>
	<input type="submit" name="submit" id="b" value="login"/>
	<a href="signup.php"  style="text-align:left";>New User Click Registration?:</a>
	<script>
	  $(document).ready(function(){
		  
		   $("#fpass,#a,#b").focus(function(){
		   $(this).css('background-color','blue');
	      });
		  $("#fpass,#a,#b").blur(function(){
		   $(this).css('background-color','');
	      });
		  
		  $('#box').mouseenter(function(){
		   $(this).css('background-color','orange');
	      });
	      $('#box').mouseleave(function(){
		  $(this).css('background-color','purple');
	      });
	  });
	</script>
	</div>
	
	
	
</body>
</html>