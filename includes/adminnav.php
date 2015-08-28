    <h4>
        
        <a class="black textshadow" href="/"><i class="fa fa-home"></i> Home</a>
          <?php
              if(!isset($_SESSION['user_id']))
              {
                echo '<span>&nbsp;&nbsp;<a href="/login" class="black textshadow pull-right"><i class="fa fa-sign-in"></i> login</a></span>';
              }
              else
              {
                echo '<span><a href="/logout" class="black textshadow pull-right"> <i class="fa fa-sign-in"></i> logout</a>&nbsp;&nbsp;</span>';
              }
            ?>
    </h4>