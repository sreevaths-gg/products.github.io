<?php
session_start(); 


include 'db_connect.php';

$i =$_GET['i'];						//storing ordercount in counter
$id =$_GET['remove'];											

if ($i==1)
{
foreach($_SESSION["cartarray"] as $key => $value) 
{
	if (strcmp($id,$key)==0) 	
	{
		unset($_SESSION["cartarray"][$key]);
	}
}
header("location: view_cart.php");
print_r($_SESSION["cartarray"]);
}


?>