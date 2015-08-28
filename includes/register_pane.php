<div role="tabpanel" class="tab-pane" id="tab-register">
                                    <h2>Register</h2>
                                    <br>
                                    <?php
                                        // If we have a message then display it and then kill it  
                                        if (strpos($message,'Success') !== false) {
                                            echo "<div class='alert alert-success alert-dismissible alert-auto'><a class='close' data-dismiss='alert'><i class='fa fa-times'></i></a><strong><i class='fa fa-check'></i> $message</strong></div>";
                                        }
                                        if (strpos($message,'Error') !== false) {
                                            echo "<div class='alert alert-danger alert-dismissible alert-auto'><a class='close' data-dismiss='alert'><i class='fa fa-times'></i></a><strong><i class='fa fa-exclamation-triangle'></i> $message</strong></div>";
                                        }
                                        $message=NULL;
                                    ?>
                                    <form action="includes/adduser_submit" method="post" data-toggle="validator" id="registration">
                                        
                                        <div class="form-group">
                                            <div class="col-sm-4" id="username">
                                                <label class="control-label" for="phpro_username">Username</label>
                                                <input type="text" class="form-control" id="phpro_username" name="phpro_username" value="" placeholder="Enter A Username" maxlength="20" pattern=".{3,20}" required autofocus/>
                                            </div>
                                            <div class="col-sm-8" id="email">
                                                <label class="control-label" for="phpro_username">Email</label>
                                                <input type="email" class="form-control" id="phpro_email" name="phpro_email" value="" placeholder="Enter Your Email Address" maxlength="40" pattern=".{4,20}" required/>
                                            </div>
    
                                            <div class="col-sm-6" id="password">
                                                <label class="control-label" for="phpro_username">Password</label>
                                                <input type="password" class="form-control" id="phpro_password" name="phpro_password" placeholder="Enter A Password" maxlength="20" pattern=".{4,20}" required/>
                                            </div>
                                            <div class="col-sm-6" id="password_confirm">
                                                <label class="control-label" for="phpro_username">Confirm Password</label>
                                                <input type="password" class="form-control" id="phpro_password_confirm" name="phpro_password_confirm" placeholder="Confirm Password" maxlength="20" pattern=".{4,20}" required/>
                                            </div>
    
                                            <div class="col-sm-6" id="firstname">
                                                <label class="control-label" for="phpro_firstname">Student First Name</label>
                                                <input type="text" class="form-control" id="phpro_firstname" name="phpro_firstname" placeholder="First Name" pattern=".{1,40}" required>
                                            </div>
                                            <div class="col-sm-6" id="lastname">
                                                <label class="control-label" for="phpro_lastname">Student Last Name</label>
                                                <input type="text" class="form-control" id="phpro_lastname" name="phpro_lastname" placeholder="Last Name" pattern=".{1,40}" required>
                                            </div>
    
                                            <div class="col-sm-4" id="telephone">
                                                <label class="control-label" for="phpro_username">Telephone Number</label>
                                                <input type="tel" class="form-control" id="phpro_telephone" name="phpro_telephone" placeholder="Telephone Number" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" required>
                                            </div>
                                            <div class="col-sm-8">
                                                <label class="control-label" for="phpro_street">Stree Address</label>
                                                <input type="text" class="form-control" id="phpro_street" name="phpro_street" value="" placeholder="Street Address" pattern=".{0,40}" required>
                                            </div>
    
                                            <div class="col-sm-6" id="city">
                                                <label class="control-label" for="city">City</label>
                                                <input type="text" class="form-control" id="phpro_city" name="phpro_city" placeholder="City" pattern=".{1,40}" required>
                                            </div>
                                            <div class="col-sm-4" id="state">
                                                <label class="control-label" for="state">State</label>
                                                <input type="text" class="form-control" id="phpro_state" name="phpro_state" placeholder="State" pattern=".{2,2}" title="2 letters" required>
                                            </div>
                                            <div class="col-sm-2" id="zip">
                                                <label class="control-label" for="zip">Zip</label>
                                                <input type="text" class="form-control" id="phpro_zip" name="phpro_zip" placeholder="Zip" pattern="(\d{5}([\-]\d{4})?)" title="5 numbers" required>
                                            </div>
    
                                            <div class="col-sm-6" id="grade">
                                                <label class="control-label" for="phpro_grade">Grade</label>
                                                <select class="form-control" id="phpro_grade" name="phpro_grade">
                                                    <?php include 'includes/grade.php';?>
                                                </select>
                                            </div>
                                                
                                            <div class="col-sm-2">
                                                <label class="control-label" for="month control-label">Birthday</label>
                                                <select class="form-control" id="month" name="month"><?php include 'includes/month.php';?></select>
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="control-label" for="day">Day</label>
                                                <input type="text" class="form-control" id="day" name="day" placeholder="Day" >
                                            </div>
                                            <div class="col-sm-2">
                                                <label class="control-label" for="year">Year</label>
                                                <input type="text" class="form-control" id="year" name="year" placeholder="Year" >
                                            </div>
                                            
                                            <div class="col-sm-6" id="lesson">
                                                <label class="control-label" for="phpro_lesson_option">Lesson Option</label>
                                                <select class="form-control " id="phpro_lesson_option" name="phpro_lesson_option">
                                                    <?php include 'includes/lesson.php';?>
                                                </select>
                                            </div>
                                            
                                            <label class="col-sm-10 control-label" for="phpro_has_friend">If registering for partner lessons&#44; please choose from the following&#58;</label>
                                            <div class="radio col-sm-12">
                                              <label><input type="radio" value="Yes" name="phpro_has_friend">I have a friend that I would like to take lessons with.</label>
                                            </div>
                                            
                                            <div class="radio col-sm-12">
                                              <label><input type="radio" value="No" name="phpro_has_friend">Please place me with someone at Piano Pathways to take partner lessons.</label>
                                            </div>
                                            
                                            <label class="col-sm-12 control-label" for="lesson-choice-1">Lesson Preference &#40;Day and Time&#41;</label>
                                            <div class="col-sm-12 control">
                                                <div class="input-group col-sm-10">
                                                  <span class="input-group-addon lesson-pref">1st Choice</span>
                                                  <input type="text" class="form-control" id="phpro_lesson_pref_1" name="phpro_lesson_pref_1">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 control">
                                                <div class="input-group col-sm-10">
                                                  <span class="input-group-addon lesson-pref">2nd Choice</span>
                                                  <input type="text" class="form-control" id="phpro_lesson_pref_2" name="phpro_lesson_pref_2">
                                                </div>
                                            </div>
                                            <div class="col-sm-12 control">
                                                <div class="input-group col-sm-10">
                                                  <span class="input-group-addon lesson-pref">3rd Choice</span>
                                                  <input type="text" class="form-control" id="phpro_lesson_pref_3" name="phpro_lesson_pref_3">
                                                </div>
                                            </div>
    
                                            <label class="col-sm-12 control-label" for="phpro_payment_plan">Choose a Payment Plan</label>
                                            <div class="col-sm-8">
                                                <select class="form-control form-control-inline" id="phpro_payment_plan" name="phpro_payment_plan" required>
                                                    <option value="">Choose One</option>
                                                    <option value="1 Payment of Semester Tuition">1 Payment of Semester Tuition</option>
                                                    <option value="2 Payments of Semester Tuition">2 Payments of Semester Tuition</option>
                                                    <option value="Monthly Payments of Semester Tuition">Monthly Payments of Semester Tuition</option>
                                                </select>
                                            </div>                        
                                
                                            <label class="col-sm-12 control-label" for="prior-study">Prior Music Study and Teacher&#58;</label>
                                            <div class="col-sm-10">
                                              <textarea class="form-control" rows="5" id="phpro_lesson_history" name="phpro_lesson_history"></textarea>
                                            </div>                        
                                
                                            <label class="col-sm-12 control-label" for="street">Policy Agreement</label>
                                            <div class="checkbox col-sm-12">
                                              <label><input type="checkbox" id="phpro_policy_agreement" name="phpro_policy_agreement" value="Yes" required>Studio Policy Agreement&#58; I have read the Studio Policy and agree to all terms and conditions outlined&#44; including lesson scheduling&#44; make&#45;up lessons&#44; owning a piano&#44; and abiding by parent and student expectations. By submitting this registration form&#44; I understand that I have committed to lessons in the current semester in Piano Pathways&#44; LLC.</label>
                                            </div>                        
                                
                                            <label class="col-sm-12 control-label" for="street">Tuition Agreement</label>
                                            <div class="checkbox col-sm-12">
                                              <label><input type="checkbox" id="phpro_tuition_agreement" name="phpro_tuition_agreement" value="Yes" required>Tuition Agreement&#58; I have read the tuition and payment information and agree to remit tuition due for the entire semester&#44; even if I withdraw from lessons before the conclusion of the current semester.</label>
                                            </div>
                                            
                                            <br>
                                            <div class="col-sm-12 control">
                                                <div class="input-group pull-right">
                                                    <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                                                    <input type="submit" class="btn btn-default" value="Submit" />
                                                </div> 
                                            </div>
                                        </div>
                                    </form>
                                </div>