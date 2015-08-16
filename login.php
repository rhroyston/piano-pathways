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
                            <!-- Login Pane -->
                            <div role="tabpanel" class="tab-pane active" id="tab-login">
                                <h2>Login</h2>
                                <form action="includes/login_submit" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="phpro_username" name="phpro_username" value="" placeholder="Username" maxlength="20" />
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="text" class="form-control" id="phpro_password" name="phpro_password" value="" placeholder="Password" maxlength="20" />
                                    </div>
                                    <br>  
                                    <button type="submit" class="btn btn-default btn-sm pull-right">Login</button>
                                </form>
                                <aside>
                                    <?php
                                        if (isset($_SESSION["message"]))
                                        {
                                        $message = $_SESSION["message"];
                                        echo "<p class='red'>$message</p>";
                                        }
                                    ?>
                                </aside>                            
                            </div>
                            <!-- Register Pane -->
                            <div role="tabpanel" class="tab-pane" id="tab-register">
                                
                                <h2>Register</h2>
                                <form action="includes/adduser_submit" method="post">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="phpro_username" name="phpro_username" value="" placeholder="Username" maxlength="20" />
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="text" class="form-control" id="phpro_password" name="phpro_password" value="" placeholder="Password" maxlength="20" />
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" id="phpro_email" name="phpro_email" value="" placeholder="email address" maxlength="40" />
                                    </div>                                    
                                    <br>
                                    <div class="input-group navbar-form">
                                        
                                             
                                            <select class="selectpicker" title='Choose one of the following...' data-width="auto">
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                            </select>
                                        
                                        <div class="form-group">
                                            
                                            <select class="selectpicker" title='Month'>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                                <option value="five">Five</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            
                                            <select class="selectpicker" title='Year'>
                                                <option value="one">One</option>
                                                <option value="two">Two</option>
                                                <option value="three">Three</option>
                                                <option value="four">Four</option>
                                                <option value="five">Five</option>
                                            </select>
                                        </div>
                                    </div>                                    
                                    <br>
                                    <div class="input-group">
                                    </div>                                    
                                    <br>
                                    <div class="input-group">
                                    </div>                                    
                                    <br>
                                    <div class="input-group">
                                    </div>                                    
                                    <br>
                                    <div class="input-group">
                                    </div>                                    
                                    <br>

                                    
                                    <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                                    <input type="submit" value="Add" />
                                </form>
                                <aside>
                                    <?php
                                        if (isset($_SESSION["message"]))
                                        {
                                        $message = $_SESSION["message"];
                                        echo "<p class='red'>$message</p>";
                                        }
                                    ?>
                                </aside>                                
                                
                                
                                
                            
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