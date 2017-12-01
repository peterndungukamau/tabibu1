<?php
 
//comment require connection
require("includes/connection.php");


//check if form is submitted

 if (isset($_POST['btn_request'])) { //start

//form data

  $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $Hospital =ucfirst(mysqli_escape_string($conn, $_POST['Hospital']));
  $Dr =mysqli_escape_string($conn, $_POST['Dr']);




    $query = "INSERT INTO tbl_services (name,hospital ,doctor) VALUES ('{$Fname}' ,'$Hospital','$Dr')";
    $result = mysqli_query($conn, $query)  OR die( mysqli_error($conn));
 header("Location:services.php?success=true");

 }



 ?>   
<!DOCTYPE html>
<html lang="en">
<head >
  <title>services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
      #menu-toggle {
  display: none;
}
#menu-toggle:checked ~ #navigation {
  max-height: 300px;
  transition-duration: 400ms;
  transition-timing-function: ease-out;
  transition-delay: 200ms;
}
#menu-toggle:checked ~ #menu-icon {
  background-color: #b3b3b3;
  border-radius: 0;
  width: 400px;
  transition-delay: 0ms;
}
#menu-toggle:checked ~ #menu-icon::after {
  transition-delay: 0ms;
  transform: rotate(45deg);
  box-shadow: 0px 39.58333px 0px rgba(255, 255, 255, 0), 0px -39.58333px 0px rgba(255, 255, 255, 0);
}
#menu-toggle:checked ~ #menu-icon::before {
  transition-delay: 0ms;
  opacity: 1;
  transform: rotate(-45deg);
}

#menu-icon {
  display: block;
  position: relative;
  margin: 0 auto;
  width: 100px;
  height: 100px;
  background: #66ccff;
  border-radius: 50%;
  cursor: pointer;
  transition-property: background, border-radius, width, box-shadow;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  transition-delay: 200ms;
}
#menu-icon:hover {
  animation: icon-hover 800ms ease-in infinite;
}
#menu-icon::before {
  content: '';
  opacity: 0;
  position: absolute;
  top: 45.83333px;
  left: 50%;
  width: 50px;
  height: 8.33333px;
  margin-left: -25px;
  transform: rotate(0deg);
  background: white;
  transition-property: opacity, transform;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  transition-delay: 200ms;
}
#menu-icon::after {
  content: '';
  position: absolute;
  top: 45.83333px;
  left: 50%;
  width: 50px;
  height: 8.33333px;
  margin-left: -25px;
  background: white;
  box-shadow: 0px 14.58333px 0px white, 0px -14.58333px 0px white;
  transition-property: box-shadow, transform;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  transition-delay: 200ms;
}

#navigation {
  max-height: 0;
  overflow: hidden;
  width: 400px;
  margin: 0 auto;
  padding: 0;
  transition-property: max-height;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
  transition-delay: 0ms;
}
#navigation li {
  list-style: none;
  font-size: 25px;
}
#navigation li a {
  text-decoration: none;
  height: 100px;
  line-height: 100px;
  display: block;
  color: #66ccff;
  background: white;
  transition-property: color background-color;
  transition-duration: 200ms;
  transition-timing-function: ease-out;
}
#navigation li a:hover {
  color: white;
  background: #66ccff;
}
#navigation li:last-child a {
  border-radius: 0;
}

@keyframes icon-hover {
  0% {
    background-color: #66ccff;
  }
  50% {
    background-color: rgba(102, 204, 255, 0.9);
  }
  100% {
    background-color: #66ccff;
  }
}
.container {
  margin: 2em auto;
  width: 80%;
  text-align: center;
}

  </style>
</head>
<body style="background:url(img/nurse.jpg) no-repeat; background-attachment: fixed; background-size: cover;">
<div class="container-fluid">
<div class="row" >
    <header>
        <div class='container'>
  <input id='menu-toggle' type='checkbox'>
  <label class='menu' for='menu-toggle' id='menu-icon'></label>
  <ul id='navigation'>
    <li><a href='home.php'>Home</a></li>
    <li><a href='appointment.php'>Appointment</a></li>
    <li><a href='contact.php'>Contacts</a></li>
  </ul>
</div>
    </header> 
         </div>  
          </div> 

          <center><h2>Welcome To Tabibu Prints</h2></center>
           <form name="register_form" method="post" onsubmit="return validate_reg();" action="services.php">
          <div class="container">
          <div class="row">
          <div class="col-md-4" id="search"><img src="img/search1.png" class="img-responsive"><div class="row">
          <div class="col-md-12">
           
            <input type="text" name="fname" placeholder="Your name.."></div></div> </div>
          <div class="col-md-4"><img src="img/bg2.png" class="img-responsive"><div class="col-md-12"><select id="Hospital" name="Hospital">
      <option value="Kenyatta National Hospital(Nairobi)">Kenyatta National Hospital(Nairobi)</option>
      <option value="Aga Khan Hospital(Nairobi)">Aga Khan Hospital(Nairobi)</option>
      <option value="Mbagathi Hospital(Nairobi)<">Mbagathi Hospital(Nairobi)</option>
    </select></div></div>
          <div class="col-md-4"><img src="img/doc.png" class="img-responsive"><div class="row"><div class="col-md-12"><select id="Dr" name="Dr">
      <option value="Dr.Osore(Male)">Dr.Osore(Male)</option>
      <option value="Dr.Abigael(Female)(">Dr.Abigael(Female)</option>
      <option value="Dr.Salim(Male">Dr.Salim(Male)</option>
      <option value="Dr.Pauline(Female)">Dr.Pauline(Female)</option>
    </select></div></div></div>
          </div>
          </div>
          <div class="container">
          <div class="row">
          <div class="col-md-12"><input type="submit" name="btn_request" value="REQUEST"></div>
          </div> 
          </div>
          </form>
          
        <footer><center><p>copyright 2017 / Tabibu prints </p></center></footer>
          
        
         

</body>
</html>


