<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  <?php 
    $title = 'Login';
    // if we have a session message variable then capture it then clear the session variable
    if (isset($_SESSION['message'])) {
      $message = $_SESSION['message'];
    }
    unset ($_SESSION["message"]);
    $loginpane = $_SESSION["loginpane"];
    unset ($_SESSION["loginpane"]);
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
    <?php include 'includes/header.php';?>
    <?php include 'includes/banner.php';?>
    <div class="container-fluid">
      <div class="row adjustup">
        <img src="/images/pianoman.png" class="img-responsive center-block">
      </div>
    </div>
    <?php include 'includes/why.php';?>
    <?php include 'includes/instructors.php';?>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/resources.php';?>
  </body>
</html>