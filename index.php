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
        <div class="login-card animated fadeInDown">
            <h1>Time Table Generator</h1><br>
            <h3><u>College</u></h3>
            <form action="gotoPage1.php" method="post">
                <input type="text" name="college" placeholder="Name Of College" required>
                <input type="text" name="university" placeholder="Name Of University" required>
                <input type="submit" name="submit" class="login login-submit" value="Next ->" target="page1.html">
            </form>
        </div>

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
