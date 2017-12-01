<?php 
      //include connection to the database
    include("includes/connection.php");
    
    //include the session file to check who has logged in
     include("includes/sessions.php");
    
    //check whether the user has logged in  - CALL FUNCTION from the session.php file
     confirm_logged_in();
    
    //get logged in user information - CALL FUNCTION from the session.php file
    $user_var = get_user_var();
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
   
    <!-- bootstrap-datetimepicker styles -->
    <link href="css/bootstrap-datetimepicker.css" rel="stylesheet">
  
    <link rel="stylesheet" type="text/css" href="css/slider.css" />

 
     <!--print script -->
     <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the pages HTML with divs HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
</head>
<body onload=display_ct();>
<ul class="cb-slideshow">
            <li><span>Image 01</span><div><h3></h3></div></li>
            <li><span>Image 02</span><div><h3></h3></div></li>
            <li><span>Image 03</span><div><h3></h3></div></li>
            <li><span>Image 04</span><div><h3></h3></div></li>
            <li><span>Image 05</span><div><h3></h3></div></li>
            <li><span>Image 06</span><div><h3></h3></div></li>
        </ul>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Salon Management System</a>
    </div>
    <ul class="nav navbar-nav"> 
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Clients
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="client-add.php">Add New</a></li>
          <li><a href="clients.php">Clients</a></li> 
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Appointments
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="appointment-add.php">Add New</a></li>
          <li><a href="appointment.php">Appointments</a></li> 
        </ul>
      </li>
      <li><a href="receipts.php">Receipts</a></li>
      <?php //ONLY administrator can add users
      $privileges = $_SESSION['account_type'];
      if($privileges == "Administrator"){
       ?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Users
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user-add.php">Add New</a></li>
          <li><a href="users.php">Users</a></li> 
        </ul>
      </li>
      <?php } ?>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="change-password.php">Change Password</a></li>
        </ul>
      </li>
      <li><a href="about.php">About</a></li>
      <li class="date-time clock"><span class="pull-left"><i>Welcome <?php echo $user_var[1].' '.$user_var[2] ; ?> </i> | <a style="color:#fff;" href="logout.php" onClick="return confirm('Logout?')" >Logout</a>  &nbsp; &nbsp; &nbsp;</span> <span id='ct' ></span></li>

    </ul>
  </div>
</nav>
       <div class="container">
           