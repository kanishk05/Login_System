<?php
    session_start();
    
    $con = mysqli_connect('localhost','root','','userregistration');
    mysqli_select_db($con, 'userregistration');
   
    // Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    $name = $_POST['user'];
    $pass = $_POST['password'];
    
    $s = " select * from usertable where name = '$name' && password = '$pass'";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if (mysqli_query($con, $s)) 
    {
        if($num == 1)
        {
            $_SESSION['username'] = $name;
           header('location:home.php');
        }
        else
        {
            header('location:login.php');
        }
    }
    else
    {
        echo "Error: " . $s . "<br>" . mysqli_error($con);
    }
}
?>