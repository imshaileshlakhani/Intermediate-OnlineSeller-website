<?php
    require '../Admin/conection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:site_name" content="Metoza" />
	<meta property="og:title" content="Metoza" />
	<meta property="og:description" content="Best Amazon Seller" />
	<meta property="og:type" content="website" />
	<meta property="og:locale" content="en_IN" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Metoza" />
	<meta name="twitter:description" content="Best Amazon Seller" />
	<meta name="twitter:image:alt" content="Metoza" />
	<meta name="keywords" content="metoza, Amazon seller, flipkart, amazon ">
	<title>Metoza -Best Amazon Seller</title>

	<!-- ============  Bootstrap ============ -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<!-- ==== fontawosem ===-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

	<!-- === Css File === -->
	<link rel="stylesheet" type="text/css" href="../Css/Style.css">
	<link rel="stylesheet" type="text/css" href="../Css/index.css">
</head>

<body>
	<!--======= header ===== -->
	<?php require "../Attechment/header.php" ?>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light ">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav m-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="about.php">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact us</a>
				</li>
			</ul>
		</div>
	</nav>
	<!-- image -->
	<center>
		<img src="../Image/logo.png" class="top-center-logo">
	</center>
	<center>
		<img src="../Image/center-image.jpg" class="top-center-image">
	</center>

	<div class="store-link-btn">
		<p class="text-center">Visit Our Store</p>
        <button class="btn  btn-store">Visit AS AT ON <b>&nbsp; AMAZON</b></button>
		<button class="btn  flipkart">Visit AS AT ON <b>&nbsp; Flipkart</b></button>
	</div>
	<!-- ==== product ==== -->
	 <section>
        <div class="container-fluid row m-auto product" >
            <?php
                $qry = "SELECT * FROM product";
                $result = $db->query($qry);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
            ?>
            <div class="col-12 col-md-3 col-sm-6 p-1">
                <div class="product-image">
                    <img src="<?php echo $row['p_image']?>">
                    <div class="caption">
                        <div class="title"><?php echo $row['p_name']?></div>
                        <div class="price"><?php echo $row['p_price']?></div>
                    </div>
                </div>
                <div class="product-button mt-3 row">
                    <button class="btn-flipkart" onclick="location.href = '<?php echo $row['p_flipkart_link']?>'">flipkart</button>
                    <button class="btn-amazon" onclick="location.href = '<?php echo $row['p_amazon_link']?>'">amazon</button>
                </div>
            </div>  
            <?php
                    }
                }
            ?>   
        </div>
    </section>
	<!-- footer -->
	<?php require "../Attechment/footer.php"; ?>
</body>

</html>