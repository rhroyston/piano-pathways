    <h4 class="text-right">
        <!-- Button trigger modal -->
          <?php
              if(!isset($_SESSION['user_id']))
              {
                echo '<span><a href="/login" class="black textshadowsm"><span class="navsmall"><i class="fa fa-sign-in"></i> login</span></a></span>';
              }
              else
              {
                echo '<span><a href="/profile" class="black textshadowsm"> <span class="navsmall"><i class="fa fa-user"></i> ' . $_SESSION['username'] . '</span></a></span>';
                echo '&nbsp;<span><a href="/logout" class="black textshadowsm"> <span class="navsmall"><i class="fa fa-sign-out"></i> logout</span></a></span>';
              }
            ?>
        &nbsp;
    </h4>
    