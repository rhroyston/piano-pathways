<?php include 'includes/session.php';?>
<!doctype html>
<html lang="en">
    <?php 
        $title = 'login';
        include 'includes/head.php';
        
        // capture url of original page and store it in variable called original-page
        if ($_SERVER['HTTP_REFERER'] != "http://thepianopathway-rhroyston.rhcloud.com/login")
        {
            $_SESSION["original-page"] = $_SERVER['HTTP_REFERER'];
        }
        else{
            $_SESSION["original-page"] = "http://thepianopathway-rhroyston.rhcloud.com/";
        }
    ?>
    <body>
        <?php include 'includes/header-min.php';?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    
                    <div class="col-md-8">

                        
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">...</div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
        
                    <div class="col-md-2">
                    </div>
                </div>
            </div>
        </section>
        <?php include 'includes/footer-min.php';?>
    </body>
</html>