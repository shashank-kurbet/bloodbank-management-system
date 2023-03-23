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
	$query = " select * from  request order by req_id DESC LIMIT 1";
    $result = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>REQUEST SUCCESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container h-100">
		<div class="row h-100">
			<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
				<div class="d-table-cell align-middle">

					<div class="text-center mt-4" id="head1">
						<h1 class="h2">REQUEST SUCCESS</h1>
						
					</div>
                    <?php $row=mysqli_fetch_assoc($result)?>
					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form >
									
									<div class="form-group">
										<label>request id: <?php echo $row['req_id'] ?></label>
									</div>
					                <div class="form-group">
									<div class="form-group">
										<label>price: <?php echo $row['price'] ?></label>
									</div>
									<div class="form-group">
										<label>quantity: <?php echo $row['quantity2'] ?></label>
									</div>
								</form>
							</div>
						</div>
						<br><br>
                        <div class="text-center mt-3">
										 <button type="button" class="btn btn-lg btn-primary" onclick="location.href='home.php'">home</button> <br><br>
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