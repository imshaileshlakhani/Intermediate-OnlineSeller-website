<!DOCTYPE html>
<html lang="en">

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="../css/Style.css" rel="stylesheet">
    <link href="../css/contact.css" rel="stylesheet">

    <title>Contcat</title>


    <!-- ============  Bootstrap ============ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- ==== fontawosem ===-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


</head>

<body>
    <!-- ==== header ==== -->
    <?php require '../Attechment/header.php' ?>
    <!-- ==== navbar === -->
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
    <!-- ==== center logo ==== -->
    <center>
        <div>
            <img src="../image/logo.png">
        </div>
    </center>
    <div class="container-fluid " id="contact">
        <div class="container row m-auto">
            <div class="col-sm-12 col-md-6 contact-us">
                <h3 style="margin: 30px 0 20px;">Contact Us</h3>
                <p class="text-capitalizel address">
                    Metoda industries G- 2325,<br>lodhika gidc,<br>metoda, Rajkot -360021
                </p>
                <div class="social-media">
                    <a href="#" target="_new" style="padding: 5px 13px;"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_new"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_new"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="whatsapp">
                    <a href="https://wa.me/917862846047" target="_new"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <form>
                    <div class="form-group">
                        <p class="text-justify">We're happy to give answer any question you have. Just send us a message in the form below with any question you may have.</p>
                    </div>
                    <div class="form-group">
                        <input type="texr" name="name" class="form-control" id="exampleFormControlname" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="exampleFormControlemail" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-secondary mb-2">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require "../Attechment/footer.php" ?>
</body>

</html>