<?php
    session_start();
    if($_POST['submit1'])
    {
        $u = $_POST['text1'];
        $p = $_POST['pwd'];
        if($u=="sanjeevan@gmail.com" && $p == "san123")
        {
            $_SESSION['luser']=$u;
            $_SESSION['start']=time(); // taking the logging time 
            $_SESSION['expire']=$_SESSION['start']+(1*60); //ending the session after 5 min
            header('location: home-page.php');
        }
        else
        {
            $err="<font color='red'>Invalid User Login</font>";
        }
    }
?>
<html>
    <head>
        <title>Destroy Session after 5 minutes</title>
    </head>
    <body>
        <form name="form1" method="post">
            Username: <input type="text" name="text1" placeholder="sanjeev@gmail.com" required>
            Password: <input type="password" name="pwd" placeholder="san123" required>
            <input type="submit" value="SignIn" name="submit1">
        </form>
    </body>
</html>

