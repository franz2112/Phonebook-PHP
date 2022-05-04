<?php
  include('connect.php');
  if (isset($_POST['submit'])) {
    // code...
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];

    $password_hash= password_hash($password, PASSWORD_DEFAULT);

    $sql= "Select * From `crud` Where username= '$username' or email= '$email'";
    $selectresult=mysqli_query($con, $sql);
    $number=mysqli_num_rows(selectresult);

    if ($number>0)
    {
      echo"<script>alert('Username or email already exist')</script>";
    }
    else
    {
      $sql = "insert into `crud` (username, email, password, mobile) values ('$username', '$email', '$password_hash', '$mobile')";
      $result = mysqli_query($con, $sql);
      if($result)
      {
        echo "Data Inserted Successfully";
        echo "<script> window.open('display.php', '_self')</script>";
      }
      else
      {
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
    <link rel="stylesheet" href="css/CSS.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD Index</title>
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
            <li><a href="index.php">REGISTER</i></a></li> 
            <li> | </li>
            <li><a href="display.php">DISPLAY</a></li>
        </ul>
    </nav>
  </CENTER>

    <div class="container my-5">

      <form method="post">
        <div class="form-group">
          <label> Username </label>
          <input type="text" required="required" class="form-control" placeholder="Enter Username" name="username">
        </div>
        <br>
        <div class="form-group">
          <label> Email </label>
          <input type="email" required="required" class="form-control" placeholder="Enter Email" name="email">
        </div>
        <br>
        <div class="form-group">
          <label> Password </label>
          <input type="password" required="required" class="form-control" placeholder="Enter Password" name="password">
        </div>
        <br>
        <div class="form-group">
          <label> Mobile Number </label>
          <input type="text" required="required" class="form-control" placeholder="Enter Mobile Number" name="mobile">
        </div>
      <br><br>
      <button type="submit" class="btn btn-dark" name="submit" >Submit</button>
      </form>

    </div>
</div>
  </body>
</html>