<?php

include('Connect.php');
if(isset($_POST['deleteid']))
{
	$id=$_POST['idnumber'];
	//echo $id;
	$sql_delete="Delete from `store` where idnumber=$id";
	$result5=mysqli_query($con,$sql_delete);
	if($result5)
	{
		echo "<script>alert('Record deleted successfully')</script>";
		echo "<script>window.open('delete.php','_self')</script>";
	}
	else
	{
		die(mysqli_error($con));
	}
}

?>