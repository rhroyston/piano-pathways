<?php
/*** begin the session ***/
session_start();

if(!isset($_SESSION['user_id']))
{
    $_SESSION['message'] = 'Error&#58; Please Log In';
    $_SESSION['loginpane'] = 'true';
    header("Location: http://thepianopathway-rhroyston.rhcloud.com/login");
    exit();
}
else
{
    try
    {
        /*** connect to database ***/
        /*** mysql hostname ***/
        $mysql_hostname = '127.8.99.130';

        /*** mysql username ***/
        $mysql_username = 'adminRqmldJy';

        /*** mysql password ***/
        $mysql_password = 'gQDlAVx3a66L';

        /*** database name ***/
        $mysql_dbname = 'thepianopathway';

        /*** select the users name from the database ***/
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
        /*** $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the insert ***/
        $stmt = $dbh->prepare("SELECT phpro_username FROM phpro_users 
        WHERE phpro_user_id = :phpro_user_id");

        /*** bind the parameters ***/
        $stmt->bindParam(':phpro_user_id', $_SESSION['user_id'], PDO::PARAM_INT);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $phpro_username = $stmt->fetchColumn();

        /*** if we have no something is wrong ***/
        if($phpro_username == false)
        {
            $message = 'Access Error';
        }
        else
        {
            $message = 'Welcome '.$phpro_username;
            
            echo '<!DOCTYPE html>';
            echo '<html lang="en">';
        
                $title = 'Profile';
                
                include 'includes/head.php';
            
                echo '<body style=\'background-image: url("../images/fabric.png");\'>';
                    echo '<div id="cover"></div>'; 
                    include "includes/socialnav.php";
                    include "includes/alert.php";
                    echo '<div class="container">';
                        echo '<div class="row text-center">';
                            echo "<h1>Profile</h1>";
                        echo '</div>';
                            try {
                                $conn = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
                                $sql = 'SELECT * FROM phpro_users WHERE phpro_user_id ="' . $_SESSION['user_id'] . '"';
                                 $q = $conn->query($sql);
                                 $q->setFetchMode(PDO::FETCH_ASSOC);                        
                            } catch (PDOException $pe) {
                                die("Could not connect to the database $dbname :" . $pe->getMessage());
                            }
                            while ($r = $q->fetch()): ;
                                $firstname = $r['phpro_firstname'];
                                $lastname = $r['phpro_lastname'];
                                $street = $r['phpro_street'];
                                $city = $r['phpro_city'];
                                $state = $r['phpro_state'];
                                $zip = $r['phpro_zip'];
                                $email = $r['phpro_email'];
                                $telephone = $r['phpro_telephone'];
                                $birthday = $r['phpro_birthday'];
                                $grade = $r['phpro_grade'];
                                $lesson_option = $r['phpro_lesson_option'];
                                $has_friend = $r['phpro_has_friend'];
                                $lesson_pref_1 = $r['phpro_lesson_pref_1'];
                                $lesson_pref_2 = $r['phpro_lesson_pref_2'];
                                $lesson_pref_3 = $r['phpro_lesson_pref_3'];
                                $payment_plan = $r['phpro_payment_plan'];
                                $lesson_history = $r['phpro_lesson_history'];
                            endwhile;                            
                            $time = strtotime($birthday);
                            $year =  date('Y', $time);
                            $month = date('m', $time);
                            $day = date('d', $time);
                            

                            echo '<form action="includes/adduser_submit" method="post" data-toggle="validator" id="registration">';
                                        
                                echo '<div class="form-group">';
                                    echo '<div class="col-sm-8" id="email">';
                                        echo '<label class="control-label" for="phpro_username">Email</label>';
                                        echo '<input type="email" class="form-control" id="phpro_email" name="phpro_email" value="' . $email . '" placeholder="Enter Your Email Address" maxlength="40" pattern=".{4,20}" required/>';
                                    echo '</div>';
                                    echo '<div class="col-sm-6" id="firstname">';
                                        echo '<label class="control-label" for="phpro_firstname">Student First Name</label>';
                                        echo '<input type="text" class="form-control" id="phpro_firstname" name="phpro_firstname" value="' . $firstname . '" placeholder="First Name" pattern=".{1,40}" required>';
                                    echo '</div>';
                                    echo '<div class="col-sm-6" id="lastname">';
                                        echo '<label class="control-label" for="phpro_lastname">Student Last Name</label>';
                                        echo '<input type="text" class="form-control" id="phpro_lastname" name="phpro_lastname" value="' . $lastname . '" placeholder="Last Name" pattern=".{1,40}" required>';
                                    echo '</div>';
    
                                    echo '<div class="col-sm-4" id="telephone">';
                                        echo '<label class="control-label" for="phpro_username">Telephone Number</label>';
                                        echo '<input type="tel" class="form-control" id="phpro_telephone" name="phpro_telephone" value="' . $telephone . '" placeholder="Telephone Number" pattern="(?:\(\d{3}\)|\d{3})[- ]?\d{3}[- ]?\d{4}" required>';
                                    echo '</div>';
                                    echo '<div class="col-sm-8">';
                                        echo '<label class="control-label" for="phpro_street">Stree Address</label>';
                                        echo '<input type="text" class="form-control" id="phpro_street" name="phpro_street" value="' . $street . '" placeholder="Street Address" pattern=".{0,40}" required>';
                                    echo '</div>';

                                    echo '<div class="col-sm-6" id="city">';
                                        echo '<label class="control-label" for="city">City</label>';
                                        echo '<input type="text" class="form-control" id="phpro_city" name="phpro_city" value="' . $city . '" placeholder="City" pattern=".{1,40}" required>';
                                    echo '</div>';
                                    echo '<div class="col-sm-4" id="state">';
                                        echo '<label class="control-label" for="state">State</label>';
                                        echo '<input type="text" class="form-control" id="phpro_state" name="phpro_state" value="' . $state . '" placeholder="State" pattern=".{2,2}" title="2 letters" required>';
                                    echo '</div>';
                                    echo '<div class="col-sm-2" id="zip">';
                                        echo '<label class="control-label" for="zip">Zip</label>';
                                        echo '<input type="text" class="form-control" id="phpro_zip" name="phpro_zip" value="' . $zip . '" placeholder="Zip" pattern="(\d{5}([\-]\d{4})?)" title="5 numbers" required>';
                                    echo '</div>';
    
                                    echo '<div class="col-sm-6" id="grade">';
                                        echo '<label class="control-label" for="phpro_grade">Grade</label>';
                                        echo '<select class="form-control" id="phpro_grade" name="phpro_grade">';
                                            echo '<option value="">Choose One</option>';
                                            echo '<option value="na" '; if ($grade == "na"){echo 'selected';} echo '>N&#47;A</option>';
                                            echo '<option value="Senior in College" '; if ($grade == "Senior in College"){echo 'selected';} echo '>Senior &#40;College&#41;</option>';
                                            echo '<option value="Junior in College" '; if ($grade == "Junior in College"){echo 'selected';} echo '>Junior &#40;College&#41;</option>';
                                            echo '<option value="Sophmore in College" '; if ($grade == "Sophmore in College"){echo 'selected';} echo '>Sophmore &#40;College&#41;</option>';
                                            echo '<option value="Freshman in College" '; if ($grade == "Freshman in College"){echo 'selected';} echo '>Freshman &#40;College&#41;</option>';
                                            echo '<option value="High School Senior" '; if ($grade == "High School Senior"){echo 'selected';} echo '>Senior &#40;HS&#41;</option>';
                                            echo '<option value="High School Junior" '; if ($grade == "High School Junior"){echo 'selected';} echo '>Junior &#40;HS&#41;</option>';
                                            echo '<option value="High School Sophmore" '; if ($grade == "High School Sophmore"){echo 'selected';} echo '>Sophmore &#40;HS&#41;</option>';
                                            echo '<option value="High School Freshman" '; if ($grade == "High School Freshman"){echo 'selected';} echo '>Freshman &#40;HS&#41;</option>';
                                            echo '<option value="Eight Grade" '; if ($grade == "Eight Grade"){echo 'selected';} echo '>8th</option>';
                                            echo '<option value="Seventh Grade" '; if ($grade == "Seventh Grade"){echo 'selected';} echo '>7th</option>';
                                            echo '<option value="Sixth Grade" '; if ($grade == "Sixth Grade"){echo 'selected';} echo '>6th</option>';
                                            echo '<option value="Fifth Grade" '; if ($grade == "Fifth Grade"){echo 'selected';} echo '>5th</option>';
                                            echo '<option value="Fourth Grade" '; if ($grade == "Fourth Grade"){echo 'selected';} echo '>4th</option>';
                                            echo '<option value="Third Grade" '; if ($grade == "Third Grade"){echo 'selected';} echo '>3rd</option>';
                                            echo '<option value="Second Grade" '; if ($grade == "Second Grade"){echo 'selected';} echo '>2nd</option>';
                                            echo '<option value="First Grade" '; if ($grade == "First Grade"){echo 'selected';} echo '>1st</option>';
                                        echo '</select>';
                                    echo '</div>';
                                                
                                    echo '<div class="col-sm-2">';
                                        echo '<label class="control-label" for="month control-label">Birthday</label>';
                                        echo '<select class="form-control" id="month" name="month" required>';
                                            echo '<option value="">Month</option>';
                                            echo '<option value="01" '; if ($month == "01"){echo 'selected';} echo '>Jan</option>';
                                            echo '<option value="02" '; if ($month == "02"){echo 'selected';} echo '>Feb</option>';
                                            echo '<option value="03" '; if ($month == "03"){echo 'selected';} echo '>Mar</option>';
                                            echo '<option value="04" '; if ($month == "04"){echo 'selected';} echo '>Apr</option>';
                                            echo '<option value="05" '; if ($month == "05"){echo 'selected';} echo '>May</option>';
                                            echo '<option value="06" '; if ($month == "06"){echo 'selected';} echo '>Jun</option>';
                                            echo '<option value="07" '; if ($month == "07"){echo 'selected';} echo '>Jul</option>';
                                            echo '<option value="08" '; if ($month == "08"){echo 'selected';} echo '>Aug</option>';
                                            echo '<option value="09" '; if ($month == "09"){echo 'selected';} echo '>Sep</option>';
                                            echo '<option value="10" '; if ($month == "10"){echo 'selected';} echo '>Oct</option>';
                                            echo '<option value="11" '; if ($month == "11"){echo 'selected';} echo '>Nov</option>';
                                            echo '<option value="12" '; if ($month == "12"){echo 'selected';} echo '>Dec</option>';
                                        echo '</select>';
                                    echo '</div>';
                                    echo '<div class="col-sm-2">';
                                        echo '<label class="control-label" for="day">Day</label>';
                                        echo '<input type="text" class="form-control" id="day" name="day" value="' . $day . '" placeholder="Day" >';
                                    echo '</div>';
                                    echo '<div class="col-sm-2">';
                                        echo '<label class="control-label" for="year">Year</label>';
                                        echo '<input type="text" class="form-control" id="year" name="year" value="' . $year . '" placeholder="Year" >';
                                    echo '</div>';
                                
                                    echo '<div class="col-sm-6" id="lesson">';
                                        echo '<label class="control-label" for="phpro_lesson_option">Lesson Option</label>';
                                        echo '<select class="form-control " id="phpro_lesson_option" name="phpro_lesson_option">';
                                            echo '<option value="">Choose One</option>';
                                            echo '<option value="Private 30 min" '; if ($lesson_option == "Private 30 min"){echo 'selected';} echo '>Private Lesson &#40;30-minutes&#41;</option>';
                                            echo '<option value="Private 45 min" '; if ($lesson_option == "Private 45 min"){echo 'selected';} echo '>Private Lesson &#40;45-minutes&#41;</option>';
                                            echo '<option value="Partner" '; if ($lesson_option == "Partner"){echo 'selected';} echo '>Partner Lesson</option>';
                                            echo '<option value="Childrens Group" '; if ($lesson_option == "Childrens Group"){echo 'selected';} echo '>Childrens Group Class</option>';
                                            echo '<option value="Adult Leisure" '; if ($lesson_option == "Adult Leisure"){echo 'selected';} echo '>Adult Leisure Class</option>';
                                            echo '<option value="Online" '; if ($lesson_option == "Online"){echo 'selected';} echo '>Online Lesson</option>';
                                        echo '</select>';
                                    echo '</div>';

                                    echo '<label class="col-sm-10 control-label" for="phpro_has_friend">If registering for partner lessons&#44; please choose from the following&#58;</label>';
                                    echo '<div class="radio col-sm-12">';
                                      echo '<label><input type="radio" value="Yes" name="phpro_has_friend"'; if ($has_friend == "Yes"){echo 'checked="checked"';}; echo '>I have a friend that I would like to take lessons with.</label>';
                                    echo '</div>';
                                    
                                    echo '<div class="radio col-sm-12">';
                                        echo '<label><input type="radio" value="No" name="phpro_has_friend"'; if ($has_friend == "No"){echo 'checked="checked"';}; echo '>Please place me with someone at Piano Pathways to take partner lessons.</label>';
                                    echo '</div>';
                                            
                                    echo '<label class="col-sm-12 control-label" for="lesson-choice-1">Lesson Preference &#40;Day and Time&#41;</label>';
                                    echo '<div class="col-sm-12 control">';
                                        echo '<div class="input-group col-sm-10">';
                                          echo '<span class="input-group-addon lesson-pref">1st Choice</span>';
                                          echo '<input type="text" class="form-control" id="phpro_lesson_pref_1" name="phpro_lesson_pref_1" value="' . $lesson_pref_1 . '">';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-sm-12 control">';
                                        echo '<div class="input-group col-sm-10">';
                                          echo '<span class="input-group-addon lesson-pref">2nd Choice</span>';
                                          echo '<input type="text" class="form-control" id="phpro_lesson_pref_2" name="phpro_lesson_pref_2" value="' . $lesson_pref_2 . '">';
                                        echo '</div>';
                                    echo '</div>';
                                    echo '<div class="col-sm-12 control">';
                                        echo '<div class="input-group col-sm-10">';
                                          echo '<span class="input-group-addon lesson-pref">3rd Choice</span>';
                                          echo '<input type="text" class="form-control" id="phpro_lesson_pref_3" name="phpro_lesson_pref_3" value="' . $lesson_pref_3 . '">';
                                        echo '</div>';
                                    echo '</div>';
    
                                    echo '<label class="col-sm-12 control-label" for="phpro_payment_plan">Choose a Payment Plan</label>';
                                    echo '<div class="col-sm-8">';
                                        echo '<select class="form-control form-control-inline" id="phpro_payment_plan" name="phpro_payment_plan" required>';
                                            echo '<option value="" '; if ($payment_plan == ""){echo 'selected';} echo '>Choose One</option>';
                                            echo '<option value="1 Payment of Semester Tuition" '; if ($payment_plan == "1 Payment of Semester Tuition"){echo 'selected';} echo '>1 Payment of Semester Tuition</option>';
                                            echo '<option value="2 Payments of Semester Tuition" '; if ($payment_plan == "2 Payments of Semester Tuition"){echo 'selected';} echo '>2 Payments of Semester Tuition</option>';
                                            echo '<option value="Monthly Payments of Semester Tuition" '; if ($payment_plan == "Monthly Payments of Semester Tuition"){echo 'selected';} echo '>Monthly Payments of Semester Tuition</option>';
                                        echo '</select>';
                                    echo '</div>';                    
                                
                                    echo '<label class="col-sm-12 control-label" for="prior-study">Prior Music Study and Teacher&#58;</label>';
                                    echo '<div class="col-sm-10">';
                                      echo '<textarea class="form-control" rows="5" id="phpro_lesson_history" name="phpro_lesson_history" value="' . $lesson_history . '"></textarea>';
                                    echo '</div>';
                                            
                                    echo '<br>';
                                    echo '<div class="col-sm-12 control">';
                                        echo '<div class="input-group pull-right">';
                                            echo '<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />';
                                            echo '<input type="submit" class="btn btn-default" value="Submit" />';
                                        echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</form>';

                        echo "</div>";
                        echo "<div id='modal-placeholder'></div>";
                    echo "</div>";
                echo "</body>";
            echo "</html>";
        }
    }
    catch (Exception $e)
    {
        /*** if we are here, something is wrong in the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}

?>