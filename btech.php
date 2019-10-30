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
        <h3><u>Moving Further</u></h3>
        <h4>Select Your Branch</h4>
        <form action="gotopage3.php" method="post">
            <select name="branch" id="programme">
                <option value="Civil">Civil</option>
                <option value="CSE">CSE</option>
                <option value="Mechanical">Mechanical</option>
                <option value="ECE">ECE</option>
                <option value="EEE">EEE</option>
            </select>
            <h4> Year</h4>
            <select name="year">
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
            </select><br>
            <h4>Semester</h4>
            <select name="sem">
                <option value="1st semester">1st semester</option>
                <option value="2nd semester">2nd semester</option>
				
            </select><br>
			<h4> Number of working days</h4>
            <select name="workingdays">
                <option value="6">6</option>
            </select><br>
			<h4>Number of periods</h4>
            <select name="numberofperiods">
                <option value="7">7</option>
            </select><br>
			<h4>Duration of a period in minutes</h4>
            <select name="duration">
                <option value="30">30</option>
                <option value="45">45</option>
                <option value="55">55</option>
                <option value="60">60</option>
            </select><br>
            <input type="submit" name="submit" class="login login-submit" value="Next ->">

        </form>


        <!--
        <div class="login-help">
            <a href="#">Trouble in choosing?</a>
        </div>
    -->
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

</body>


</html>