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
    <body>
        <form action="includes/addannouncement_submit" method="post" data-toggle="validator">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Add New Announcement</h4>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-10">
                        <label>Announcement Title</label>
                        <input type="text" class="form-control" id="announcement_title" name="announcement_title" placeholder="Title" pattern=".{1,80}" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class='col-sm-6 form-inline'>
                        <label>Expiration Date</label>
                        <div class='input-group date clsDatePicker' id='datetimepicker'>
                            <input type='text' class="form-control" id="announcement_hide_date" name="announcement_hide_date" required/>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-12">
                        <label>Announcement Detail</label>
                        <textarea class="form-control" rows="6" id="announcement_detail" name="announcement_detail" placeholder="Event details..." pattern=".{1,400}"></textarea>
                    </div>
                </div>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            
            <input type="submit" class="btn btn-default" value="Submit" />
        </div>
        </form>
    </body>
</html>