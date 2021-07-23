
<?php
	require 'conection.php';
	session_start();
    if(!isset($_SESSION['name'])){
        header('location:login.php');
    }
	
	$name = "";
	$price = "";
	$image = "";
	$amazon = "";
	$flipkart = "";

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$qry = "SELECT * FROM product WHERE p_id=$id";
		$result = $db->query($qry);
		if($result->num_rows > 0){
			$row = $result->fetch_assoc();
			$name = $row['p_name'];
			$price = $row['p_price'];
			$image = $row['p_image'];
			$amazon = $row['p_amazon_link'];
			$flipkart = $row['p_flipkart_link'];
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Metoza -Add Product</title>
	<link rel="stylesheet" href="css/style.css">

	<!-- ============  Bootstrap ============ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- ==== fontawosem ===-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
<style type="text/css">
	.form{
		padding: 50px 25px;	
	}
	label{
		text-transform: capitalize;
	}
	footer{
		margin-top: 60px;
	}
	@media screen and (max-width: 880px)
	{
			.form{
				padding: auto 0;
			}
	}
</style>
</head>
<body>
	<!-- ==== navbar ==== -->
    <nav class="navbar navbar-expand-lg navbar-light ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mr-4">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile.php"><i class="fas fa-user-circle"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- ==== center logo ==== -->
    <center>
		<div>
			<img src="../image/logo.png">
		</div>

		<div class="container">
			<div class="col-sm-12 bg-light">
				<form class="form"  enctype="multipart/form-data" action="<?php if(isset($_GET['id'])) { echo "Edit.php?id=$id";}else{ echo "add.php";}?>" method="POST">
					<div class="form-row form-group">
						<img src="<?php if(isset($_GET['id'])) { echo $image;}else{ echo "../image/jade-scarlato-p5EOP_SO7lk-unsplash.jpg";}?>" class="form-control col-xl-5 input-group m-auto" id="product_image">
					</div>
					<div class="form-row form-group">
						<label class="col-form-label" for="name">Product name</label>
						<input type="text" name="product_name" value="<?= $name?>" class="form-control input-group" id="product_name" required>
					</div>
					<div class="form-row form-group">
						<label class="col-form-label" for="amazon_link">Amazon link </label>
						<input type="text" name="amazon_link" value="<?= $amazon?>" class="form-control input-group" id="amazon_link" required>
					</div>
					<div class="form-row form-group">
						<label class="col-form-label" for="flipkart_link">Flipkart link </label>
						<input type="text" name="flipkart_link" value="<?= $flipkart?>" class="form-control input-group" id="flipkart_link" required>
					</div>
					<div class="form-row form-group">
						<label class="col-form-label" for="product_price">price</label>
						<input type="number" name="product_price" value="<?= $price?>" class="form-control input-group" id="product_price" required>
					</div>
					<div class="form-row form-group">
						<label class="col-form-label" for="product_image">Image</label>
						<input type="file" name="product_image" class="form-control input-group" id="product_image">
					</div>
					<div class="form-row form-group float-right">
						<input type="submit" name="add_submit" class="btn btn-primary" id="submit" value="Add Now">
					</div>
				</form>
			</div>
		</div>
	</center>
	<footer class="footer bg-secondary 	">
        <div class="social-media">
            <a href="https://wa.me/917862846047"><i class="fab fa-whatsapp"></i></a>
            <a href="#" style="padding:5px 15px;"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>