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
                    <a href="index.php">
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
                <div class="table-responsive edit-data-design ">

                    <!-- Update result -->
                    <form method="post">
                        <div class="findbutton">
                            <button type="submit" name="submit">Find</button>
                            <input type="text" name="idnumber" placeholder="Enter Student Number to Edit"
                                required="required">
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

                        <!-- details result -->
                        <div class="find-details1">
                            <div class="col-lg-12">
                                <label class=""> Here is the existing information about student
                                    <span> <?php echo "(";?> </span>
                                    <span class="text-bold"><?php echo $idnumber; ?></span>
                                    <span> <?php echo ")";?> </span>
                                    <hr>
                                </label>
                            </div>
                            <div class="">
                                <div class="col-lg-12">
                                    <label class="">
                                        <span class="text-bold"><?php echo $firstname;?> </span>
                                        <span> <?php echo " ";?> </span>
                                        <span class="text-bold"><?php echo $surname;?> </span>
                                        <span> <?php echo " is a(n) ";?> </span>
                                        <span class="text-bold"><?php echo $occupation;?> </span>
                                        <span> <?php echo ". His Mobile Number is ";?> </span>
                                        <span class="text-bold"><?php echo $mobilenumber;?> </span>
                                        <span> <?php echo ".";?> </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- details result -->


                        <!-- display result data from database -->
                        <table class="table text-white text-center">
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
                                    $sql0="Select * from `store` WHERE idnumber = $idnumber ";
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
                                                <th scope="row" class="align-middle"></th>
                                                <th scope="row" class="align-middle">'.$studentN0.'</th>
                                                <td class="align-middle">'.$surname.'</td>
                                                <td class="align-middle">'.$firstname.'</td>
                                                <td class="align-middle">'.$occupation.'</td>
                                                <td class="align-middle">'.$gender.'</td>
                                                <td class="align-middle">'.$countryC.'</td>
                                                <td class="align-middle">'.$areaC.'</td>
                                                <td class="align-middle">'.$mobile.'</td>
                                            <td class="align-middle">
                                            <button><a href="edit-phonebook.php? updateid='.$id.'" 
                                            class="button3 ice2 btn-info text-white">Update</a></button>
                                            </td>
                                            </tr>';
                                        }
                                    }
                                    //header('location:form3-1.php');
                                    }
                                    else{
                                ?>

                                <div class="find-details1">
                                    <div class="col-lg-12">
                                        <label class=""> ID Number
                                            <span> <?php echo "(";?> </span>
                                            <span class="text-bold"><?php echo $idnumber; ?></span>
                                            <span> <?php echo ")";?> </span>
                                            <span> <?php echo "Does not Exist";?> </span>
                                            <hr>
                                        </label>
                                    </div>
                                </div>

                                <?php
                                    }

                                }
                                ?>
                            </tbody>
                        </table>
                    </form>


                    <!-- Display whole student Data -->
                    <form>
                        <div class="hide">
                            <table class="table table text-white text-center">
                                <!-- <h1>Student Data</h1> -->
                                <thead>
                                    <tr>
                                        <th scope="col">Student Number</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">Firstname</th>
                                        <th scope="col">Occupation </th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Country Code </th>
                                        <th scope="col">Area Code</th>
                                        <th scope="col">Mobile number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--PHP Display Table-->
                                    <?php
                                $select_query="Select * from store ORDER BY id desc";
                                $result=mysqli_query($con,$select_query);
                                $i=1;
                                if($result){
                                    while ($row=mysqli_fetch_assoc($result)) {
                                        $idnumber=$row['idnumber'];
                                        $surname=$row['surname'];
                                        $firstname=$row['firstname'];
                                        $occupation=$row['occupation'];
                                        $gender=$row['gender'];
                                        $countrycode=$row['countrycode'];
                                        $areacode=$row['areacode'];
                                        $mobilenumber=$row['mobilenumber'];
                                        echo " <tr> 
                                            <th>$idnumber</th>
                                            <td>$surname</td>
                                            <td>$firstname</td>
                                            <td>$occupation</td>
                                            <td>$gender</td>
                                            <td>$countrycode</td>
                                            <td>$areacode</td>
                                            <td>$mobilenumber</td>
                                            <td class='text-center'>
                                        </td>
                                        </tr>";
                                        $i++;
                                    }
                                }
                                else{
                                    die(mysqli_error($con));
                                }
                            ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div> <!-- container xxl end-->
        </div><!-- main-text end -->

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