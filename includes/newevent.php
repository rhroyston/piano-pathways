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
                <div class="col-sm-10">
                    <label>Stree Address</label>
                    <input type="text" class="form-control" id="event_street" name="event_street" value="" placeholder="Street Address" pattern=".{0,40}" required>
                </div>
            </div>
        <br>
        <div class="row">
            <div class="col-sm-6" id="city">
                <label>City</label>
                <input type="text" class="form-control" id="event_city" name="event_city" placeholder="City" pattern=".{1,40}" required>
            </div>
            <div class="col-sm-4" id="state">
                <label>State</label>
                <input type="text" class="form-control" id="event_state" name="event_state" placeholder="State" pattern=".{2,2}" title="2 letters" required>
            </div>
            <div class="col-sm-2" id="zip">
                <label>Zip</label>
                <input type="text" class="form-control" id="event_zip" name="event_zip" placeholder="Zip" pattern="(\d{5}([\-]\d{4})?)" title="5 numbers" required>
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
                    <select class="form-control" id="duration" name="duration">
                        <option value="">Choose One</option>
                        <option value="01">1 hour</option>
                        <option value="02">2 hours</option>
                        <option value="03">3 hours</option>
                        <option value="04">4 hours</option>
                        <option value="05">5 hours</option>
                        <option value="06">6 hours</option>
                        <option value="07">7 hours</option>
                        <option value="08">8 hours</option>
                        <option value="09">9 hours</option>
                        <option value="10">10 hours</option>
                        <option value="11">11 hours</option>
                        <option value="12">12 hours</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12">
                    <label>Event Detail</label>
                    <textarea class="form-control" rows="6" id="event_detail" name="event_detail" placeholder="Event details..." pattern=".{1,400}"></textarea>
                </div>
            </div>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button type="button" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
        </div>
    </body>
</html>