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
            <div class="form-group">
                <div class="col-sm-10">
                    <label>Event Title</label>
                    <input type="text" class="form-control" id="event_title" name="event_title" placeholder="Title" pattern=".{1,80}" required>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <div class='col-sm-6 form-inline'>
                    <label>Date&#38; Time</label>
                    <div class='input-group date clsDatePicker' id='datetimepicker'>
                        <input type='text' class="form-control" id="pickertextbox"/>
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label>Duration</label>
                    <select class="form-control" id="duration" name="duration"><?php include 'includes/duration.php';?></select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Event Detail</label>
                    <textarea class="form-control" rows="3" id="event_detail" name="event_detail" placeholder="Event details..." pattern=".{1,400}"></textarea>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
        </div>
    </body>
</html>