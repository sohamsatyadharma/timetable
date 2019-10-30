<?php
    require 'redirect.php';
    
    $dbName = "timetable";
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";

    $con = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);

    mysqli_select_db($con,$dbName);
    
    $collegeName = $_POST['college'];
    $universityName = $_POST['university'];
    if(isset($_POST['submit']))
    {
        $queryInsert = "INSERT INTO gotopage1(
                            college,
                            university
                        )
                        VALUES (
                           '$collegeName',
                           '$universityName'
                        );";
        mysqli_query($con,$queryInsert) or die(mysqli_error($con));
    }
    mysqli_close($con);
    
    redirect();
?>
