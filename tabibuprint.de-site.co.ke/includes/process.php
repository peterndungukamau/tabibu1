<?php 
     
	  /** Required processing php file **/
	  include("connection.php");  //connect to the database
	  include("sessions.php");   //check who has logged in

	/******************************************
	 REGISTER USER
	  *******************************************/
	   if(isset($_POST['add_new_user'])){//
		  
		  //form variables
		  $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $lname =ucfirst(mysqli_escape_string($conn, $_POST['lname']));
  $surname =ucfirst(mysqli_escape_string($conn, $_POST['surname']));
  $email =mysqli_escape_string($conn, $_POST['email']);
  $date =mysqli_escape_string($conn, $_POST['date']);
  $datet =mysqli_escape_string($conn, $_POST['datet']);
  $number =mysqli_escape_string($conn, $_POST['number']);
  $time = mysqli_escape_string($conn,$_POST['time']);

		  //insert statement
		  $query = "INSERT INTO tbl_appointment (firstname ,lastname,surname,email,checkin,checkout,nopatient,arrival) VALUES ('{$Fname}' ,'{$lname}','{$surname}', '{$email}','{$date}','{$datet}','{$number}','{$time}')";
    $result = mysqli_query($conn, $query)  OR die( mysqli_error($conn));
		  header("Location:../edit.php");
		  
	   }//END
	   

	   /******************************************
	    EDIT REGISTER USER
	    *******************************************/
	   if(isset($_POST['edit_user'])){//
		  
		  //form variables
		  $id = $_POST['id'];
		   $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $lname =ucfirst(mysqli_escape_string($conn, $_POST['lname']));
  $surname =ucfirst(mysqli_escape_string($conn, $_POST['surname']));
  $email =mysqli_escape_string($conn, $_POST['email']);
  $date =mysqli_escape_string($conn, $_POST['date']);
  $datet =mysqli_escape_string($conn, $_POST['datet']);
  $number =mysqli_escape_string($conn, $_POST['number']);
  $time = mysqli_escape_string($conn,$_POST['time']);
		  		  //update statement
		  $query="UPDATE tbl_appointment  set firstname='{$firstname}', lastname='{$lastname}',surname='{$surname}',email='{$email}', checkin='{$checkin}',  checkout='{$checkout}', nopatient='{$nopatient}',arrival='{$arrival}' WHERE id=$id";
		  $result = mysqli_query($conn,$query);
		  
		  //redirect
		  if(isset($_POST['settings'])){
			   header("Location: ../settings.php?id=$id");
			  }else{
		  header("Location: ../edit.php?id=$id");
		  }
	   }//END
	   

	   /******************************************
	    DELETE REGISTERED USER
	    *******************************************/
	    if(isset($_GET['delete_userid'])){//
		
			$deleteid = $_GET['delete_userid'];
			
			//delete statement
			$query = "DELETE FROM tbl_appointment WHERE id = $deleteid";
			$result = mysqli_query($conn,$query);
		  
		    //redirect
		    header("Location: ../edit.php");
		
		}//END
		








	   /******************************************
	    EDIT CLIENT
	    *******************************************/
	   if(isset($_POST['edit_client'])){//
		  
		  //form variables
		  $id = $_POST['id'];
		 		   $Fname =ucfirst(mysqli_escape_string($conn, $_POST['fname']));
  $lname =ucfirst(mysqli_escape_string($conn, $_POST['lname']));
  $surname =ucfirst(mysqli_escape_string($conn, $_POST['surname']));
  $email =mysqli_escape_string($conn, $_POST['email']);
  $date =mysqli_escape_string($conn, $_POST['date']);
  $datet =mysqli_escape_string($conn, $_POST['datet']);
  $number =mysqli_escape_string($conn, $_POST['number']);
  $time = mysqli_escape_string($conn,$_POST['time']);
		  //update statement
		   $query="UPDATE tbl_appointment  set firstname='{$firstname}', lastname='{$lastname}',surname='{$surname}',email='{$email}', checkin='{$checkin}',  checkout='{$checkout}', nopatient='{$nopatient}',arrival='{$arrival}' WHERE id=$id";
		  $result = mysqli_query($conn,$query);
		  
		  //redirect
		  header("Location: ../edit.php?id=$id&success=1");
		  
	   }//END
	    /******************************************
	     DELETE APPOINTMENT
	    *******************************************/
		
		if(isset($_GET['cancel'])){
		
			echo $deleteid = $_GET['cancel'];
			
			//delete statement
			$query = "DELETE FROM tbl_appointment WHERE id = $deleteid";
			$result = mysqli_query($conn,$query);
		  
		    //redirect
		    header("Location:../edit.php?");
		
		}//END

?>		




		
	   
	   
		