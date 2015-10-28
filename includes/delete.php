<?php
mysql_connect("localhost","root","mysql");
mysql_select_db("social_network") or die("Database Error");

$delete_id = $_GET['del'];

$query = "delete from users where user_id='$delete_id'";

if(mysql_query($query))
{
    echo "<script>window.open('../view_user.php?deleted=User has been deleted!','_self')</script>";
}

?>