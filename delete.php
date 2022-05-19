<?php

    include 'Connect.php';

    // if(isset($_GET['submit']))
    // {
    //   $idnumber = $_GET['idnumber'];
    //   $choice = $_GET['choice'];
    //   $sql1="select * from `store` where idnumber = '$idnumber'";
    //   $result = mysqli_query($con, $sql1);
    //   $row=mysqli_fetch_assoc($result);
    // }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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

    <link rel="icon" href="img/icon.png" type="image/icon type">

    <script src="https://kit.fontawesome.com/6a478048bc.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->

    <title>Delete Main Page</title>

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
    <section class="home-section">
        <div class="main-text">
            <!--Table-->
            <div class="container-xxl">
                <div class="table-responsive delete-data-design ">
                    <!--Search Box With Button-->
                    <form method="post">
                        <div class="SDbutton">
                            <button name="submit" type="submit"><i class="fa fa-search"></i></button>
                            <input value="" type="text" placeholder="Enter Student Number to Delete" name="idnumber">
                            <!--End Search Box-->
                        </div>
                        <table class="table table text-white text-center">
                            <thead>
                                <tr>
                                    <th scope="col">ID Number</th>
                                    <th scope="col">Surname</th>
                                    <th scope="col">First Name</th>
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
                                if(isset($_POST['submit'])){
                                $searchdelete = $_POST['idnumber'];
                                $sql1="Select * from  `store` where idnumber = '$searchdelete'";
                                $selectresult=mysqli_query($con, $sql1);
                                $i=1;
                                    if($selectresult){
                                        while($row1=mysqli_fetch_assoc($selectresult)){
                                        $id=$row1['id'];
                                        $idnumber1=$row1['idnumber'];
                                        $surname=$row1['surname'];
                                        $firstname=$row1['firstname'];
                                        $occupation=$row1['occupation'];
                                        $gender=$row1['gender'];
                                        $countrycode=$row1['countrycode'];
                                        $areacode=$row1['areacode'];
                                        $mobilenumber=$row1['mobilenumber'];
                                        echo '
                                        <tr>
                                            <th class="align-middle " scope="row">'.$idnumber1.'</th>
                                            <td class="align-middle">'.$surname.'</td>
                                            <td class="align-middle">'.$firstname.'</td>
                                            <td class="align-middle">'.$occupation.'</td>
                                            <td class="align-middle">'.$gender.'</td>
                                            <td class="align-middle">'.$countrycode.'</td>
                                            <td class="align-middle">'.$areacode.'</td>
                                            <td class="align-middle">'.$mobilenumber.'</td>
                                            <td class="align-middle">
                                            <button><a onclick="checker()"
                                            href="deletefunction.php?deleteid='.$id.'" class="button3 ice2 btn-danger"> Delete </a> </button>
                                            </td>
                                        </tr>
                                        ';
                                        $i++;
                                        }
                                    }
                                    else{
                                        die(mysql_error($con));
                                    }                                  
                                }
                                else{
                                    $sql1="Select * from  store";
                                    $selectresult=mysqli_query($con, $sql1);
                                    $i=1;
                                    if($selectresult){
                                        while($row1=mysqli_fetch_assoc($selectresult)){
                                        $id=$row1['id'];
                                        $idnumber1=$row1['idnumber'];
                                        $surname=$row1['surname'];
                                        $firstname=$row1['firstname'];
                                        $occupation=$row1['occupation'];
                                        $gender=$row1['gender'];
                                        $countrycode=$row1['countrycode'];
                                        $areacode=$row1['areacode'];
                                        $mobilenumber=$row1['mobilenumber'];
                                        echo '
                                        <tr>
                                            <th scope="row">'.$idnumber1.'</th>
                                            <td>'.$surname.'</td>
                                            <td>'.$firstname.'</td>
                                            <td>'.$occupation.'</td>
                                            <td>'.$gender.'</td>
                                            <td>'.$countrycode.'</td>
                                            <td>'.$areacode.'</td>
                                            <td>'.$mobilenumber.'</td>
                                            <td>
                                            </td>
                                        </tr>
                                        ';
                                        $i++;
                                        }
                                    }         
                                }
                            ?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <!--End Table-->

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
            </div>
        </footer>
    </section>
    <script>
    function checker() {
        var check = confirm('Are you sure You Want to Delete Data?');

        if (check == false) {
            event.preventDefault();
        }
    }
    </script>

    <script>
    <?php include 'Script/script.js'; ?>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>
    <?php include 'Script/tilt.jquery.min.js'; ?>
    </script>

    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
</body>


</html>