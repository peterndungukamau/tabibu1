<?php


     require( "includes/connection.php");
    require( "includes/session.php");

    //call confirm logged in

    confirm_logged_in();

    $session_firstname =$_SESSION['firstname'];

    //fetch
    $query ="SELECT * FROM tbl_signup WHERE firstname='$session_firstname'";
    $result = mysqli_query ($conn, $query) OR DIE (mysqli_error($conn));

   
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/main.css" rel="stylesheet" type="text/css">
<!--Javascript-->
<script src="js/google.api.js"></script>
<script src="js/bootstrap.min.js"></script>
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,100);
@import url(https://fonts.googleapis.com/css?family=Inconsolata);
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





h1, h2 {
  font-weight: 100;
  text-align: center;
  letter-spacing: 1px;
}

h1 {
  margin: 0;
  color: #66ccff;
  font-size: 2.4em;
}

h2 {
  color: white;
}

code {
  font-family: Inconsolata;
}

</style>
</head>
<body style="background-image:url(img/nurse.jpg);">
	<div class="container-fluid">
		<div class="row">
<header>
        <div class='container'>
  <input id='menu-toggle' type='checkbox'>
  <label class='menu' for='menu-toggle' id='menu-icon'></label>
  <ul id='navigation'>
    <li><a href='home.php'>Home</a></li>
    <li><a href='appointment.php'>Appointment</a></li>
    <li><a href='services.php'>Services</a></li>
    <li><a href='contact.php'>Contacts</a></li>
  </ul>
</div>
    </header> 

			<section style="padding: 60px 0px;">
				<div class="container-fluid"  style=|"background-color:#065e80;">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8" id="text_area">
							<p style="color: rgb(254,249,248);font-size: 30px;line-height:32px;font-weight: normal;font-family: open sans;text-align: center; ">Courage is the most important of all the virtues because without courage you can't practice any other virtue consistently.<br>- Maya Angelou</p>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>				
			</section>

			<section>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4" style="text-align: center;padding: 0px 60px;">
							<button type="button" class="btn btn-success" ><a href="services.php"><center><h4 style="color:white; text-decoration: none;">Read More</h4></center></a></button>
						</div>
						<div class="col-md-4"></div>
					</div>
				</div>
			</section>

			<section style="padding-top: 15px;">
				<div class="container-fluid">
					<div class="row">
						<div class="pic_area" style="margin: 0 auto; padding: 0 30px;">
							<div class="col-md-4">
								<a href="#"></a>
								<img src="img/servi.png" style="padding:0  95px;">
					<p style="text-align: justify; line-height: 18px; color: rgb(249,250,250); padding-left: 30px;">We book appointment for our clients We facilitate our clients service delivaryWe recommend proper medical facility for our clients</p>
							</div>
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<img src="img/cont.png" style="padding:0  95px;">
								<p style="text-align: justify; line-height: 18px; color: rgb(249,250,250); padding-left: 30px;">We book appointment for our clients We facilitate our clients service delivaryWe recommend proper medical facility for our clients</p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- <footer style="margin:0px; max-width:1600px;">
				<div class="row">
					<div class="col-md-12">						
							<div class="col-md-5"></div>
							<div class="col-md-4">
								<div class="txt">
									<p>Copyright © 2017, Tabibu FootPrints</p>
								</div>
							</div>
							<div class="col-md-3"></div>
						</div>					
				</div>
			</footer> -->

		</div>
	</div>

</body>
</html>