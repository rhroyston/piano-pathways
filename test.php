

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>

  <body>
      
    <form method="post" action="acknowledge.php">
    
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
    
    
      <label for="email">Email:</label>
      <input type="email" name="email" id="email">
    
    
      <label for="comments">Comments:</label>
      <textarea name="comments" id="comments"></textarea>
    
    
      <input type="submit" name="send" value="Send Message">
    
    </form>

  </body>
</html>