<?php
    ob_start();
    function redirect()
    {
        if(isset($_POST['submit']))
        {
            $redirect_page = "page1.php";
            header('Location: '.$redirect_page);
        }
    }
    function redirect_btech()
    {
        if(isset($_POST['submit']))
        {
            if($_POST['programme'] == 0)
            {
                echo "Please select a valid option.";
            }
            else if($_POST['programme'] == 1)
            {
                $redirect_page = "btech.php";
                header('Location: '.$redirect_page);
            }
            else if($_POST['programme'] == 2)
            {
                 $redirect_page = "phar.php";
                header('Location: '.$redirect_page);
            }
            else if($_POST['programme'] == 3)
            {
                 $redirect_page = "mca.php";
                header('Location: '.$redirect_page);
            }
            else if($_POST['programme'] == 4)
            {
                 $redirect_page = "poly.php";
                header('Location: '.$redirect_page);
            }
            else if($_POST['programme'] == 5)
            {
                 $redirect_page = "mtech.php";
                header('Location: '.$redirect_page);
            }
        }
    }
function brs()     
{
    if(isset($_POST['submit']))
        {
            if($_POST['branch'] == 0)                  //For CIVIL
            {
                if($_POST['year'] == 0)                
                {
                    if($_POST['sem'] == 0)
                    {
                        //Civil 1-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Civil 1-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 1)
                {
                    if($_POST['sem'] == 0)
                    {
                        //Civil 2-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Civil 2-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 2)
                {
                    if($_POST['sem'] == 0)
                    {
                        //Civil 3-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Civil 3-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 3)
                {
                    if($_POST['sem'] == 0)
                    {
                        //Civil 4-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Civil 4-2....
                        header('Location: subjectSelect.php');
                    }
                }
            }
            else if ($_POST['branch'] == 1)             //For CSE
            {   
                if($_POST['year'] == 0)
                {
                    if($_POST['sem'] == 0)
                    {
                        //CSE 1-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //CSE 1-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 1)
                {
                    if($_POST['sem'] == 0)
                    {
                        //CSE 2-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //CSE 2-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 2)
                {
                    if($_POST['sem'] == 0)
                    {
                        //CSE 3-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //CSE 3-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 3)
                {
                    if($_POST['sem'] == 0)
                    {
                        //CSE 4-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //CSE 4-2....
                        header('Location: subjectSelect.php');
                    }
                }
            }
            else if ($_POST['branch'] == 2)
            {
                if($_POST['year'] == 0)
                {
                    if($_POST['sem'] == 0)
                    {
                        //Mech 1-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Mech 1-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 1)
                {
                    if($_POST['sem'] == 0)
                    {
                        //MEch 2-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //MEch 2-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 2)
                {
                    if($_POST['sem'] == 0)
                    {
                        //MEch 3-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Mech 3-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 3)
                {
                    if($_POST['sem'] == 0)
                    {
                        //Mech 4-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //Mech 4-2....
                        header('Location: subjectSelect.php');
                    }
                }
            }
            else if ($_POST['branch'] == 3)
            {
                if($_POST['year'] == 0)
                {
                    if($_POST['sem'] == 0)
                    {
                        //ECE 1-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //ECE 1-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 1)
                {
                    if($_POST['sem'] == 0)
                    {
                        //ECE 2-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //ECE 2-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 2)
                {
                    if($_POST['sem'] == 0)
                    {
                        //ECE 3-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //ECE 3-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 3)
                {
                    if($_POST['sem'] == 0)
                    {
                        //ECE 4-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //ECE 4-2....
                        header('Location: subjectSelect.php');
                    }
                }
            }
            else if ($_POST['branch'] == 4)
            {
                if($_POST['year'] == 0)
                {
                    if($_POST['sem'] == 0)
                    {
                        //EEE 1-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //EEE 1-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 1)
                {
                    if($_POST['sem'] == 0)
                    {
                        //EEE 2-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //EEE 2-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 2)
                {
                    if($_POST['sem'] == 0)
                    {
                        //EEE 3-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //EEE 3-2....
                        header('Location: subjectSelect.php');
                    }
                }
                if($_POST['year'] == 3)
                {
                    if($_POST['sem'] == 0)
                    {
                        //EEE 4-1....
                        header('Location: subjectSelect.php');
                    }
                    if($_POST['sem'] == 1)
                    {
                        //EEE 4-2....
                        header('Location: subjectSelect.php');
                    }
                }
            }
        }
    }
    ob_end_clean();
?>
