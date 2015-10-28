<section>
            <!--images------------------------------>
            <?php
                //connect to database
                mysql_connect("localhost","root","mysql")or die(mysql_error());
                mysql_select_db("social_network")or die(mysql_error());

                //file properties
                $file = $_FILES['image']['tmp_name'];

                if (!isset($file))
                    echo "Please select an image to post";
                else
                {
                    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                    $image_name = addslashes($_FILES['image']['name']);
                    $image_size = getimagesize($_FILES['image']['tmp_name']);

                    if ($image_size==FALSE)
                        echo"This is not an image";
                    else
                    {
                        if (!$insert = mysql_query("INSERT INTO store VALUES ('','$image_name','$image')"))
                             echo "Problem with uploading the image";
                        else
                        {
                           $lastid = mysql_insert_id();
                            echo "Image has uploaded.<p/> Your post:<p/><img src=template/get.php?id=$lastid>";
                         }
                    }
                }

                $find_images = mysql_query("SELECT * FROM store");

                while($row = mysql_fetch_array($find_images))
                {
                    $id = $row['id'];
                    $image = $row ['image'];

                    echo "<img src=template/get.php?id=$id>";
                }

                ?>
            
              
                <!--comments------------------------------>
                <h1>Comment</h1>
            <?php
                $username="root";
                $password="mysql";
                $database="social_network";
                mysql_connect(localhost,$username,$password);
                @mysql_select_db($database) or die("Database Error");

                $find_comments = mysql_query("SELECT * FROM comments");
                
                while($row = mysql_fetch_assoc($find_comments))
                {
                    $comment_name = $row ['name'];
                    $comment = $row ['comment'];

                    echo "$comment_name - $comment<p>";
                }

                if(isset($_GET['error']))
                {
                    echo"<p>100 Character Limit<p>";
                }
            ?>
            
            <form action = "post_comment.php" method = "POST">
                <input type = "text" name = "name" value= "Your name"><br>
                <textarea name= "comment"rows ="4" cols = "50"></textarea><br>
                <input type= "submit" value="Comment"><br>
            </form>
    
            <form action="home.php" method="post" enctype="multipart/form-data">
                Select Image:<input type="file" name="image">
                <input type="submit" name="upload" value="Upload Now">
            </form>
        </section>
    
        <section>
        </section>

        