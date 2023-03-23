


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
							Create an account to get started.
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form action="insert2.php" method="post">
									<div class="form-group">
										<label>Name</label>
										<input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name">
									</div>
									<div class="form-group">
										<label>username</label>
										<input class="form-control form-control-lg" type="text" name="u_name" placeholder="Enter your username">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input class="form-control form-control-lg" type="email" name="u_email" placeholder="Enter your email">
									</div>
									<div class="form-group">
										<label>Phone number</label>
										<input class="form-control form-control-lg" type="text" name="u_phone" placeholder="Enter your phone number">
									</div>
									<div class="form-group">
										<label>Address</label>
										<input class="form-control form-control-lg" type="text" name="u_add" placeholder="Enter your address">
									</div>
									<div class="form-group">
										<label>Blood group</label>
										<input class="form-control form-control-lg" type="text" name="u_bloodgrp" placeholder="Enter your blood group">
									</div>
									<div class="form-group">
										<label>DOB</label>
										<input class="form-control form-control-lg" type="datetime-local" name="u_dob" placeholder="Enter your date of birth">
									</div>
									<div class="form-group">
										<label>Medical issues </label>
										<input class="form-control form-control-lg" type="text" name="u_mediss" placeholder="if no issues write none">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control form-control-lg" type="password" name="u_password1" placeholder="Enter password">
									</div>
									<div class="form-group">
										<label>Re-enter Password</label>
										<input class="form-control form-control-lg" type="password" name="u_password2" placeholder="Re-Enter password">
									</div>
									<div class="text-center mt-3" id="btn1">
										 <button type="submit" class="btn btn-lg btn-primary">Sign up</button> <br><br>
									</div>
									<label align="center">already a member?</label>
									<div class="text-center mt-3" >
										<a href="login.php">Click to Login</a><br><br>
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