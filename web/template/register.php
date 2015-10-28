        <section>
            <div id="dialog" title="Create a new account">
                <form action="" method="post">
                    <h2>Register Today!</h2>
                    <fieldset>
                        <label for="name">Name:</label>
                        <input type="text" id="name" class="text ui-widget-content ui-corner-all" 
                               name="u_name" placeholder="Enter your name" required="required" >
                        <label for="email">Email:</label>
                        <input type="email" id="email" class="text ui-widget-content ui-corner-all" 
                               name="u_email" placeholder="Enter your email" required="required">
                        <label for="password">Password:</label>
                        <input type="password" id="password" class="text ui-widget-content ui-corner-all" 
                               name="u_pass" placeholder="Enter your password" required="required">
                        <label for="country">Country:</label>
                        <select name="u_country" required="required">
                            <option>Select a country</option>
                            <option>South Africa</option>
                            <option>United States</option>
                            <option>United Kingdom</option>
                            <option>Australia</option>
                        </select>
                        <label for="gender">Gender:</label>
                        <select name="u_gender" required="required">
                            <option>Select a Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <label for="birthday">Birthday:</label>
                        <input type="date" name="u_birthday" required="required"/>
                        <form action="upload_image.php" method="post" enctype="multipart/form-data">
                        Select Image:<input type="file" name="u_img">
                        </form>
                        <button name="sign_up">Sign Up</button>
                    </fieldset>
                </form>
            </div>
            <?php include("includes/user_insert.php"); ?>
        </section>