<!DOCTYPE html>
<html>
    <head>
        <title>Wanderlust</title>
        <link rel="stylesheet" href="styles/main.css" media="all"/>
        <link href="js/jquery-ui.css" rel="stylesheet">
        <script src="js/external/jquery/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/js.js"></script>
    </head>
    <body>
        <!-----------------------------------------------------------------Header Start-->
        <header>
            <div class="logo">
                <img src="images/wanderlust_white.png">
            </div>
            <form id="loginform" method="post" action="">
                <strong>Email:</strong>
                <input type="email" name="email" placeholder="Email" required="required"/>
                <strong>Password:</strong>
                <input type="password" name="pass" placeholder="********" required="required"/>
                <button name="login">LOGIN</button>
                <button name="admin">ADMIN</button>
            </form>
            <p class="registerButton"><a href="#" id="dialog-link" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin"></span>Register</a></p>
            
            <?php 
                include("includes/login.php"); 
                include("includes/admin.php");
            ?>
            
        </header>