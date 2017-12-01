<?php
 
//comment require connection
require("includes/connection.php");
require("includes/session.php");

?>
<?php




if (isset($_POST['btn_login'])){
	$firstname= mysqli_escape_string($conn,$_POST['firstname']);
	$password=md5 ($_POST['password']);

$query="SELECT * FROM tbl_signup WHERE firstname ='$firstname'  AND password ='$password'";
$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
$row= mysqli_fetch_array($result);
if ($row>0){
	$_SESSION['firstname'] = $firstname;
	header("Location:home.php");

}
else{
	header("Location:login.php?error_login=true");
}

}
?>


<!DOCTYPE html>
<html>
<head>

<title>Login form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>


</head>
<body style="background-image: url(img/compujpg.jpg); background-repeat: no-repeat; background-size: cover; color: #fff;">

	<div class="container-fluid">
	<div class="row" style="margin-top:15%;">
	<div class="col-md-2"></div>
	<div class="col-md-8">
	<h1 style="font-family: century gothic;font-size: 25px; text-align: center;">LOGIN FORM</h1>

	<?php
if (isset($_GET['success'])){?>

   <div class="alert alert-success">
<p>LOGGED IN SUCCESFULLY</p>
    </div> 
<?php
}
?>


	<?php
if (isset($_GET['error_login'])){?>

   <div class="alert alert-danger">
<p>ACCES DENIED</p>
    </div> 
<?php
}
?>

	<form name="register_form" method="post" onsubmit="return validate_form()" action="login.php">  
	 
     <div class="alert alert-success alert-dismissable collapse ">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Success!
    </div> 

    <div class="alert alert-danger collapse ">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Danger!</strong> Invalid access.
    </div>
		<label>Firstname</label>
	<input type="text"  class="form-control" name="firstname"/>

		<label>Password</label>
	<input type="password"  class="form-control" name="password"/>
	
	


    <input type="Submit" name="btn_login" class="form-control" value="submit" style="background-color: #06b8c9;;margin-top: 10px; color: #fff; width:10%; float:right; border:none;"/>
  
    <a href="register.php" class="form-control"; style="background-color: #06b8c9;; color: #fff; width:10%; float:right; border:none;margin:10px 10px 10px 0px; text-align:center;text-decoration:none;"/>signup</a>
    
    <style>
        a:margin-top:20px;
    </style>
    
    
	
	</form>
	</div>
	<div class="col-md-2"></div>
	
	</div>
    </div>




    </body>
    </html>
