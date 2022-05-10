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
    
    <style><?php include 'css/style.css'; ?></style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://kit.fontawesome.com/6a478048bc.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Store</title>
  </head>
  <body>
   <!--VIDEO BG-->
      <video autoplay muted loop class="myVideo">
          <source src="bg1.mp4" type="video/mp4">
      </video>
    <!--End of Video BG-->
      <div class="container">
          <div class="sidebar">
              <div class="logo-details">
              <i class="fa-solid fa-0 icon"></i>
                  <div class="logo_name">PHONEBOOK</div>
                  <i class='bx bx-menu' id="btn" ></i>
              </div>
              <ul class="nav-list-1">
                  <!-- <li>
                      <i class='bx bx-search' ></i>
                      <input type="text" placeholder="Search...">
                      <span class="tooltip">Search</span>
                  </li> -->
                  <li>
                      <a href="index.php" active>
                          <i class="fa-solid fa-home"></i>                        
                          <span class="links_name">Home</span>
                      </a>
                      <span class="tooltip">Home</span>
                  </li>
                 <li>
                      <a href="store.php">
                          <i class="fa-solid fa-box-archive"></i>                        
                          <span class="links_name">Store</span>
                      </a>
                      <span class="tooltip">Store</span>
                  </li>
                  <li>
                      <a href="edit.php">
                          <i class="fa-solid fa-pen"></i>
                          <span class="links_name">Edit</span>
                      </a>
                  <span class="tooltip">Edit</span>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa-solid fa-trash-can"></i>
                          <span class="links_name">Delete</span>
                      </a>
                      <span class="tooltip">Delete</span>
                  </li>
                  <li>
                      <a href="viewsearch.php">
                          <i class="fa-solid fa-magnifying-glass"></i>                        
                          <span class="links_name">View/Search</span>
                     </a>
                      <span class="tooltip">View/Search</span>
                  </li>
                  <li>
                      <a href="#">
                          <i class="fa-solid fa-door-open"></i>                      
                          <span class="links_name">Exit</span>
                      </a>
                      <span class="tooltip">Exit</span>
                  </li>
             </ul>
          </div>
      </div>
      <section class="home-section">
        <!-- main page -->
        <div class="container pt-5">
            <div class="store-input">
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
    

           <!-- Footer -->
           <footer class="text-center text-lg-start text-white">
              <!-- Grid container -->
                <div class="container p-1 pb-1">
                    <hr class="my-4">
                      <!-- Section: Copyright -->
                    <section class="p-1 pt-1">
                        <div class="row d-flex align-items-center">
                              <!-- Grid column -->
                            <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <!-- Copyright -->
                            <div>
                                © 2022 Copyright:
                                <a class="text-white" href="profile.php">Solmayor & Tuazon</a>
                            </div>
                            <!-- Copyright -->
                            </div>
            
                            <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                            <!-- Facebook -->
                                <a href="https://web.facebook.com/nexusapplert" class="btn btn-outline-light btn-floating m-1 text-white" role="button" >
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            <!-- Twitter -->
                                <a class="btn btn-outline-light btn-floating m-1 text-white" role="button">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            <!-- Google -->
                                <a class="btn btn-outline-light btn-floating m-1 text-white" role="button">
                                <i class="fab fa-google"></i>
                                </a>
                            <!-- Instagram -->
                                <a class="btn btn-outline-light btn-floating m-1 text-white" role="button">
                                <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                     </section>
                </div>
            </footer>
      </section>
      <?php?><script><?php include 'Script/script.js'; ?></script>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>