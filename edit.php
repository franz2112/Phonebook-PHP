<?php
 include('connect.php');
 if(isset($_GET['update_id'])){
  $uid=$_GET['update_id'];
  $sql="Select * from crud where id=$uid";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  $userdisplay=$row['username'];
  $emaildisplay=$row['email'];
  $mobiledisplay=$row['mobile'];
  
  if(isset($_POST['update'])){
  $username=$_POST['username'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];

  $update_query="update crud set username='$username', email='$email', mobile='$mobile' where id=$uid";
    $result=mysqli_query($con,$update_query);
    if($result){
   echo "<script>window.open('display.php','_self')</script>";
    }else{
      die (mysqli_error($con));
    }
 
  }
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Update</title>
  </head>
  <body style="background-color: #ffe2c9;">
  <div class="container my-5">
 <form action="" method="post">

  <div class="form-group mb-3">
    <label>Username</label>
    <input type="text" required="required" class="form-control" placeholder="Enter your username" name="username" autocomplete="off" value="<?php echo $userdisplay ?>" >
  </div>

  <div class="form-group mb-3">
    <label>Email</label>
    <input type="email" required="required" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value="<?php echo $emaildisplay ?>">
  </div>

   <div class="form-group mb-3">
    <label>Mobile Number</label>
    <input type="text" required="required" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off" value="<?php echo $mobiledisplay ?>" minlength="11" maxlength="11" >
  </div> 
  <center>
  <button type="submit" class="btn btn-info" name="update">Update</button>
  <a class="btn btn-info" href="display.php">Cancel</a></li>
</center>
</form>
</div>
</body>
</html>