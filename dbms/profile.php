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
//   $u_id=$user_data['u_id'];
//   $result = mysqli_query($con, "select * from users where us_id='".$u_id."' ORDER BY us_id DESC LIMIT 1 ");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>profile</title>
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
						<h1 class="h2">PROFILE</h1>
						<p class="lead">
							EDIT/VIEW YOUR PROFILE.
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form  method="post">
									<div class="form-group" id="head1">
										<label>Name: </label>
										<p><?php echo $user_data['name']; ?></p>
									</div>
									<div class="form-group">
										<label>username: </label>
                                        <p><?php echo $user_data['u_name']; ?></p>
									</div>
									<div class="form-group">
										<label>Email: </label>
                                        <p><?php echo $user_data['u_email']; ?></p>
                                    </div>
									<div class="form-group">
										<label>Phone number: </label>
                                        <p><?php echo $user_data['u_phone']; ?></p>									
                                    </div>
									<div class="form-group">
										<label>Address: </label>
                                        <p><?php echo $user_data['u_add']; ?></p>
									</div>
									<div class="form-group">
										<label>Blood group: </label>
                                        <p><?php echo $user_data['u_bloodgrp']; ?></p>
                                    </div>
									<div class="form-group">
										<label>DOB: </label>
                                        <p><?php echo $user_data['u_dob']; ?></p>
                                    </div>
									<div class="form-group">
										<label>Medical issues: </label>
                                        <p><?php echo $user_data['u_mediss']; ?></p>
                                    </div>
									<div class="text-center mt-3" >
                                    <button type="button" class="btn btn-lg btn-primary" onclick="location.href='editprofile.php'">edit profile</button> <br><br>
									</div>
                                    <div class="text-center mt-3">
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='home.php'">home</button> <br><br>
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