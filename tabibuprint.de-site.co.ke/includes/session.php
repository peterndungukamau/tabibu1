<?php 
  session_start();

  //
function logged_in(){
	return isset($_SESSION['firstname']);
}


//

  
  function confirm_logged_in(){
  	if (!logged_in()) {
  		header("location: login.php?");
  	}
  }




?>