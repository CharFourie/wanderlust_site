<?php 
session_start();
include("template/header_admin.php");
?>

<section>
    <h1>ALL USERS</h1>
    <table border="1">
        <tr>
            <th>User id:</th>
            <th>User Name:</th>
            <th>User Email:</th>
            <th>Delete User</th>
        </tr>
        <tr>
            <?php
                mysql_connect("localhost","root","mysql");
                mysql_select_db("social_network") or die("Database Error");

                $query = "select * from users";

                $run = mysql_query($query);

                while ($row = mysql_fetch_array($run))
                {
                    $user_id = $row['user_id'];
                    $user_name = $row['user_name'];
                    $user_email = $row['user_email'];
            ?>
            
            <td><?php echo $user_id; ?></td>
            <td><?php echo $user_name; ?></td>
            <td><?php echo $user_email; ?></td>
            <td><a href="includes/delete.php?del=<?php echo $user_id; ?>">Delete</a></td>
            
            </tr>
            <?php } ?>
    </table>
    <font color='red'>
        <?php echo @$_GET['deleted']; ?>
    </font>
</section>

<?php 
include("template/footer.php");
?>