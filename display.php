<?php

	include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>CRUD Display</title>
	<link rel="stylesheet" href="css/CSS.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background-color: #ffe2c9;">

	<div id="container">
      <CENTER>
    <header id="main">
        <br>
            <h1> <b> C R U D &nbsp P R O J E C T </b></h1>
        <br>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">REGISTER</a></li>
            <li> | </li>
            <li><a href="display.php">DISPLAY</a></li>
        </ul>
    </nav>
  </CENTER>

<div style="overflow-y: scroll; height: 300px;" class="container my-5">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col"><center>Operations</center></th> 
    </tr>
  </thead>
  <tbody>
</div>
</div>
<?php

$select_query="Select * from crud";
$result=mysqli_query($con,$select_query);
$i=1;
if($result){
   while ($row=mysqli_fetch_assoc($result)) {
    $id=$row['id'];
   	 $username=$row['username'];
   	 $email=$row['email'];
   	 $mobile=$row['mobile'];
   	 echo " <tr> 
     <td> $i </td>
     <td> $username </td>
     <td> $email </td>
     <td> $mobile </td>
     <td class='text-center'>
     <button class='btn btn-success'> <a href='update.php?update_id=$id' class='text-light text-decoration-none'>Update</button>
     <button class='btn btn-danger'><a href='delete.php?deleteid=$id' class='text-light text-decoration-none'> Delete </button>
     </td>
     </tr>";
    $i++;
   }
}else{
    die(mysqli_error($con));
   }

?>

  </tbody>
</table> 

</body>
</html>