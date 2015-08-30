<?php include 'includes/session.php';?>

<!DOCTYPE html>
<html lang="en">
  
<div id="cover"></div>  
  
  <?php 
            $title = 'Admin';
            $jslink2 = '<script src="js/moment-with-locales.min.js"></script>';
            $jslink = '<script src="js/bootstrap-datetimepicker.min.js"></script>';
            $csslink = '<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">';
    include 'includes/head.php';
  ?>
  <body>
    
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
    </div>
</div>     
    
    
  </body>
</html>