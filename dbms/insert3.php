<?php 
session_start();

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "dbms";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

include("functions.php");

$user_data = check_login($con);

/* Attempt MySQL server connection. Assuming you are running MySQL server with default setting (user 'root' with no password) */ 

// Check connection 

// Escape user inputs for security
if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$d_id = rand(1,100000);
		//something was posted
		$d_time = $_POST['d_time'];
		$d_date = $_POST['d_date'];
		$quantity = $_POST['quantity'];
		$place = $_POST['place'];
		$uid=$user_data['u_id'];
        $bloodgrp=$user_data['u_bloodgrp'];
		$don=$user_data['don'];
		$dondate=$user_data['dondate'];
		if(!empty($d_time) && !empty($d_date) &&  !empty($quantity) && !empty($place) && ($quantity==450) )
		{
           if($don=="" || $don=='0'){

			$query = "insert into donation (u_id,d_time,d_date,quantity,place,d_id ) VALUES ('$uid', '$d_time', '$d_date', '$quantity','$place','$d_id')";

			mysqli_query($con, $query);

			$dondate=$d_date;
			$don=1;
			$query = "UPDATE `users` SET dondate='".$dondate."' , don='".$don."' where u_id='".$uid."'";
			mysqli_query($con, $query);
		   }
		   else if($don>=1){
			$query = "insert into donation (u_id,d_time,d_date,quantity,place,d_id ) VALUES ('$uid', '$d_time', '$d_date', '$quantity','$place','$d_id')";

			mysqli_query($con, $query);
			

		   }
			//save to database
		
			

		}else
		{
			echo "Please enter some valid information!";
			header("Location: donate.php");
		}

		if(!empty($bloodgrp) && !empty($uid) &&  !empty($quantity) && ($quantity>=450) )
		{

			//save to database
		
			$query = "insert into stock (u_id,u_bloodgrp,quantity,d_id) VALUES ('$uid', '$bloodgrp', '$quantity','$d_id')";

			mysqli_query($con, $query);

			header("Location: home.php");
		}else
		{
			echo "Please enter some valid information!";
			header("Location: donate.php");
		}
	}
 mysqli_close($con); 
?>