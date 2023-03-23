<?php 

    require_once("connection.php");
    $query = " select * from stock ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">

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
                            <form action="insert4.php"  method="post">
									
									<div class="form-group">
										<label>quantity</label>
										<input class="form-control form-control-lg" type="text" name="quantity" placeholder="Enter your quantity">
									</div>
									<div class="text-center mt-3">
										 <button type="submit" class="btn btn-lg btn-primary">request</button> <br><br>
									</div>
								</form>
                        <table class="table table-bordered">
                            <tr>
                                <td> User ID </td>
                                <td> blood group</td>
                                <td> quantity </td>
                                <td> donation id </td>
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $UserID = $row['u_id'];
                                        $bloodgrp = $row['u_bloodgrp'];
                                        $quantity = $row['quantity'];
                                        $d_id = $row['d_id'];
                            ?>
                                    <tr>
                                        <td><?php echo $UserID ?></td>
                                        <td><?php echo $bloodgrp ?></td>
                                        <td><?php echo $quantity ?></td>
                                        <td><?php echo $d_id ?></td>
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
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