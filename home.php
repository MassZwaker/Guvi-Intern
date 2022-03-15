<?php

session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

?>

<html>
    <head>
        <title> Home Page </title>
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="/css/style.css">

        <body> 
            
            <div class = "container">
            <a href="logout.php"> Logout </a> 
             <h3> Welcome <?php echo $_SESSION['username']; ?>  </h3>
</div>

        </body>

    </head>
</html>        