<?php include 'includes/session.php';?>
<!doctype html>
<html lang="en">
    <?php 
        $title = 'Login';
        // if we have a session message variable then capture it then clear the session variable
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
        }
        unset ($_SESSION["message"]);
        $registerpane = $_SESSION["registerpane"];
        // capture url of original page and store it in variable called original-page
        if ($_SERVER['HTTP_REFERER'] != "http://thepianopathway-rhroyston.rhcloud.com/login")
        {
            $_SESSION["original-page"] = $_SERVER['HTTP_REFERER'];
        }
        else{
            $_SESSION["original-page"] = "http://thepianopathway-rhroyston.rhcloud.com/";
        }
        include 'includes/head.php';
    ?>
    <body>
        <?php include 'includes/header-min.php';
        ?>
        
        <br>
        <br>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="tabbable">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-login" aria-controls="home" role="tab" data-toggle="tab">Login</a></li>
                                <li role="presentation"><a href="#tab-register" aria-controls="profile" role="tab" data-toggle="tab">Register</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- Login Pane -->
                                <?php include 'includes/login_pane.php';?>
                                <!-- Register Pane -->
                                <?php include 'includes/register_pane.php';?>
                            </div>
                        </div>                        
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