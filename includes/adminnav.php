    <h4>
        &nbsp;&nbsp;<a class="black textshadow" href="/"><i class="fa fa-home"></i> Home</a>
          <?php
              if(!isset($_SESSION['user_id']))
              {
                echo '<span><a href="/login" class="black textshadowsm pull-right"><i class="fa fa-sign-in"></i> login</a></span>';
              }
              else
              {
                echo '<span><a href="/logout" class="black textshadowsm pull-right"> <i class="fa fa-sign-in"></i> logout&nbsp;&nbsp;</a></span>';
              }
            ?>
    </h4>