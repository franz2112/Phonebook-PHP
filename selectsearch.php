<?php

include 'Connect.php';
$select_query = "select * from store";
$result=mysqli_query($con,$select_query);

if (isset($_POST["surnamesubmit"])) {
        $surname = $_POST['surnamesearch'];
        $select_query = "select * from store where surname='$surname'";
        $result=mysqli_query($con,$select_query);

        if(mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)){

                echo"<script>
                    alert('Surname exist!')
                    window.open('selectsearch.php', '_self')
                </script>";
            }
        }
        else{
            echo"<script>
                    alert('Surname not exist!')
                    window.open('selectsearch.php', '_self')
                </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- local links -->
    <style>
    <?php include 'css/style.css';
    ?>
    </style>

    <link rel="stylesheet" href="css/CSS.css">

    <!-- local links -->

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

    <title>View Search</title>



</head>

<body style="background-color: #ffe2c9;">

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



    <section class="home-section">
        <!-- main page -->
        <div class="main-text">
            <div class="container-xxl">

                <!-- Search by Surname  -->
                <div class="search-bg-meaning">
                    <h1>Search by Surname</h1>
                    <h3>Whom are you looking for?</h3>
                    <form action="" method="POST">
                        <div class="search">
                            <input type="text" class="form-control" placeholder="Enter Surname" name="surnamesearch"
                                id="surnamesearching">
                            <div class=" search-menu-2">
                                <div class="field">
                                    <button type="submit" class='button2 ice2 view_data' data-bs-toggle="modal"
                                        data-bs-target="#data_Modal" name="surnamesubmit">Search</button>
                                    <!-- <a href="searchsurname.php?surnamesubmit='.$surname.'" class='button ice'
                                    name="surnamesubmit" type="submit" role="button">Search</a> -->
                                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Launch demo modal
                                    </button> -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Search by Country  -->
                <div class="search-bg-meaning">
                    <h1>Search by Country</h1>
                    <table class="table text-white">
                        <thead>
                            <tr>
                                <th scope="col">&nbsp;</th>
                                <th scope="col">ASEAN Country</th>
                                <th scope="col">Country Code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Federation of Malaysia</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Republic of Indonesia</td>
                                <td>62</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Republic of the Philippines</td>
                                <td>63</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Republic of Singapore</td>
                                <td>65</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Kingdom of Thailand</td>
                                <td>66</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Socialist Republic of Vietnam</td>
                                <td>84</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Brunei Darussalam</td>
                                <td>673</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Kingdom of Cambodia</td>
                                <td>855</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Lao People’s Democratic Republic</td>
                                <td>856</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Republic of the Union of Myanmar</td>
                                <td>95</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>Democratic Republic of Timor Leste</td>
                                <td>670</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="search-menu">
                        <div class="field">
                            <a href="searchcountry.php" class="button ice" role="button">Search</a>
                        </div>
                    </div>
                </div>
                <!-- Search by Country  -->

                <!-- Student Data -->
                <div class="table-responsive data-design">
                    <table class="table table text-white">
                        <h1>Student Data</h1>
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
                                $select_query="Select * from store";
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
                <!--End Student Data -->
            </div>
            <!-- Container xxl end -->
        </div>
        <!--Main-text-->

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

    <!-- Modal -->
    <div class="modal fade" id="data_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content text-dark">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search Surname</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="searchdetails">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btnmodals btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <script>
    <?php include 'Script/script.js'; ?>
    </script>

    <script src="https://kit.fontawesome.com/6a478048bc.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</body>

</html>