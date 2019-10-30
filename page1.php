<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Time Table</title>
    <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">
</head>

<body class="animated fadeInRight">

    <div class="login-card">
        <h1>Time Table Generator</h1><br>
        <h3><u>Programme</u></h3>
        <form action="gotoPage2.php" method="post">
            <select name="programme" id="programme">
                <option value="0">Select Your Programe</option>
                <option value="1">Bachelor In Technology</option>
            </select>
            <br><br>
            <input type="submit" name="submit" class="login login-submit" value="Next ->">

        </form>

        <div class="login-help">
            <a href="#">Trouble in choosing?</a>
        </div>
    </div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

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
