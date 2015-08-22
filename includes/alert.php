<?php
    if (isset($_SESSION['message'])){
        $message = $_SESSION['message'];
        // display message and then kill the session variable 
        if (strpos($message,'Success') !== false) {
            echo "<div class='alert alert-success alert-dismissible alert-auto'><a class='close' data-dismiss='alert'><i class='fa fa-times'></i></a><strong><i class='fa fa-check'></i> $message</strong></div>";
        }
        if (strpos($message,'Error') !== false) {
            echo "<div class='alert alert-danger alert-dismissible alert-auto'><a class='close' data-dismiss='alert'><i class='fa fa-times'></i></a><strong><i class='fa fa-exclamation-triangle'></i> $message</strong></div>";
        }
        $message = NULL;
        unset ($_SESSION["message"]);
    }
?>