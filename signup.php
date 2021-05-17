<?php
session_start();
require"connection.php";
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	if($name!=""){
		$sql = "INSERT INTO otp_123(`name`,`email`,`password`) VALUES('$name','$email','$password')";
	      if($conn->query($sql)==TRUE){
		       header("location: login.php");
	     }else{
			 echo "error".$sql."</br>".$conn->error;
		 }
		 $conn->close();
	}else{
		echo "data is not founded";
	}	
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="jquery.js" ></script>
</head>
  <body>
     <div id="box" class="text">
      <h1 style="text-align:center">Registration</h1>
    <form action="signup.php" method="post">
    <label for="name">Name:</label>
    <input class="form-control" type="text" id="fname" name="name" placeholder="name"/>
	<label  for="email">Email:</label>
    <input class="form-control" type="email" id="a" name="email" placeholder="email"/>
	<label for="password">Password:</label>
    <input class="form-control" type="password" id="fpass" name="password" placeholder="password"/>
	<input  type="submit" name="submit" id="b" value="signup"/><br>
	<script>
	  $(document).ready(function(){
		  
		   $("#fname,#fpass,#a,#b,#c").focus(function(){
		   $(this).css('background-color','gray');
	      });
		  $("#fname,#fpass,#a,#b,#c").blur(function(){
		   $(this).css('background-color','');
	      });
		  
		  $('#box').mouseenter(function(){
		   $(this).css('background-color','yellow');
	      });
	      $('#box').mouseleave(function(){
		  $(this).css('background-color','purple');
	      });
	  });
	</script>
	</form>
	</div>
	<p>
	<a href="login.php"  id="c" style="text-align:left";>You already registerd::</a>
	</p>
</body>
</html>