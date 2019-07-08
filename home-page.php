<?php 
    session_start();

    if(!isset($_SESSION['luser']))
    {
        echo ("Please login again");
        echo "<a href='index.php'>Click Here to Login</a></p>";
    }
    else
    {
        $now=time(); //checking the time when the page starts
        if($now > $_SESSION['expire'])
        {
            session_destroy();
            echo ("Your session is destroyed!");
            header('location: index.php');
        }
    }
?>

<html>
    <head>
        <title>Destroy Session after 1 min</title>
    </head>
    <body>
        Welcome <?php echo $_SESSION['luser']; ?>
        <a href='logout.php'>Log Out</a>
        <p>Your Session will destroy after 1 min and you will be 
            redirected to a new page</p>
        <p>If you wnat to logout before 1 min, click on the logout link</p>

    </body>
</html>
