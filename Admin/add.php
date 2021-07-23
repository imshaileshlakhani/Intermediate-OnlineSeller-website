<?php 

	require 'conection.php';

	$product_name=$_POST['product_name'];
	$amazon_link=$_POST['amazon_link'];
	$flipkart_link=$_POST['flipkart_link'];
	$product_price=$_POST['product_price'];
	$product_image=$_FILES['product_image'];

    $imagename = $product_image['name'];
    $imageTmp = $product_image['tmp_name'];

    $fileDestination = "../Image/".$imagename;
    move_uploaded_file($imageTmp,$fileDestination);

    $qry="INSERT INTO `product` (`p_name`, `p_price`, `p_amazon_link`, `p_flipkart_link`, `p_image`) VALUES ('$product_name',$product_price,'$amazon_link','$flipkart_link','$fileDestination')";
    if($db->query($qry) == TRUE)
    {
    	header('Location: index.php');
    }
    else{
    	echo "Error".$sql1."<br>".$db->error;
    }
	$db->close();
    ?>