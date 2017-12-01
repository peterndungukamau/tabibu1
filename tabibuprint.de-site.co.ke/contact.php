<?php
 
//comment require connection
require("includes/connection.php");


//check if form is submitted

 if (isset($_POST['btn_submit'])) { //start

//form data

  $comment =ucfirst(mysqli_escape_string($conn, $_POST['comment']));





    $query = "INSERT INTO tbl_message (message) VALUES ('$comment')";
    $result = mysqli_query($conn, $query)  OR die( mysqli_error($conn));
 header("Location:contact.php?success=true");

 }



 ?>   
<!DOCTYPE html>
<html lang="en">
<head>
   <title>Contact</title>
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
<body class="parallax" style="background-image:url(img/nurse.jpg)">

  <div class="container-fluid">
     <header>
        <div class="row">
          <div class="col-md-12" id="top">
      <div class='container'>
  <input id='menu-toggle' type='checkbox'>
  <label class='menu' for='menu-toggle' id='menu-icon'></label>
  <ul id='navigation'>
    <li><a href='home.php'>Home</a></li>
    <li><a href='appointment.php'>Appointment</a></li>
    <li><a href='services.php'>Services</a></li>
  </ul>
</div>
        </div>
        </div>
    </header> 
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10" id="con1">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4" id="get"><center><h1>GET IN TOUCH</h1></center></div>
          <div class="col-md-4"></div>
        </div>
           <script>
         function validateform(){
             
              var comment = document.message_form.comment.value;  
                                     
           
                if(comment==" Message"){
                    alert('Please write your message first then submit')
                    return false;
              }
              

           }


      </script>
        <form method="post" action="contact.php" name="message_form" onsubmit="return validateform()">
          <div class="row">
            <div class="col-md-12" id="message">
              <textarea rows="10" cols="50" name="comment" class="form-control"> Message</textarea>
            </div>
        </div>
           <div class="row">
            <div class="col-md-10"></div>
            <div class="col-md-2" id="message">
                <input type="image" name="btn_submit" src="img/submit.png" alt="Submit" >
            </div>
        </div>
      </form>
       <div class="col-md-1" id="gps"></div>
      <div class="col-md-3" id="gps">
        <div class="row" id="location">
         
          <div class="col-md-8">  
                       <div class="container-3d">
                          <div class="front">
                             <img src="img/gps.png">
                            </div>
                            <div class="back text-center">                           
                               <img src="img/gps.png">                                    
                            </div>
                        </div>
                         <p>Locate us at :</p>
                         <p>Westlands</p>
                        <p>Tabibu prints centre</p>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <div class="col-md-1" id="gps"></div>
      <div class="col-md-3" id="gps">
         <div class="row" id="location">
         
          <div class="col-md-8">
             <div class="container-3d">
                          <div class="front">
                             <img src="img/mobile.png">
                            </div>
                            <div class="back text-center">                           
                              <img src="img/mobile.png">                                  
                            </div>
                        </div>            
            <p>emergency number</p>
            <p> : +254707197920</p>
            <p> : +254720022937</p>
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
      <div class="col-md-1" id="gps"></div>
      <div class="col-md-3" id="gps">
         <div class="row" id="location">
         
          <div class="col-md-9">
             <div class="container-3d">
                          <div class="front">
                             <img src="img/social.png" class="img-responsive">
                            </div>
                            <div class="back text-center">                           
                              <img src="img/social.png" style="width: 100%;">                                  
                            </div>
                        </div>            
            <p>facebook : tabibuprints</p>
            <p>twitter : @tabibuprints</p>
            <p>email :tabibu@gmail.com</p>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>


      </div>
      <div class="col-md-1"></div>
    </div>
  <div class="row">
    <div class="col-md-12" id="footer">
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-4">
     <footer><center><p>copyright 2017 / Tabibu prints </p></center></footer>
      </div>
      <div class="col-md-3"></div>
     </div>
    </div>
  </div>
  </div>
</body>
</html>