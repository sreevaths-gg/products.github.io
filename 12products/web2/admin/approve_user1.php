<?php

include 'db_connect.php';

$sid=$_GET['sid']; echo $sid;

$a=$_GET['a'];echo $a;
if($a==1)
{$sql = "UPDATE login SET USTATUS='Approved' WHERE SN='$sid' "; } 
else 
if($a==2)
{$sql = "UPDATE login SET USTATUS='Rejected' WHERE SN='$sid' "; } 

	
if(mysqli_query($conn,$sql)){  
 echo "Record updated successfully";  
}else{  
echo "Could not update record: ". mysqli_error($conn);  
}  

?>