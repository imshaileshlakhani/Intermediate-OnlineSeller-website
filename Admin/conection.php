<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "metoza";

$db = new mysqli($server,$user,$password,$db);
if($db->connect_error)
{
	die("database not connected".$db->connect_error);
}


