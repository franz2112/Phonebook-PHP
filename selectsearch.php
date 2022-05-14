<?php
   
    include 'Connect.php';
    $surname = "";
    

    if(isset($_POST['submit']))
    {
      $surname = $_POST['surname'];
      $choice = $_POST['choice'];
      $sql1="select * from `store` where surname = $surname";
      $result = mysqli_query($con, $sql1);
      $row=mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>View Search</title>

    <link rel="stylesheet" href="css/CSS.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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

</head>

<body style="background-color: #ffe2c9;">

    <!--<video autoplay muted loop class="myVideo">
        <source src="bg1.mp4" type="video/mp4">
    </video>-->
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
            <!-- <img src="https://html.sammy-codes.com/images/small-profile.jpeg" class="main-page"> -->
            <div class="container-xxl">
                <div class="search-bg-meaning">
                    <h1>Search by Surname</h1>
                    <h3>Whom are you looking for?</h3>
                    <div class="search">
                        <i style="color: black;" class="fa fa-search"></i>
                        <input type="text" class="form-control" placeholder="Enter Surname">
                        <button name="submit" type="submit">Search</button>
                    </div>
                    <div class="search-menu-1">
                        <div class="field">
                            <a href="searchsurname.php" class="button ice" role="button" name="submit" type="submit">Search</a>
                        </div>
                    </div>
                </div>



                <!--Table
            <div class="container pt-5">
                <div class="table-responsive delete-data-design ">
                    <table class="table table text-white">
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
                            </tr>
                        </thead>
                        <tbody>

            <?php
              if(isset($_POST['submit'])){
              if($row){

              $sql1="Select * from  `store` where surname = $surname";
              $selectresult=mysqli_query($con, $sql1);
              $i=1;
              if($selectresult){
                while($row1=mysqli_fetch_assoc($selectresult)){
                  $idnumber1=$row1['idnumber'];
                  $surname=$row1['surname'];
                  $firstname=$row1['firstname'];
                  $occupation=$row1['occupation'];
                  $gender=$row1['gender'];
                  $countrycode=$row1['countrycode'];
                  $areacode=$row1['areacode'];
                  $mobilenumber=$row1['mobilenumber'];
                  echo '
                  <tr class= "tabledelete">
                    <th scope="row">'.$idnumber1.'</th>
                    <td>'.$surname.'</td>
                    <td>'.$firstname.'</td>
                    <td>'.$occupation.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$countrycode.'</td>
                    <td>'.$areacode.'</td>
                    <td>'.$mobilenumber.'</td>
                    <td>
                  </tr>
                  ';
                  $i++;
                }
              }
              else{
                die(mysql_error($con));
              }
            }
            else {
                ?>
                   <div class="errordelete">
                      <i class="fa-solid fa-triangle-exclamation"><i> </i><label>DATA DOES NOT EXIST</label></i>
                    </div>
                 <?php
            }
          }
            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            End Table-->









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
                 
                <div class="table-responsive data-design" >
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
                    </div>

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

                    </table>
                </div>
            </div>
        </div>
        <!--End Display-->

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
    <?php?><script>
    <?php include 'Script/script.js'; ?>
    </script>
</body>

</html>