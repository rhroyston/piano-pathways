    <h4 class="text-right">
        <!-- Button trigger modal -->
        <a class="black textshadow" href="https://twitter.com/PianoPathwaysBR"><i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
        <a class="black textshadow" href="https://www.facebook.com/PianoPathwaysStudio"><i class="fa fa-facebook-square"></i></a>&nbsp;&nbsp;
        <a class="black textshadow" href="https://plus.google.com/114075402524593080864/posts"><i class="fa fa-google-plus"></i></a>&nbsp;&nbsp;
        <a class="black textshadow" href="https://www.linkedin.com/pub/rebecca-bellelo/39/4a6/73"><i class="fa fa-linkedin"></i></a>&nbsp;&nbsp;
        <a class="black textshadow" href="https://www.youtube.com/user/rbellelo"><i class="fa fa-youtube-play"></i></a>&nbsp;&nbsp;
          <?php
              if(!isset($_SESSION['user_id']))
              {
                echo '<span><a href="/login" class="black textshadow"><i class="fa fa-sign-in"></i> login</a></span>';
              }
              else
              {
                echo '<span><a href="/logout" class="black textshadow"> <i class="fa fa-sign-in"></i> logout</a></span>';
              }
            ?>
        &nbsp;
    </h4>