<?php
    require 'redirect.php';

    $dbName = "timetable";
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPassword = "";

    $con = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);

    mysqli_select_db($con,$dbName);
    
    $branch = $_POST['branch'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $workingdays = $_POST['workingdays'];
    $numberofperiods = $_POST['numberofperiods'];
    $duration = $_POST['duration'];

    if(isset($_POST['submit']))
    {
        $queryInsert = "INSERT INTO gotopage3(
                            branch,
                            year,
                            sem,
                            workingdays,
                            numberofperiods,
                            duration
                        )
                        VALUES (
                           '$branch',
                           	'$year',
                            '$sem',
                            '$workingdays',
                            '$numberofperiods',
                            '$duration'
                        );";
        mysqli_query($con,$queryInsert) or die(mysqli_error($con));
    }
    mysqli_close($con);

    brs();
?>
