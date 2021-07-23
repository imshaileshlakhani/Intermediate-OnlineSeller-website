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

    <title>About</title>
    <link href="../css/Style.css" rel="stylesheet">
    <link href="../css/about.css" rel="stylesheet">

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
    <!-- ===== about us ========= -->
    <div class="container-fluid row m-0 p-0">
        <div class="col">
            <h3>About Us</h3>
            <div class="container-fluid row">
                <div class="col-sm-4">
                    <h4>quality styles</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean pellentesque vel neque ac rhoncus. In et tempus sapien.
                        Aenean vestibulum nec augue ac ullamcorper. Nullam non metus
                        interdum, facilisis purus a, consequat dolor. Phasellus quis nisi
                        posuere nulla suscipit condimentum.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ==== footer ==== -->
    <?php require "../Attechment/footer.php" ?>
</body>

</html>