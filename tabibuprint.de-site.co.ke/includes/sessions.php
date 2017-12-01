<?php
	session_start();
	
	
	/**USER SESSION **/
	function logged_in() {
		return isset($_SESSION['id']);
        return isset($_SESSION['account_type']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			header("Location:edit.php");
		}
	}
	
	function get_user_var(){
		
	     //connection string
         $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		 
		 $id = $_SESSION['id'];
	     $query = "SELECT * FROM users WHERE id = $id  LIMIT 1";
		 $result = mysqli_query($connection,$query) ;
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$username = $row['username'];
				$first_name = $row['first_name']; 
		        $last_name = $row['last_name']; 
				
			}
		} else {
			echo "0 results";
		}
		$connection->close();
		
	return array("$username", "$first_name", "$last_name");
	}
	
	
	
    
	 
	 
	 
?>