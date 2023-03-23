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

    if(isset($_POST['submit']))
	{$msg = "";
		//something was posted
		$u_name = $_POST['u_name'];
		// $u_password1 = $user_data['u_password1'];
		// $u_password2 = $user_data['u_password2'];
		$name = $_POST['name'];
		$u_email = $_POST['u_email'];
		$u_phone = $_POST['u_phone'];
		$u_add = $_POST['u_add'];
		$u_dob = $_POST['u_dob'];
		$u_bloodgrp = $_POST['u_bloodgrp'];
		$u_mediss = $_POST['u_mediss'];
        $u_id=$user_data['u_id'];

  

		if(!empty($u_name) && !is_numeric($u_name) && !empty($name) && !empty($u_bloodgrp) && !empty($u_email) && !empty($u_phone) && !empty($u_add) && !empty($u_dob) && !empty($u_mediss) )
        {
            if($u_bloodgrp=="A" || $u_bloodgrp=="A+" || $u_bloodgrp=="A-" || $u_bloodgrp=="AB" || $u_bloodgrp=="AB+" || $u_bloodgrp=="AB-" || $u_bloodgrp=="B" || $u_bloodgrp=="B+" || $u_bloodgrp=="B-" || $u_bloodgrp=="O" || $u_bloodgrp=="O+" || $u_bloodgrp=="O-"){
                $query = "update users set name = '".$name."', u_name = '".$u_name."', u_email = '".$u_email."', u_phone = '".$u_phone."', u_add = '".$u_add."', u_dob = '".$u_dob."', u_bloodgrp = '".$u_bloodgrp."', u_mediss = '".$u_mediss."'where u_id='".$u_id."'";
            mysqli_query($con, $query);
            header("Location: profile.php");
            die;
            }
            //save to database
            // $query = "update users set name = '".$name."', phone='".$phone."',address='".$address."',aboutme='".$aboutme."',ttl='".$ttl."' where u_id='".$u_id."'";
            // mysqli_query($con, $query);
            // header("Location: profile.php");
            // die;
        }
        else {
                echo "Please enter some valid information!";
            }
		
	    }
    else
        {
            echo "Please enter some valid information!";
        }
//   $u_id=$user_data['u_id'];
//   $result = mysqli_query($con, "select * from users where us_id='".$u_id."' ORDER BY us_id DESC LIMIT 1 ");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		body{
    		background-image: url(pewdiepie-red-and-black-wavy-background-uhd-4k-wallpaper.jpg);
        }
		#head1{
			color: #e5e9f2;
		}
		#btn1{
			color:red;
		}
	</style>
</head>
<body>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4" id="head1">
						<h1 class="h2">BLOOD BANK MANAGEMENT</h1>
						<p class="lead">
							edit your profile.
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form  method="post">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control form-control-lg" type="text" name="name" value="<?php echo $user_data['name']; ?>">
									</div>
									<div class="form-group">
										<label>username</label>
										<input class="form-control form-control-lg" type="text" name="u_name" value="<?php echo $user_data['u_name']; ?>">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control form-control-lg" type="email" name="u_email" value="<?php echo $user_data['u_email']; ?>">
									</div>
									<div class="form-group">
										<label>Phone number</label>
										<input class="form-control form-control-lg" type="text" name="u_phone"  value="<?php echo $user_data['u_phone']; ?>">
									</div>
									<div class="form-group">
										<label>Address</label>
										<input class="form-control form-control-lg" type="text" name="u_add"  value="<?php echo $user_data['u_add']; ?>">
									</div>
									<div class="form-group">
										<label>Blood group</label>
										<input class="form-control form-control-lg" type="text" name="u_bloodgrp"  value="<?php echo $user_data['u_bloodgrp']; ?>">
									</div>
									<div class="form-group">
										<label>DOB</label>
										<input class="form-control form-control-lg" type="datetime-local" name="u_dob"  value="<?php echo $user_data['u_dob']; ?>">
									</div>
									<div class="form-group">
										<label>Medical issues </label>
										<input class="form-control form-control-lg" type="text" name="u_mediss"  value="<?php echo $user_data['u_mediss']; ?>">
									</div>
									<!-- <div class="form-group">
										<label>Password</label>
										<input class="form-control form-control-lg" type="password" name="u_password1"  value="<?php echo $user_data['u_password1']; ?>">
									</div>
									<div class="form-group">
										<label>Re-enter Password</label>
										<input class="form-control form-control-lg" type="password" name="u_password2" value="<?php echo $user_data['u_password2']; ?>>
									</div> -->
									<div class="text-center mt-3" id="btn1">
										 <button type="submit" class="btn btn-lg btn-primary" name="submit">update</button> <br><br>
									</div>
									
								</form>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

<style type="text/css">
body{
    margin-top:20px;
    background-color: #f2f3f8;
}
.card {
    margin-bottom: 1.5rem;
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    /* border: 1px solid #e5e9f2; */
    border-radius: .2rem;
	/* opacity: .5; */
	background-color: rgba(0,0,0,0);
	color: #fff;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>