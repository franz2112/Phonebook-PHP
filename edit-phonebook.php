<?php
  include('Connect.php');

  //display data
  $id=$_GET['updateid'];
  $sql="select * from `store` where id=$id";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);

  $idnumber       = $row['idnumber'];
  $surname        = $row['surname'];
  $firstname      = $row['firstname'];
  $occupation     = $row['occupation'];
  $gender         = $row['gender'];
  $countrycode    = $row['countrycode'];
  $areacode       = $row['areacode'];
  $mobilenumber   = $row['mobilenumber'];

  //declare variables
  if (isset($_POST['submit'])) {
  $idnumber       = $_POST['idnumber'];
  $surname        = $_POST['surname'];
  $firstname      = $_POST['firstname'];
  $occupation     = $_POST['occupation'];
  $gender         = $_POST['gender'];
  $countrycode    = $_POST['countrycode'];
  $areacode       = $_POST['areacode'];
  $mobilenumber   = $_POST['mobilenumber'];


    //to update the data
    $sql = "update `store` set idnumber='$idnumber', surname='$surname', firstname='$firstname', occupation='$occupation', gender='$gender' ,countrycode='$countrycode', areacode='$areacode', mobilenumber='$mobilenumber' where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){
      //echo "updated inserted successfully";
      header('location:edit.php');
    }else{
      die(mysqli_error($con));
    }
  }


?>


<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
      </script>

  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



  <title>Edit Data</title>
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
    <section class="contact">
    <div class="container py-5">
      <div class="row">

              <div class="form py-3">
                <div class="form-row my-4">
                  <div class="col-lg-6">
                    <label>Student Number</label>
                    <input type="text" required="required" class="effect-1" placeholder="Enter Student Number" name="idnumber" 
                    value="<?php echo $idnumber;?>">
                    <span class="Focus-border"></span>
                  </div>
                  <div class="col-lg-6">
                    <label>Surname</label>
                    <input type="text" required="required" class="effect-1" placeholder="Enter Surname" name="surname"
                    value="<?php echo $surname;?>">
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-lg-6">
                    <label>First Name</label>
                    <input type="text" required="required" class="effect-1" placeholder="Enter First Name" name="firstname" 
                    value="<?php echo $firstname;?>">
                    <span class="Focus-border"></span>
                  </div>
                  <div class="col-lg-6">
                    <label>Occupation</label>
                    <input type="text" required="required" class="effect-1" placeholder="Enter Occupation" name="occupation" 
                    value="<?php echo $occupation;?>">
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row pt-5">
                  <div class="col-lg-6 pl-5">

                    <div class="form-group">
                        <select type="dropdown" id="set_gender" required="required" class="text-area3" name="gender">
                              <option value="male" >Male</option>
                              <option value="female" >Female</option>
                        </select>
                    </div>
                    <span class="Focus-border"></span>
                  </div>
                  <div class="col-lg-6">
                
                    <div class="form-group">
                        <select type="dropdown" id="set_country" required="required" class="text-area3" name="countrycode">
                              <option value="60" >Malaysia - 60</option>
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
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row pt-2">
                  <div class="col-lg-6">
                    <label>Area Code</label>
                    <input type="text" required="required" class="effect-1" placeholder="Enter Area Code" name="areacode" 
                    value="<?php echo $areacode;?>">
                    <span class="Focus-border"></span>
                  </div>
                  <div class="col-lg-6">
                    <label>Mobile</label>
                    <input type="text" required="required" class="effect-1" placeholder="Enter Mobile" name="mobilenumber" maxlength="15"
                    value="<?php echo $mobilenumber;?>">
                    <span class="Focus-border"></span>
                  </div>
                </div>
                <div class="form-row pt-4 mx-auto">
                  <div class="col-lg-6">
                  </div>
                  <div class="offset-2 col-lg-4 pt-2">
                    <button type="submit" class="btn1" name="submit" >Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
  </form>
  <script> 

    $('#set_country').val("<?php echo $countrycode; ?>").change();
    $('#set_gender').val("<?php echo $gender; ?>").change(); 

  </script>

  </body>
  </html>