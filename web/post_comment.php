<?php
     // Check your database config:
     $username="root";
     $password="mysql";
     $database="social_network";
     mysql_connect(localhost,$username,$password);
     @mysql_select_db($database) or die("Database Error");

$name = $_POST["name"];
$comment= $_POST["comment"];

$comment_length = strlen($comment);

if($comment_length > 100)
{
    header("location: home.php?errpr=1");
}
else
{
    mysql_query("INSERT INTO comments VALUES('','$name','$comment')");
    header("location: home.php");
    
}

   ?>

