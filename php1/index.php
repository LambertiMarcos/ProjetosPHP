
<?php 
session_start();// para trabalhar com sessão

require('header.php');

// mostrar o aviso da sessão
if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>
<!-- Início do HTML -->
<!DOCTYPE html>
<html>
<body>
    <div class="container">
        <h2>The form target attribute</h2>

        <a href="clearCookie.php">Clear Cookie</a>
    
        <p>When submitting this form, the result will be opened in a new browser tab:</p>

        <form method="POST" action="action_page.php" target="_blank">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname" value=""><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname" value=""><br>
            <label for="idade">Idade:</label><br>
            <input type="text" id="idade" name="idade" value=""><br>
            <label for="lname">E-mail:</label><br>
            <input type="text" id="email" name="email" value=""><br><br>
            <input type="submit" value="Submit"><br><br>
            
        </form>         
        <form method="POST" action="receiver.php" enctype="multipart/form-data">
        <input type="file" name="arquivo" /><br><br>

        <input type="submit" value="Enviar" />
        
        </form> 
    </div>
</body>
</html>