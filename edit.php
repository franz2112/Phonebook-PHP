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
    <!-- Fontawsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawsome -->

    <!-- bootstraps -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- bootstraps -->

    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- Boxicons CDN Link -->

    <title>Edit Main page</title>
</head>

<body>
    <!--VIDEO BG-->
    <video autoplay muted loop class="myVideo">
        <source src="bg1.mp4" type="video/mp4">
    </video>
    <!--End of Video BG-->

    <!-- sidebar -->
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
    <!-- end of sidebar -->


    <section class="home-section">
        <div class="main-text">
            <div class="container-xxl">

                <div class="table-responsive data-design ">
                    <div class="">
                        <form method="post">
                            <div class="findbutton">
                                <button type="submit" name="submit">Find</button>
                                <input type="text" name="idnumber" value="<?php echo $idnumber; ?>"
                                    placeholder="Enter Student Number" required="required">
                            </div>
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
                            <div class="find-details">
                                <div class="">
                                    <div class="col-lg-12">
                                        <label class=""> Here is the existing information about
                                            <span class="text-bold"><?php echo $idnumber; ?></span>:
                                        </label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="col-lg-12">
                                        <label class="">
                                            <?php echo $firstname," ", $surname, " is a ",$occupation, ". His number is ", $mobilenumber;?>
                                        </label>
                                    </div>
                                </div>
                            </div>


                            <!-- display data from database -->
                            <div class="">
                                <table class="table text-white">
                                    <thead class="head text-light py-3">
                                        <tr>
                                            <th scope="col">&nbsp;</th>
                                            <th scope="col">Student Number</th>
                                            <th scope="col">Surname</th>
                                            <th scope="col">Firstname</th>
                                            <th scope="col">Occupation</th>
                                            <th scope="col">Gender</th>
                                            <th scope="col">Country Code</th>
                                            <th scope="col">Area Code</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">&nbsp;</th>

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
                                                        <th scope="row"></th>
                                                        <th scope="row">'.$studentN0.'</th>
                                                        <td>'.$surname.'</td>
                                                        <td>'.$firstname.'</td>
                                                        <td>'.$occupation.'</td>
                                                        <td>'.$gender.'</td>
                                                        <td>'.$countryC.'</td>
                                                        <td>'.$areaC.'</td>
                                                        <td>'.$mobile.'</td>
                                                    <td>
                                                    <button><a href="edit-phonebook.php? updateid='.$id.'" 
                                                    class="btn btn-primary">Update</a></button>
                                                    </td>
                                                    </tr>';
                                                }
                                            }
 
                                            //header('location:form3-1.php');
                                            }
                                            else{
                                                $output .='<div class="find-details"> '.$idnumber.'  ID number does not exist</div>';
                                                echo $output;
                                        }

                                        }

                                        ?>
                                    </tbody>
                                </table>

                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- container xxl end-->
        </div> <!-- main-text end -->


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
                                <i class="fab fa-facebook"></i>
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