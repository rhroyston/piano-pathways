<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  <?php 
    $title = 'Login';
    include 'includes/head.php';
  ?>
  <body>
    
    <h5 class="text-right">
        <!-- Button trigger modal -->
        <a href="https://twitter.com/PianoPathwaysBR"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
        <a href="https://www.facebook.com/PianoPathwaysStudio"><i class="fa fa-facebook-square"></i></a>&nbsp;&nbsp;
        <a href="https://plus.google.com/114075402524593080864/posts"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
        <a href="https://www.linkedin.com/pub/rebecca-bellelo/39/4a6/73"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;
        <a href="https://www.youtube.com/user/rbellelo"><i class="fa fa-youtube-play"></i></a>&nbsp;&nbsp;
            <?php
                if(!isset($_SESSION['user_id']))
                {
                    echo '<span><a href="/login" class="black"><i class="fa fa-sign-in"></i> login</a></span>';
                }
                else
                {
                    echo '<span><a href="/logout" class="black"> <i class="fa fa-sign-in"></i> logout</a></span>';
                }
            ?>
    </h5>
    <div class="container paper">
    <?php include 'includes/alert.php';?>
    <?php include 'includes/header.php';?>

    <?php include 'includes/menu.php';?>
    <?php include 'includes/instructors.php';?>
    </div>
    
    <?php include 'includes/footer.php';?>
    <?php include 'includes/resources.php';?>
  </body>
</html>