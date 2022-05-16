<?php
  
  include('Connect.php');

error_reporting(0);

?>


<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <style>
    <?php include 'css/style.css';
    ?>
    
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/6a478048bc.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    
    <title>Edit Main page</title>
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
                <i class='bx bx-menu' id="btn"></i>
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
                    <a href="delete.php">
                        <i class="fa-solid fa-trash-can"></i>
                        <span class="links_name">Delete</span>
                    </a>
                    <span class="tooltip">Delete</span>
                </li>
                <li>
                    <a href="selectsearch.php">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <span class="links_name">View/Search</span>
                    </a>
                    <span class="tooltip">View/Search</span>
                </li>
                <li>
                    <a href="exit.php">
                        <i class="fa-solid fa-door-open"></i>
                        <span class="links_name">Exit</span>
                    </a>
                    <span class="tooltip">Exit</span>
                </li>
            </ul>
        </div>
    </div>

    <form method="post">
        <section class="home-section">
            <div class="container py-5">
                  <div class="col-lg-12 ">
                    Enter Student Number: <input type="text" class="effect-1" name="idnumber" style="width: 20%" value="<?php echo $idnumber; ?>">
                    <button type="submit" class="btn1" name="submit" style="width:80px">Find</button>
                    <span class="Focus-border"></span>

<?php 
            if(isset($_POST['submit'])){

              $idnumber = $_POST['idnumber'];

              $sql = "SELECT * from `store` WHERE idnumber = $idnumber";
              $result = mysqli_query($con, $sql);
              $row = mysqli_fetch_assoc($result);

                      $firstname        = $row['firstname'];
                      $surname          = $row['surname'];
                      $occupation       = $row['occupation'];
                      $mobilenumber     = $row['mobilenumber'];

            if($row){
?>
                <div class="form-row pt-2">
                  <div class="col-lg-12">
                    <label class="effect-1"> Here is the existing information about <?php echo $idnumber; ?>: </label>
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row pt-2">
                  <div class="col-lg-12">
                    <label class="effect-1"> <?php echo $firstname," ", $surname, " is a ",$occupation, ". His number is ", $mobilenumber;?> </label>
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <br>

              <!-- display data from database -->
              <div class="container my-5">
                <table class="table">
                    <thead class="head text-center text-light py-3">
                    <tr>
                      <th scope="col">Student Number</th>
                      <th scope="col">Surname</th>
                      <th scope="col">Firstname</th>
                      <th scope="col">Occupation</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Country Code</th>
                      <th scope="col">Area Code</th>
                      <th scope="col">Mobile Number</th>
                      <th scope="col">&nbsp</th>

                    </tr>
                  </thead>
                  <tbody>
<?php 
    
    //php code to display the data
    $sql0="Select * from `store` WHERE idnumber = $idnumber";
    $result0 = mysqli_query($con,$sql0);

    if($result0){
      while($row0=mysqli_fetch_assoc($result0)){

        $id                 =$row0['id'];
        $studentN0          = $row0['idnumber'];
        $surname            = $row0['surname'];
        $firstname          = $row0['firstname'];
        $occupation         = $row0['occupation'];
        $gender             = $row0['gender'];
        $countryC           = $row0['countrycode'];
        $areaC              = $row0['areacode'];
        $mobile             = $row0['mobilenumber'];


        echo '<tr>
            <th scope="row">'.$studentN0.'</th>
            <td>'.$surname.'</td>
            <td>'.$firstname.'</td>
            <td>'.$occupation.'</td>
            <td>'.$gender.'</td>
            <td>'.$countryC.'</td>
            <td>'.$areaC.'</td>
            <td>'.$mobile.'</td>
          
          <td>
          <button class="btn btn-primary"  ><a href="edit-phonebook.php? updateid='.$id.'" 
          class="text-light">Update</a></button>
        </td>

        </tr>';


      }

    }

    
    //header('location:form3-1.php');

    }else{
      echo $idnumber,"  Student Number does not exist!";
    }
    
    }
  
?>                
                </tbody>
            </table>

              </div>
            </div>
    </div>
     </form>
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
                            <a href="https://web.facebook.com/nexusapplert"
                                class="btn btn-outline-light btn-floating m-1 text-white" role="button">
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
 

  </body>
</html>
  
