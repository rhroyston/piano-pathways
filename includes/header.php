<div class="container-fluid header">
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
                    echo '<span><a class="white" href="/login"><i class="fa fa-sign-in"></i> login</a></span>';
                }
                else
                {
                    echo '<span><a class="white" href="/logout"> <i class="fa fa-sign-in"></i> logout</a></span>';
                }
            ?>
    </h5>
    <div class="logo-wrap">
        <a href="/" class="logo">
            <img src="/images/logo.png">
        </a>
    </div>
    <h5 class="text-center">BATON ROUGE&#39;S MUSIC CENTER FOR CHILDREN&#38; ADULTS</h5>
    <h5 class="text-center">lessons &#124; recitals &#124; studio classes &#124; summer camps</h5>
    
    <h4 class="text-center adjustup blue"><a href="https://www.google.com/maps/place/9270+Siegen+Ln+%23304,+Baton+Rouge,+LA+70810/@30.3672887,-91.0751662,17z/data=!3m1!4b1!4m2!3m1!1s0x8626a53e88fc2d09:0xda2e043d4fe40d5d" target="blank"><i class="fa fa-map-marker"></i> 9270 Siegen Lane #304 Baton Rouge, LA 70810</a></h4>
    <h4 class="text-center adjustup blue"><a href="tel:225-767-0030"><i class="fa fa-phone"></i> &#40;225&#41; 767&#45;0030</a></h4>

    <br>
    <div class="text-center">
        <a class="btn btn-primary" href="tel:225-767-0030" role="button"><i class="fa fa-phone"></i> Telephone</a>
        <a class="btn btn-primary" href="https://www.google.com/maps/place/9270+Siegen+Ln+%23304,+Baton+Rouge,+LA+70810/@30.3672887,-91.0751662,17z/data=!3m1!4b1!4m2!3m1!1s0x8626a53e88fc2d09:0xda2e043d4fe40d5d" target="blank" role="button"><i class="fa fa-map-marker"></i> Directions</a>
    </div>
    <br>
    <br>
    <br>
</div>
    


