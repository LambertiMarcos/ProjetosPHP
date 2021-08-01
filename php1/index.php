
<?php 
require('header.php');
?>
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <h2>The form target attribute</h2>

        <p>When submitting this form, the result will be opened in a new browser tab:</p>

        <form method="POST" action="action_page.php" target="_blank">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br><br>
            <input type="submit" value="Submit">
        </form> 
    </div>
</body>
</html>