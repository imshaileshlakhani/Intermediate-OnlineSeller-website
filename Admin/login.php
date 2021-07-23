<?php 
	require 'conection.php';
	session_start();

	if (isset($_POST['login_submit'])) {
		$id=$_POST['id'];
		$email=$_POST['email'];
		$password=$_POST['password'];


		$q="SELECT * FROM login_m WHERE login_id=$id and login_email='$email' and login_password='$password' ";
		$query=mysqli_query($db,$q);
		$search_cout=mysqli_num_rows($query);

		if ($search_cout) {
			$search_details=mysqli_fetch_assoc($query);
			$_SESSION['name']=$search_details['login_name'];
			$_SESSION['password']=$search_details['login_password'];
			$_SESSION['eamil']=$search_details['login_email'];

			header('Location: index.php');
		}
		// else {
		// 	echo "<h4>&nbsp;&nbsp;invali details</h4>";
		// }
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Metoza -Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- === Bootstrap ==== -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- === fontawesome ==== -->

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="../image/logo.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="far fa-id-card"></i></span>
							</div>
							<input type="text" name="id" class="form-control input_user" value="" placeholder="Id">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="email" class="form-control input_user" value="" placeholder="email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="password" class="form-control input_pass" value="" placeholder="password">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
						 	<input type="submit" name="login_submit" class="btn login_btn btn-outline-dark" value="Login">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
