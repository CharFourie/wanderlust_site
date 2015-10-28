<?php
session_start();
include("includes/connection.php"); 

if(isset($_POST['admin']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,($_POST['pass']));
    
    $get_user = "select * from admin where admin_email='$email' AND admin_pass='$pass'";
    $run_user = mysqli_query($con,$get_user);
    $check = mysqli_num_rows($run_user);
    
    if($check==1)
    {
        $_SESSION['admin_email']=$email;
        echo "<script>window.open('admin_home.php','_self')</script>";
    }
            
    else
    {
        echo "<h3 class='error'>Admin Email or Password incorrect</h3>";
    }
}

?>