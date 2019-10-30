<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Time Table</title>



    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">



</head>

<body>
    <form action="routine.php" method="post">
        <div class="login-card2 animated fadeInDown">
            <h1>Time Table Generator</h1>
            <h4><u>Enter Your Subjects</u></h4>        
                
            <input type="text" name="subject1" placeholder="Subject 1" required>
            <input type="text" name="subject2" placeholder="Subject 2" required>
            <input type="text" name="subject3" placeholder="Subject 3" required>
            <input type="text" name="subject4" placeholder="Subject 4" required>
            <input type="text" name="subject5" placeholder="Subject 5">
            
             
            <input type="text" name="lab1" placeholder="Lab 1" required>
            <input type="text" name="lab2" placeholder="Lab 2" required>
            <input type="text" name="lab3" placeholder="Lab 3">
            
            <input type="submit" name="submit" class="login login-submit" value="Next ->">
        </div>

        <div class="login-card1 animated fadeInDown">
            <h1>Time Table Generator</h1>
            <h4><u>Enter Your Teachers</u></h4>
                                 
            <input type="text" name="teacher1" placeholder="Teacher 1" required>
            <input type="text" name="teacher2" placeholder="Teacher 2" required>
            <input type="text" name="teacher3" placeholder="Teacher 3" required>
            <input type="text" name="teacher4" placeholder="Teacher 4" required>
            <input type="text" name="teacher5" placeholder="Teacher 5">
             
            <input type="text" name="labteacher1" placeholder="Lab Teacher 1" required>
            <input type="text" name="labteacher2" placeholder="Lab Teacher 2" required>
            <input type="text" name="labteacher3" placeholder="Lab Teacher 3">    
        </div>
    </form>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <div id="clear"></div>
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
</body>

</html>