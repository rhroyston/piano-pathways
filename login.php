<?php include 'includes/session.php';?>
<!doctype html>
<html lang="en">
    <?php 
        $title = 'login';
        include 'includes/head.php';
        
        // capture url of original page and store it in variable called original-page
        if ($_SERVER['HTTP_REFERER'] != "http://thepianopathway-rhroyston.rhcloud.com/login")
        {
            $_SESSION["original-page"] = $_SERVER['HTTP_REFERER'];
        }
        else{
            $_SESSION["original-page"] = "http://thepianopathway-rhroyston.rhcloud.com/";
        }
    ?>
    <body>
        <?php include 'includes/header-min.php';?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    
                    <div class="col-md-4">
                        <h2>Login</h2>
                        <form action="includes/login_submit" method="post">
                            <span>
                                <label for="phpro_username">Username</label>
                                <input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />
                                <label for="phpro_password">Password</label>
                                <input type="text" id="phpro_password" name="phpro_password" value="" maxlength="20" />
                            </span>
                            <p>
                                <input type="submit" value="Login" />
                            </p>
                        </form>
                        <aside>
                            <?php
                                if (isset($_SESSION["message"]))
                                {
                                $message = $_SESSION["message"];
                                echo "<p class='red'>$message</p>";
                                }
                            ?>
                            <p>This is a private computer system&#46;  Unauthorized access is scrictly prohibited&#46;</p>
                        </aside>
                    </div>
                    
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includes/footer.php';?>
        <?php include 'includes/resources.php';?>
    </body>
</html>