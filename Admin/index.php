<?php
    require 'conection.php';
    session_start();
    if(!isset($_SESSION['name'])){
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Metoza</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">

    <!-- ============  Bootstrap ============ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- ==== fontawosem ===-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

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
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
                 <!-- <li class="nav-item">
                    <a class="nav-link" href="profile.php"><i class="fas fa-user-circle"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
    <!-- ==== center logo ==== -->
    <center>
        <div>
            <img src="../image/logo.png">
        </div>
    </center>
    <div>
        <button class="float-right btn add m-3"><a href="Add-Edit-product.php" style="text-decoration: none; ">Add product</a></button>
    </div>
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
                    <button class="btn edit" onclick="location.href = 'Add-Edit-product.php?id=<?php echo $row['p_id']?>'">Edit</button>
                    <button class="btn btn-outline-danger" onclick="location.href = 'Delete.php?id=<?php echo $row['p_id']?>'">Delete</button>
                </div>
            </div>  
            <?php
                    }
                }
            ?>   
        </div>
    </section>
    <footer class="footer bg-secondary">
        <div class="social-media">
            <a href="https://wa.me/917862846047"><i class="fab fa-whatsapp"></i></a>
            <a href="#" style="padding:5px 15px;"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>

</html>