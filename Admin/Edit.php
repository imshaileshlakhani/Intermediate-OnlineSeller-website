<?php
    require 'conection.php';

    $id = $_GET['id'];

    $product_name=$_POST['product_name'];
	$amazon_link=$_POST['amazon_link'];
	$flipkart_link=$_POST['flipkart_link'];
	$product_price=$_POST['product_price'];
	$product_image=$_FILES['product_image'];

    $imagename = $product_image['name'];
    $imageTmp = $product_image['tmp_name'];

    $fileDestination = "../Image/".$imagename;
    move_uploaded_file($imageTmp,$fileDestination);

    $qry = "UPDATE product SET p_name = '$product_name', p_price = $product_price, p_amazon_link = '$amazon_link', p_flipkart_link = '$flipkart_link', p_image = '$fileDestination' WHERE p_id = $id";
    if($db->query($qry) == TRUE){
        header('location:index.php');
    }else{
        echo "Error".$sql1."<br>".$db->error;
    }
    $db->close();
?>