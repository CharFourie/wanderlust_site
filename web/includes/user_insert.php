<?php
include("includes/connection.php"); 

if(isset($_POST['sign_up']))
    {
        $img = mysqli_real_escape_string($con,$_POST['u_img']);
        $name = mysqli_real_escape_string($con,$_POST['u_name']);
        $pass = mysqli_real_escape_string($con,$_POST['u_pass']);
        $email = mysqli_real_escape_string($con,$_POST['u_email']);
        $country = mysqli_real_escape_string($con,$_POST['u_country']);
        $gender = mysqli_real_escape_string($con,$_POST['u_gender']);
        $b_day = mysqli_real_escape_string($con,$_POST['u_birthday']);
        $status = "unverified";
        $posts = "No";
            
        $get_email = "select * from users where user_email='$email'";
        $run_email = mysqli_query($con,$get_email);
        $check = mysqli_num_rows($run_email);
            
        if(strlen($pass)<8)
        {
            echo "<h3 class='error'>Password should be minimum 8 characters, please try again.</h3>";
            exit();
        }
            
        if($check==1)
        {
            echo "<h3 class='error'>Email is already registered, please use another and try again.</h3>";
            exit();
        }
            
        else
        {
            $passwordmd5 = md5($pass);
            $insert = "insert into users (user_name, 
            user_pass,user_email,user_country,user_gender,user_b_day,user_image,register_date,last_login,status,posts) 
            values ('$name','$passwordmd5','$email','$country','$gender','$b_day','$img',NOW(),NOW(),'$status','$posts')";
                
            $run_insert = mysqli_query($con,$insert);
                
            if($run_insert)
            {
                $_SESSION['user_email']=$email;
                echo "<script>window.open('home.php','_self')</script>";
            }
        }
    }

?>