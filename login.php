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
                                <br>
                                <form action="includes/adduser_submit" method="post">
                                    <div class="input-group col-lg-8">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="phpro_username" name="phpro_username" value="" placeholder="Enter A Username" maxlength="20" />
                                    </div>
                                    <br>
                                    <div class="input-group col-lg-8">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="text" class="form-control" id="phpro_password" name="phpro_password" value="" placeholder="Enter A Password" maxlength="20" />
                                    </div>
                                    <br>
                                    <div class="input-group col-lg-8">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" id="phpro_email" name="phpro_email" value="" placeholder="Enter Your Email Address" maxlength="40" />
                                    </div>                                    
                                    <br>
                                    <div class="input-group col-lg-8">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" class="form-control" id="phpro_phone" name="phpro_phone" placeholder="Telephone Number">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Birthday</label>
                                            <select class="form-control form-control-inline">
                                                <?php include 'includes/day.php';?>
                                            </select>
                                            <select class="form-control form-control-inline">
                                                <?php include 'includes/month.php';?>
                                            </select>
                                            <select class="form-control form-control-inline">
                                                <?php include 'includes/year.php';?>
                                            </select>
                                    </div>
                                    
<div class="col-xs-2">
  <label for="ex1">col-xs-2</label>
  <input class="form-control" id="ex1" type="text">
</div>
<div class="col-xs-3">
    <label>Birthday</label>
                                            <select class="form-control form-control-inline">
                                                <?php include 'includes/month.php';?>
                                            </select>
</div>
<div class="col-xs-4">
  <label for="ex3">col-xs-4</label>
  <input class="form-control" id="ex3" type="text">
</div>                                    
                                    
                                    
                                    
                                    
                                    
                                    <label>Grade</label>
                                    <div class="form-group">
                                        <select class="form-control form-control-inline">
                                            <?php include 'includes/grade.php';?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="street">Stree Address</label>
                                        <input type="text" class="form-control" id="street" placeholder="Street Address">
                                    </div>
                                    <div class="form-horizontal">
                                        <div class="form-group col-lg-6">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="City">
                                        </div>
                                        <div class="form-group col-lg-1"></div>
                                        <div class="form-group col-lg-4">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state" placeholder="State">
                                        </div>
                                        <div class="form-group col-lg-1"></div>
                                        <div class="form-group col-lg-2">
                                            <label for="zip">Zip</label>
                                            <input type="number" class="form-control" id="zip" placeholder="Zip">
                                        </div>
                                    </div>

                                    <label for="street">Lesson Option</label>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Private 30">Private Lesson &#40;30-minutes&#41;</label>
                                    </div>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Private 45">Private Lesson &#40;45-minutes&#41;</label>
                                    </div>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Partner">Partner Lesson</label>
                                    </div>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Childrens Group">Childrens Group Class</label>
                                    </div>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Adult Leisure">Adult Leisure Class</label>
                                    </div>
                                    
                                    
                                    <label for="street">If registering for partner lessons&#44; please choose from the following&#58;</label>
                                    <div class="radio">
                                      <label><input type="radio" name="partner">I have a friend that I would like to take lessons with.</label>
                                    </div>
                                    <div class="radio">
                                      <label><input type="radio" name="partner-placeme">Please place me with someone at Piano Pathways to take partner lessons.</label>
                                    </div>
                                 
                                    <label for="street">Online Lessons</label>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Online Lessons">I am registering for online lessons.</label>
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="lesson-choice-1">Lesson Preference Day and Time&#58; 1st choice</label>
                                      <input type="text" class="form-control" id="lesson-choice-1">
                                    </div>
                                    <div class="form-group">
                                      <label for="lesson-choice-2">Lesson Preference Day and Time&#58; 2nd choice</label>
                                      <input type="text" class="form-control" id="lesson-choice-2">
                                    </div>
                                    <div class="form-group">
                                      <label for="lesson-choice-3">Lesson Preference Day and Time&#58; 3rd choice</label>
                                      <input type="text" class="form-control" id="lesson-choice-3">
                                    </div>
                        
                                    <label>Choose a Payment Plan</label>
                                    <div class="form-group">
                                        <select class="form-control form-control-inline">
                                            <option value="">Choose One</option>
                                            <option value="Senior in College">1 Payment of Semester Tuition</option>
                                            <option value="Junior in College">2 Payments of Semester Tuition</option>
                                            <option value="Junior in College">Monthly Payments of Semester Tuition</option>
                                        </select>
                                    </div>                        
                        
                                    <div class="form-group">
                                      <label for="prior-study">Prior Music Study and Teacher&#58;</label>
                                      <textarea class="form-control" rows="5" id="prior-study"></textarea>
                                    </div>                        
                        
                                    <label for="street">Policy Agreement</label>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Studio Agreement">Studio Policy Agreement&#58; I have read the Studio Policy and agree to all terms and conditions outlined&#44; including lesson scheduling&#44; make&#45;up lessons&#44; owning a piano&#44; and abiding by parent and student expectations. By submitting this registration form&#44; I understand that I have committed to lessons in the current semester in Piano Pathways&#44; LLC.</label>
                                    </div>                        
                        
                                    <label for="street">Tuition Agreement</label>
                                    <div class="checkbox">
                                      <label><input type="checkbox" value="Tuition Agreement">Tuition Agreement&#58; I have read the tuition and payment information and agree to remit tuition due for the entire semester&#44; even if I withdraw from lessons before the conclusion of the current semester.</label>
                                    </div>
                                    
                                    <br>
                                    <div class="form-horizontal">
                                        <div class="input-group pull-right">
                                            <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                                            <input type="submit" class="btn btn-primary" value="Submit" />
                                        </div> 
                                    </div>
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