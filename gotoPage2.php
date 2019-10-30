<?php
    require 'redirect.php';
    
    $dbName = "timetable";
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";

    $con = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);
    mysqli_select_db($con,$dbName);
    
    $programme = $_POST['programme']; 
    if($programme == 1){
        $programme = "Bachelor In Technology";
    }elseif($programme == 2){
        $programme = "Bachelor In Pharmacy";
    }elseif($programme == 3){
        $programme = "MCA";
    }elseif($programme == 4){
        $programme = "PolyTechnic";
    }elseif($programme == 5){
        $programme = "Master In Technology";
    }
    if(isset($_POST['submit']))
    {
        $queryInsert = "INSERT INTO gotopage2(
                            programme
                        )
                        VALUES (
                          '$programme'
                        );";
        mysqli_query($con,$queryInsert) or die(mysqli_error($con));
    }
    mysqli_close($con);
    
    redirect_btech();
?>
