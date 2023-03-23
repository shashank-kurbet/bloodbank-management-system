<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Registration</title>
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
						<h1 class="h2">Donation Form</h1>
						<p class="lead">
							Fill in the following details
						</p>
					</div>

					<div class="card">
						<div class="card-body">
							<div class="m-sm-4">
								<form action="insert3.php" method="post">
									<div class="form-group">
										<label>Time of Donation</label>
										<input class="form-control form-control-lg" type="time" name="d_time" placeholder="Enter Current donation time">
									</div>
									<div class="form-group">
										<label>Date</label>
										<input class="form-control form-control-lg" type="date" name="d_date" placeholder="Enter date">
									</div>
									<div class="form-group">
										<label>Quantity</label>
										<input class="form-control form-control-lg" type="number" name="quantity" placeholder="Enter quantity in ml">
									</div>
									<div class="form-group">
										<label>Place</label>
										<input class="form-control form-control-lg" type="text" name="place" placeholder="Enter the location of donation">
									</div>
									
									<div class="text-center mt-3">
										 <button type="submit" class="btn btn-lg btn-primary">Submit</button> <br><br>
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