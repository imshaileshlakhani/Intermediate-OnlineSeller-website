<?php
    require 'conection.php';

    $id = $_GET['id'];
    $qry = "DELETE FROM product WHERE p_id=$id";
    if($db->query($qry) == TRUE){
        header('location:index.php');
    }else{
        echo "Error".$sql1."<br>".$db->error;
    }
    $db->close();
?>