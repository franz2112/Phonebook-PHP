<?php
    include ('connect.php');
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $mobile=$_POST['mobile'];

        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql="Select * from `crud` where username='$username' or email='$email'";
        $selectresult=mysqli_query($con, $sql);
        $number=mysqli_num_rows($selectresult);

        if($number>0){
            echo "<script>alert('username or email already exist')</script>";
        }
        else{
            $insert_query = "insert into crud (username,email,password,mobile) values(
                '$username', '$email', '$password_hash', '$mobile')";
            $result=mysqli_query($con, $insert_query);
            if($result){
                echo "<script>alert('Data inserted successfully')</script>";
                echo "<script>window.open('display.php', '_self')</script>";
            }
            else{
                die(mysql_error($con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add User</title>
    <style>
        body{
            background: #466368;
        }
        .bg-color{
            color:white;
            background-color: #1f454d;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-light bg-white">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">
              <a class="navbar-brand" href="display.php"  >CRUD Project</a>
            </span>        
        </div>
    </nav>
    <div class="container pt-5">
        <div class="bg-color">
            <form method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="username" name="username" class="form-control" id="username" aria-describedby="emailHelp" required="required" placeholder="Write Username">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required="required" placeholder="Write Email Address">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required="required" placeholder="Write Password">
                </div>
                <div class="mb-3">
                    <label for="mobile" class="form-label">Phone Number</label>
                    <input type="mobile" name="mobile" class="form-control" id="mobile" aria-describedby="emailHelp" required="required" placeholder="Write Number" minlength="11" maxlength="11">
                </div>
                <button name="submit" type="submit" class="btn btn-success">Submit</button>
                <a href="display.php" class="btn btn-primary">View Users</a>

            </form>
        </div> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>