<?php include 'includes/session.php';?>
<!doctype html>
<html lang="en">
<?php $title = 'login';
include 'includes/head.php';

// capture url of original page and store it in variable called original-page
if ($_SERVER['HTTP_REFERER'] != "http://www.rack.pub/login")
{
    $_SESSION["original-page"] = $_SERVER['HTTP_REFERER'];
}
else{
    $_SESSION["original-page"] = "http://www.rack.pub";
}


?>

<body>
    <section class="section">
        <div class="container">
            <h2>Login</h2>
            <form action="login_submit" method="post">
                <fieldset>
                    <span>
                        <label for="phpro_username">Username</label>
                        <input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />
                        <label for="phpro_password">Password</label>
                        <input type="text" id="phpro_password" name="phpro_password" value="" maxlength="20" />
                    </span>
                    <p>
                        <input type="submit" value="Login" />
                    </p>
                </fieldset>
            </form>
            <aside>
                <?php
                    if (isset($_SESSION["message"]))
                    {
                    $message = $_SESSION["message"];
                    echo "<p class='red'>$message</p>";
                    }
                ?>
                <p>This is a private computer system&#46;  Unauthorized access is scrictly prohibited&#46;</p>
            </aside>
        </div>
    </section>
</body>
</html>