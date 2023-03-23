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
?>
<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

	<div class="text-center mt-3">
		<button type="button" class="btn btn-lg btn-primary" onclick="location.href='logout.php'">logout</button> <br><br>
	</div>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4" id="head1">
						<h1 class="h2">BLOOD BANK MANAGEMENT</h1>
						<br><br>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form  method="post">
									<!-- <div class="text-center mt-3">
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='request.php'">request</button> <br><br>
									</div> -->
									<div class="text-center mt-3">
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='donate.php'">donate</button> <br><br>
									</div>
									<div class="text-center mt-3">
										<!-- <label >request</label><br> -->
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='view.php'">request</button> <br><br>
									</div>
									<div class="text-center mt-3">
										
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='profile.php'">profile</button> <br><br>
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
body{
	background-image: url(pewdiepie-red-and-black-wavy-background-uhd-4k-wallpaper.jpg);
}
#head1{
	color: #fff;
}
#btn1{
	color:red;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>