<?php
  include('connect.php');
  if (isset($_POST['submit'])) 
  {
    // code...
    $idnumber=$_POST['idnumber'];
    $surname=$_POST['surname'];
    $firstname=$_POST['firstname'];
    $occupation=$_POST['occupation'];
    $gender=$_POST['gender'];
    $countrycode=$_POST['countrycode'];
    $areacode=$_POST['areacode'];
    $mobilenumber=$_POST['mobilenumber'];
    $sql= "Select * From `store` Where idnumber= '$idnumber' or surname= '$surname'";
    $selectresult=mysqli_query($con, $sql);
    $number=mysqli_num_rows($selectresult);
    if ($number>0)
    {
      echo"<script>alert('idnumber already exist')</script>";
    }
    else
    {
      $sql = "insert into `store` (idnumber, surname, firstname, occupation, gender, countrycode, areacode, mobilenumber) values ('$idnumber', '$surname', '$firstname', '$occupation', '$gender', '$countrycode', '$areacode', '$mobilenumber')";
      $result = mysqli_query($con, $sql);
      if($result)
      {
        echo "<script>alert('Data Inserted to Phonebook')</script>";
        echo "<script> window.open('store.php', '_self')</script>";
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

    <title>Store Main Page</title>
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

    <!-- content -->
    <section class="home-section">

        <!-- main page -->
        <div class="store-input">
            <div class="container-xxl">
                <div class="main-menu-bg">
                    <div class="form-contain">
                        <h1>ADD STUDENT</h1>
                        <div class="map js-tilt-reverse" data-tilt>
                            <img src="img/map5.png" alt="img">
                        </div>
                    </div>
                    <form method="post" class="form-details row g-3">
                        <div class="col-md-12">
                            <label class="form-label"> Student Number </label>
                            <input type="varchar" required="required" class="text-area"
                                placeholder="Enter Student Number" name="idnumber" maxlength="8">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> Surname </label><br>
                            <input type="varchar" required="required" class="text-area" placeholder="Enter Surname"
                                name="surname">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Firstname</label><br>
                            <input type="varchar" required="required" class="text-area" placeholder="Enter First Name"
                                name="firstname">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label"> Occupation </label><br>
                            <input type="varchar" required="required" class="text-area" placeholder="Enter Occupation"
                                name="occupation">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Gender</label><br>
                            <input type="radio" id="html" name="gender" value="male">
                            <label for="html">Male</label> &nbsp
                            <input type="radio" id="css" name="gender" value="female">
                            <label for="css">Female</label>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"> Country Code</label><br>
                            <select type="dropdown" required="required" class="text-area" name="countrycode">
                                <option selected>-Select Country Code-</option>
                                <option value="60">Malaysia - 60</option>
                                <option value="62">Indonesia - 62</option>
                                <option value="63">Philippines - 63</option>
                                <option value="65">Singapore - 65</option>
                                <option value="66">Thailand - 66</option>
                                <option value="84">Vietnam - 84</option>
                                <option value="673">Brunei Darussalam - 673</option>
                                <option value="855">Cambodia - 855</option>
                                <option value="856">Lao - 856</option>
                                <option value="95">Myanmar - 95</option>
                                <option value="670">Timor Leste - 670</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Area Code </label> <br>
                            <input type="int" required="required" class="text-area" placeholder="Enter Area Code"
                                name="areacode">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label"> Mobile number </label>
                            <input type="varchar" required="required" class="text-area" placeholder="Enter Mobile Number (Avoid using Special Characters)"
                                name="mobilenumber" maxlength="11">
                        </div>
                        <br>
                        <div class="search-menu-submit">
                            <!-- <a href="searchcountry.php" class="button ice" role="button">Search</a> -->
                            <button name="submit" type="submit" class="button ice btn-success"
                                role="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="container">
               
            </div> -->
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
    <?php?><script>
    <?php include 'Script/script.js'; ?>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <?php?><script>
    <?php include 'Script/tilt.jquery.min.js'; ?>
    </script>
    <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
    </script>
</body>

</html>