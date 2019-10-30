
<html>

<head>
    <title>Time Table</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="styleRoutine.css">
</head>

<body>
    <h1 class="timeTable">Time Table</h1>
    <div class="bigContainer">
        <?php
            require 'redirect.php';
            $one=1;
            $two=2;
            $three=3;
            $four=4;
            $five=5;
            $six=6;
            $seven=7;
            $eight=8;
            $a=array(
                    $mon=array($one,$two,$three,$four,$five,$six,$seven,$eight),                
                    $tue=array($one,$two,$three,$four,$five,$six,$seven,$eight),
                    $wed=array($one,$two,$three,$four,$five,$six,$seven,$eight),
                    $thu=array($one,$two,$three,$four,$five,$six,$seven,$eight),
                    $fri=array($one,$two,$three,$four,$five,$six,$seven,$eight),
                    $sat=array($one,$two,$three,$four,$five,$six,$seven,$eight)

            );
            $subject1 = $_POST['subject1'];
            $subject2 = $_POST['subject2'];
            $subject3 = $_POST['subject3'];
            $subject4 = $_POST['subject4'];
            $subject5 = $_POST['subject5'];
            $subject6 = "Extra";
            
            $teacher1 = $_POST['teacher1'];
            $teacher2 = $_POST['teacher2'];
            $teacher3 = $_POST['teacher3'];
            $teacher4 = $_POST['teacher4'];
            $teacher5 = $_POST['teacher5'];
            $teacher6 = "";

            $lab1 = $_POST['lab1'];
            $lab2 = $_POST['lab2'];
            $lab3 = $_POST['lab3'];
            
            $labteacher1 = $_POST['labteacher1'];
            $labteacher2 = $_POST['labteacher2'];
            $labteacher3 = $_POST['labteacher3'];

            $flag=false;
            $days=array('MON','TUE','WED','THU','FRI','SAT');
            $sub=array('BREAK',$subject1,$subject2,$subject3,$subject4,$subject5,$subject6,$lab1,$lab2,$lab3);
            $teach=array(' ',$teacher1,$teacher2,$teacher3,$teacher4,$teacher5,$teacher6,$labteacher1,$labteacher2,$labteacher3);
            $jx=array(0,1,5);
            
            function init($a)
            {
                for($i=0;$i<6;$i++)   
                {
                    for($j=0;$j<8;$j++)
                    {													
                        if($j==4)
                        {
                            $a[$i][$j]=0;
                        }
                        else
                            $a[$i][$j]=-1;

                    }
                }
                return $a;
            }


            function add_lab($x,$a,$jx)
            {
                $i=mt_rand(0,5);
                $j=$jx[array_rand($jx,1)];
                $count=0;
                while($count<1)
                {
                    if($a[$i][$j]==-1 AND $a[$i][$j+1]==-1 AND $a[$i][$j+2]==-1 )
                    {
                        $a[$i][$j]=$x;
                        $a[$i][$j+1]=$x;
                        $a[$i][$j+2]=$x;
                        $count=1;
                    }
                }	
                return $a;
            }

            function add_sub($x,$a)
            {
                $count=0;
                while($count<4)
                {
                    $i=mt_rand(0,5);
                    $j=mt_rand(0,7);
                    if($a[$i][$j]==-1)
                    {
                        $a[$i][$j]=$x;
                        $count++;
                    }

                }
                return $a;
            }

            $a=init($a);
            if ($flag==false)
            {
                $a=add_lab(7,$a,$jx);
                $a=add_lab(8,$a,$jx);
                $a=add_lab(9,$a,$jx);
                $flag=true;
            }

            if($flag==true)
            {
                $a=add_sub(1,$a);
                $a=add_sub(2,$a);
                $a=add_sub(3,$a);
                $a=add_sub(4,$a);
				$a=add_sub(5,$a);
				$a=add_sub(6,$a);
            }
            echo "<br><table class = 'table animated zoomIn'>
                <tr><th></th>
                    <th>I</th>
                    <th>II</th>
                    <th>III</th>
                    <th>IV</th>
                    <th>BREAK</th>
                    <th>V</th>
                    <th>VI</th>
                    <th>VII</th>
                </tr>";

            for($i=0;$i<6;$i++)   
            {
                echo "<tr><td>$days[$i]</td>";
                for($j=0;$j<8;$j++)
                {
                    if ($a[$i][$j]==-1)
                        echo "<td>Extra</td>";
                    else
                    {
                        if($sub[$a[$i][$j]]=="Extra" or $sub[$a[$i][$j]]=="BREAK")
                            echo "<td>".$sub[$a[$i][$j]]."</td>";
                        else 
                            echo "<td>".$sub[$a[$i][$j]]." (".$teach[$a[$i][$j]].") </td>";


                    }


                }
                echo "</tr>";
            }
            echo "</table>";     
            $dbName = "timetable";
            $dbServer = "localhost";
            $dbUser = "root";
            $dbPassword = "";

            $con = mysqli_connect($dbServer,$dbUser,$dbPassword,$dbName);

            mysqli_select_db($con,$dbName);

            for($i=0;$i<6;$i++)   
            {
                $day=$days[$i];
                
                if($a[$i][0]==-1){
                    $p1='Extra';
                }else{
                    $p1=$sub[$a[$i][0]];
                }

                if($a[$i][1]==-1){
                    $p2='Extra';
                }else{
                    $p2=$sub[$a[$i][1]];
                }

                if($a[$i][2]==-1){
                    $p3='Extra';
                }else{
                    $p3=$sub[$a[$i][2]];
                }

                if($a[$i][3]==-1){
                    $p4='Extra';
                }else{
                    $p4=$sub[$a[$i][3]];
                }

                if($a[$i][4]==-1){
                    $p5='Extra';
                }else{
                    $p5=$sub[$a[$i][4]];
                }

                if($a[$i][5]==-1){
                    $p6='Extra';
                }else{
                    $p6=$sub[$a[$i][5]];
                }

                if($a[$i][6]==-1){
                    $p7='Extra';
                }else{
                    $p7=$sub[$a[$i][6]];
                }

                if($a[$i][7]==-1){
                    $p8='Extra';
                }else{
                    $p8=$sub[$a[$i][7]];
                }
                
                $queryInsert = "INSERT INTO gotopage4(
                                days,
                                p1,
                                p2,
                                p3,
                                p4,
                                p5,
                                p6,
                                p7,
                                p8
                            )
                            VALUES (
                               '$day',
                               '$p1',
                               '$p2',
                               '$p3',
                               '$p4',
                               '$p5',
                               '$p6',
                               '$p7',
                               '$p8'
                            );";
            mysqli_query($con,$queryInsert) or die(mysqli_error($con));
            }
        mysqli_close($con);

            
        ?>
    </div>
    <div id="pdf">
     <input type="button" value="Save as PDF" onClick="window.print()">
    </div>

    <div class="navigation animated fadeInUp">
        <nav class="navClass">
            <ul class="ulClass">
                <a href="index.php">
                    <li class="listItem">Home</li>
                </a>
                <a href="aboutUs.html">
                    <li class="listItem">About Us</li>
                </a>
                <a href="support.html">
                    <li class="listItem">Support Us</li>
                </a>
                <a href="contact.html">
                    <li class="listItem">Contact Us</li>
                </a>
            </ul>
        </nav>
    </div>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>