<?php  
//select.php  
include 'Connect.php';

if(isset($_POST["employee_id"])){
    $surname = $_POST["employee_id"];
    $output = '';
    $select_query = "select * from store WHERE surename = $surname ";
    $result=mysqli_query($con,$select_query);
    
    // $query = "SELECT * FROM employee WHERE id = '".$_POST["employee_id"]."'";
    // $result = mysqli_query($connect, $query);
    $output .= '<div class="container>';
    while($row = mysqli_fetch_array($result)){
     $output .= '
     <p>
        '.$row["surname"].',  '.$row["firstname"].',
        with student number  '.$row["idnumber"].', is a
        '.$row["occupation"].'. His phone number is  '.$row["countrycode"].'
        -  '.$row["mobilenumber"].'
        </p>
     ';
    }
    $output .= '</div>';
    echo $output;
}
?>