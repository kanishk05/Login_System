<?php

session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
   <title>Home Page</title>
   <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class = "container">
        <a class = "float-right" href="logout.php"> LOGOUT </a>
        <h1>Welcome <?php echo $_SESSION['username'];?></h1>
    </div>
</body>
</html>