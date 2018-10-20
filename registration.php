<?php
    session_start();
    header('location:login.php');
    
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
    
    $s = " select * from usertable where name = '$name'";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if (mysqli_query($con, $s)) 
    {
        if($num == 1)
        {
            echo " Username Already Taken ";
        }
        else
        {
            $reg = "insert into usertable(name, password) values ('$name' , '$pass')";
            mysqli_query($con, $reg);
            echo " Registration Sucessful";
        }
    }
    else
    {
        echo "Error: " . $s . "<br>" . mysqli_error($con);
    }
}
?>