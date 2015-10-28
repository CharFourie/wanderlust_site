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
            <h1 class="welcome">Welcome <?php echo $_SESSION['user_name'] ?>!</h1>
            <h1 class="welcome">Your Profile Info:</h1>
            <h1 class="profile">Name: <?php echo $_SESSION['user_name'] ?></h1>
            <h1 class="profile">Email: <?php echo $_SESSION['user_email'] ?></h1>
            <h1 class="profile">Gender: <?php echo $_SESSION['user_gender'] ?></h1>
            <h1 class="profile">Country: <?php echo $_SESSION['user_country'] ?></h1>
            <?php echo "<img src=template/get.php?id=".$_SESSION['user_id'].">";?>
        </header>