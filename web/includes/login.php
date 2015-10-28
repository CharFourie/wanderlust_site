<?php
session_start();
include("includes/connection.php"); 

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,md5($_POST['pass']));
    
    $get_user = "select * from users where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con,$get_user);
    $check = mysqli_num_rows($run_user);
    
    if($check==1)
    {
        $row = $run_user->fetch_array(MYSQLI_ASSOC);
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['user_name']=$row['user_name'];
        $_SESSION['user_email']=$row['user_email'];
        $_SESSION['user_gender']=$row['user_gender'];
        $_SESSION['user_country']=$row['user_country'];
        $_SESSION['user_image']=$row['user_image'];
        
        echo "<script>window.open('home.php','_self')</script>";
    }
            
    else
    {
        echo "<h3 class='error'>Email or Password incorrect</h3>";
    }
    
    
}

?>