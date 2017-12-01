<?php
 
//comment require connection
require("includes/connection.php");


//check if form is submitted

 if (isset($_POST['btn_register'])) { //start

//form data

  $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $Mname =ucfirst(mysqli_escape_string($conn, $_POST['mname']));
  $Sname =mysqli_escape_string($conn, $_POST['sname']);
  $age =mysqli_escape_string($conn, $_POST['age']);
  $idnu =mysqli_escape_string($conn, $_POST['idnu']);
  $regnu =mysqli_escape_string($conn, $_POST['regnu']);
  $gender =mysqli_escape_string($conn, $_POST['gender']);
  $password = md5($_POST['password']);



    $query = "INSERT INTO tbl_signup (firstname ,middlename,surname,age, nationalid,regno,password) VALUES ('{$Fname}' ,'{$Mname}','{$Sname}', '{$age}','{$idnu}','{$regnu}','{$password}')";
    $result = mysqli_query($conn, $query)  OR die( mysqli_error($conn));
 header("Location:login.php?success=true");

 }



 ?>   

<!DOCTYPE html>
<html>
<head>

<title>Register form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>


</head>
<body style="background-image: url(img/compujpg.jpg); background-repeat: no-repeat; background-size: cover; color: #fff; ">

  <div class="container-fluid">
  <div class="row">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
  <h1 style="font-family: century gothic;font-size: 25px; text-align:center; ">REGISTRATION FORM</h1>
  <script type="text/javascript">
    function validate_reg(){
     var Fname = document.register_form.fname.value;
     var Mname = document.register_form.mname.value;
      var Sname = document.register_form.sname.value;
      var age = document.register_form.age.value;
      var idnu = document.register_form.idnu.value;
      var regnu = document.register_form.regnu.value;
      var password = document.register_form.password.value;
      var cpassword = document.register_form.cpassword.value;




     if(Fname == ""){
      alert('Please Enter First name');
      return false;
     }

     if(Mname == ""){
      alert('Please Enter Middle name');
      return false;
     }
     

      if(Sname == ""){
      alert('Please Enter Surname name');
      return false;
     }

   if(age == ""){
      alert('Please Enter Age ');
      return false;
     }

   if(idnu == ""){
      alert('Please Enter idnumber ');
      return false;
     }

    if(regnu == ""){
      alert('Please Enter registrationnumber ');
      return false;
     }

     if(password==""){
      alert("please enter your password");
      return false

}

    if(password !=cpassword){
      alert("password do not match");
      return false;
    }

     return true;
    }
  </script>

  <form name="register_form" method="post" onsubmit="return validate_reg();" action="register.php"> 

     <div class="col-md-4">

            <label>Enter first Name</label>
            <input type="text" class="form-control" name="fname" ><br> 
            </div>
            <div class="col-md-4">
            <label>Enter last Name</label>
            <input type="text" class="form-control" name="lname"><br>
            </div>
            <div class="col-md-4">
            <label>Enter surname</label>
            <input type="text" class="form-control" name="sname"><br>
            </div>
          
            </div>
            </div>
<br>

<div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div><a href="login.php" style="text-align:right;">login</a></div>
<label for="dob">Age</label>
    <input type="date"name="age" placeholder="Date of Birth."class="form-control">

 <label for="gender">Gender</label>
    <select id="gender" name="gender" class="form-control">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
  

  <label for="idnu">Natonalid_no</label>
    <input type="number" name="idnu" placeholder="Your idno.."class="form-control">
<br>

<label for="regnu">Hospitalreg_no</label>
    <input type="number"name="regnu" placeholder="Your regno.."class="form-control">

    <label>Password</label>
  <input type="password"  class="form-control" name="password"/>
  
    <label>Confirm pasword</label>
  <input type="password"  class="form-control" name="cpassword"/> 



    <input type="submit" name="btn_register" class="form-control" value="Register" style="background-color: #06909e;margin-top: 10px;  margin-bottom:10px;color: #fff; border:none;"/>    
  
  </form>
  </div>
  <div class="col-md-2"></div>
  </div>
  </div>
  

  
</body>
</html>