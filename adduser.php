<?php 
    include 'includes/session.php';

    /*** set a form token ***/
    $form_token = md5( uniqid('auth', true) );

    /*** set the session form token ***/
    $_SESSION['form_token'] = $form_token;

    $title = 'Piano Pathways';
    include 'includes/head.php';
?>

<!DOCTYPE html>
<html lang="en">
    <body>
        <?php include 'includes/header.php';?>
        <h2>Add user</h2>
        <form action="includes/adduser_submit" method="post">
            <fieldset>
                <p>
                    <label for="phpro_username">Username</label>
                    <input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />
                </p>
                <p>
                    <label for="phpro_email">Email</label>
                    <input type="text" id="phpro_email" name="phpro_email" value="" maxlength="40" />
                </p>
                <p>
                    <label for="phpro_password">Password</label>
                    <input type="text" id="phpro_password" name="phpro_password" value="" maxlength="20" />
                </p>
                <p>
                    <input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
                    <input type="submit" value="Add" />
                </p>
            </fieldset>
        </form>
        <aside>
            <?php
                if (isset($_SESSION["message"]))
                {
                $message = $_SESSION["message"];
                echo "<p class='red'>$message</p>";
                echo 'test';
                }
            ?>
        </aside>
        <?php include 'includes/footer.php';?>
        <?php include 'includes/resources.php';?>
    </body>
</html>