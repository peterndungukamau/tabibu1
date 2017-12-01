<?php
 require('includes/connection.php');
  //require('includes/session.php');


if (isset($_POST['appointment_btn'])) { //start

//form data

  $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $lname =ucfirst(mysqli_escape_string($conn, $_POST['lname']));
  $surname =ucfirst(mysqli_escape_string($conn, $_POST['surname']));
  $email =mysqli_escape_string($conn, $_POST['email']);
  $date =mysqli_escape_string($conn, $_POST['date']);
  $datet =mysqli_escape_string($conn, $_POST['datet']);
  $number =mysqli_escape_string($conn, $_POST['number']);
  $time = mysqli_escape_string($conn,$_POST['time']);



    $query = "INSERT INTO tbl_appointment (firstname ,lastname,surname,email,checkin,checkout,nopatient,arrival) VALUES ('{$Fname}' ,'{$lname}','{$surname}', '{$email}','{$date}','{$datet}','{$number}','{$time}')";
    $result = mysqli_query($conn, $query)  OR die( mysqli_error($conn));
 header("Location:services.php?success=true");

 }



 ?>


<?php
 require('includes/connection.php');
  //require('includes/session.php');


if (isset($_POST['appointment_btn'])) { //start

//form data

  $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $lname =ucfirst(mysqli_escape_string($conn, $_POST['lname']));
  $surname =ucfirst(mysqli_escape_string($conn, $_POST['surname']));
  $email =mysqli_escape_string($conn, $_POST['email']);
  $date =mysqli_escape_string($conn, $_POST['date']);
  $datet =mysqli_escape_string($conn, $_POST['datet']);
  $number =mysqli_escape_string($conn, $_POST['number']);
  $time = mysqli_escape_string($conn,$_POST['time']);



    $query = "INSERT INTO tbl_appointment (firstname ,lastname,surname,email,checkin,checkout,nopatient,arrival) VALUES ('{$Fname}' ,'{$lname}','{$surname}', '{$email}','{$date}','{$datet}','{$number}','{$time}')";
    $result = mysqli_query($conn, $query)  OR die( mysqli_error($conn));
 header("Location:services.php?success=true");

 }



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Appointment</title>


	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body style="background-image: url(img/nurse.jpg);background-repeat: no-repeat;color: #fff;">


<form action="appointment.php" name="appointment_form" onsubmit="return validateForm()" method="POST"  style="background: rgba(0,0,0,0.2);
    padding: 20px;
    color: #fff;
    min-height: 750px;">
<div class="container">
<div class="row">
<h3>Appointment FORM</h3>
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
            <input type="text" class="form-control" name="surname"><br>
            </div>
          
            </div>
            </div>




<script>
function validateForm() {
    var Fname = document.forms["appointment_form"]["fname"].value;
    var Lname = document.forms["appointment_form"]["lname"].value; 
    var Surname= document.forms["appointment_form"]["surname"].value;
    var Email = document.forms["appointment_form"]["email"].value;
    var date = document.forms["appointment_form"]["date"].value;
    var datet = document.forms["appointment_form"]["datet"].value;
    var number = document.forms["appointment_form"]["number"].value;
    var time = document.forms["appointment_form"]["time"].value;

    if (Fname == "") {
        alert("Firstname must be filled out");
        return false;
    }
     if (Lname == "") {
        alert("Lastname must be filled out");
        return false;
    }
     if (Surname == "") {
        alert("Surname must be filled out");
        return false;
    }
     if (Email == "") {
        alert("Email must be filled out");
        return false;
    }
     if (date == "") {
        alert("date must be filled out");
        return false;
    }
      if (datet == "") {
        alert("datet must be filled out");
        return false;
    }
    if( number == ""){
    alert("number must be filled out");
    return false;
}
   if( time == ""){
    alert("time must be filled out");
    return false;
}
     
    return true;
}
</script>
<div class="container">
<div class="row">
<div class="col-md-4">

             <label>Enter email</label>
            <input type="email" class="form-control" name="email"><br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            </div>
            </div>
        <div class="container">
        <div class="row">
            <div class="col-md-4">
            <label>Date checkin</label>
            <input type="text" class="form-control" name="date" ><br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div> 
            </div>
            </div>
        <div class="container">
        <div class="row">
        <div class="col-md-4">
            <label>Date checkout</label>
            <input type="text" class="form-control" name="datet" ><br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            </div>
            </div>
        <div class="container">
        <div class="row">
            <div class="col-md-4">
            <label>Number of patients</label>
            <input type="number" class="form-control" name="number" ><br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            </div>
            </div>
        <div class="container">
        <div class="row">
            <div class="col-md-4">
            <label>Arrival Time</label>
            <input type="time" class="form-control" name="time" ><br>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            </div>
            </div>
            <div class="container">
            <div class="row">
            <div class="col-md-12">
            <input type="submit" name="appointment_btn" class="btn btn-info"  style="width: 100%;">
            </div>
            </div>
            </div>
            <br>
            <div class="mytxt" style="font-family: open sans; font-size: 18px;padding-left: 80px; font-weight: bold; color: white;">
                <p>
                <a href="services.php">Click Next</a><br><a href="home.php">Click Back
            </p>
        </div>

</form>

</div>            
<div class="col-md-2">
</div>
</div>
</div>





</body>
</html>