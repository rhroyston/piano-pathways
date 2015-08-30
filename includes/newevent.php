<?php
/*** begin the session ***/
session_start();

if(!isset($_SESSION['user_id']))
{
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>
    <?php

    ?>
    <body>
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add New Event</h4>
        </div>
        <div class="modal-body">

        <div class="row">
            <div class='col-sm-6'>
                <div class="form-group form-inline">
                    <label class="control-label" for="month control-label">Date&#38; Time</label>
                    <div class='input-group date clsDatePicker' id='datetimepicker'>
                        
                        <input type='text' class="form-control" />
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                    <div class="col-sm-6">
                        <label class="control-label" for="month control-label">Duration</label>
                        <select class="form-control" id="duration" name="duration"><?php include 'includes/duration.php';?></select>
                    </div>
                </div>
            </div>
        </div>
    
    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </body>
</html>