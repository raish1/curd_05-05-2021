<?php
session_start();
require"connection.php";
$email="";
//$_SESSION['email']=$email;
//echo $_SESSION['email'];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="jumbotron">
    <div class="page-header">
        <h1>Hi<br> <b><?php echo htmlspecialchars($_SESSION["email"]);?></br></b> Welcome to our site</h1>
    </div>
    </div>
    <p>
        
        <a href="logout.php" class="btn btn-danger">Log Out of Your Account</a>
        <a href="signup.php" class="btn btn-success">AddUser</a>
    </p>
</body>
</html>