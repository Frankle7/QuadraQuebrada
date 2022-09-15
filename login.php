<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($conn, $_POST['username']);
    $mypassword = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM usuariosqq WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);


    if ($count == 1) {
        header("Location: areaRestrita.php");} 
        
        $_SESSION['login'] = true;
    // else {
    //     echo 'e-mail/senha incorretos  ';
    // }
    

}    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-login.css">
</head>

<body>
    <div class="login">
        <form action="" method="POST" name="login" id="form-login">
            <fieldset id="fieldset-login">
                <legend id="legend-login"><b>LOGIN</b></legend>
                <br>
                <div class="inputBox-login">
                    <input type="email" name="username" id="email" class="inputUser-loginn" required>
                    <label for="username" class="labelInput-login">E-mail</label>
                </div>
                <br><br><br>
                <div class="inputBox-login">
                    <input type="password" name="password" id="password" class="inputUser-loginn" minlength="8" required>
                    <label for="pass" class="labelInput-login">Senha (min 8 caracteres):</label>
                    <br><br>
                    <input type="submit" name="submit-login" id="submit-login" value="Entrar">
                </div>
                <!-- <p id="ou">ou</p> -->
                <!-- <div class="inputBox-login">
                    <input type="cadastro"  name="cadastro" id="cadastro" class="inputUser-loginn" >
                    <label for="cadastro" class="labelInput-login"><h1 id="cadastre">Cadastre-se</h1></label>
                </div> -->

            </fieldset>
        </form>
    </div>
</body>

</html>