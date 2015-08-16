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
        <br>
        <br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab-login" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                            <li role="presentation"><a href="#tab-register" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                          </ul>
                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-login">
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
                            
                            
                            <div role="tabpanel" class="tab-pane" id="tab-register">Register Here
                            
                            </div>
                            
                          </div>
                        </div>                        
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h6 class="text-center"><small>&#169; Copyright 2011&#45;2016 &#124; Piano Pathways &#124; 9270 Siegen Lane #304 &#124; Baton Rouge&#44; LA 70810</small></h6>
            </div>
        </section>
    </body>
</html>