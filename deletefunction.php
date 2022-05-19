<?php

include('Connect.php');
if(isset($_GET['deleteid']))
{
	$id=$_GET['deleteid'];
	//echo $id;
	$sql_delete="Delete from `store` where id=$id";
	$result5=mysqli_query($con,$sql_delete);
	if($result5)
	{
		echo "<script>alert('Deletion Successful')</script>";
		echo "<script>window.open('delete.php','_self')</script>";
	}
	else
	{
		die(mysqli_error($con));
	}
}

?>