<!DOCTYPE html>
<html>
    <head>
        <title>Wanderlust</title>
        <link rel="stylesheet" href="styles/main.css" media="all"/>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="stylesheet" href="minified/themes/square.min.css" type="text/css" media="all" />
        <script type="text/javascript" src="minified/jquery.sceditor.bbcode.min.js"></script>
        <script type="text/javascript" src="js/emoticons.js"></script>
    </head>
    <body>
        <!-----------------------------------------------------------------Header Start-->
        <header>
            <div class="logo">
                <img src="images/wanderlust_white.png">
            </div>
            <h1 class="welcome">Welcome: <?php echo $_SESSION['admin_email'] ?></h1>
            <button class="userbutton"><a href="admin_home.php">HOME</a></button>
            <button class="userbutton"><a href="view_user.php">VIEW USERS</a></button>
            <button class="userbutton"><a href="index.php?action=logout">LOGOUT</a></button>
            
            <?php include("includes/logout.php"); ?>
        </header>
        