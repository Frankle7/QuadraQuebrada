<?php

use LDAP\Result;
    
    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // echo("<br>");
        // print_r($_POST['username']);
        // echo("<br>");
        // print_r($_POST['telefone']);
        // echo("<br>");
        // print_r($_POST['sexo']);
        // echo("<br>");
        // print_r($_POST['data_nasc']);
        // echo("<br>");
        // print_r($_POST['nome_mae']);
        // echo("<br>");
        // print_r($_POST['password']);

        include_once('config.php');

        $nome = ($_POST['nome']);
        $username = ($_POST['username']);
        $telefone = ($_POST['telefone']);
        $sexo = ($_POST['sexo']);
        $data_nasc = ($_POST['data_nasc']);
        $nome_mae = ($_POST['nome_mae']);
        $password = ($_POST['password']);
        $password = md5($password);

        $sql = "INSERT INTO usuariosqq (nome, username, telefone, sexo, data_nasc, nome_mae, password) 
        values ('$nome', '$username', '$telefone', '$sexo', '$data_nasc', '$nome_mae', '$password')";

        if (mysqli_query($conexao, $sql)) {
          echo "criou";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conexao);
        }
        
        mysqli_close($conexao);
        

    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_Carteirinha</title>
    <link rel="stylesheet" href="style-formulario.css">
   
</head>
<body>
    <div class="container-close">
        <!-- <a href="#home"></a><img src="./img/close.png" class="close"/> -->
        <img src="./img/bkd.png" id="lado-di" srcset="">

        <section id="Carteirinha">

            <div class="box">
                <form method="POST" action="processa.php">
                    <fieldset>
                        <legend><b>Cadastro da Carteirinha</b></legend>
                        <br>
                        <div class="inputBox">
                            <input type="text" name="nome" id="nome" class="inputUser" required>
                            <label for="nome" class="labelInput">Nome completo</label>
                        </div>
                        <br>
                        <br>
                        <div class="inputBox">
                            <input type="email" name="username" id="email" class="inputUser" required>
                            <label for="username" class="labelInput">E-mail</label>
                        </div>
                        <br>
                        <br>
                        <div class="inputBox">
                            <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                            <label for="telefone" class="labelInput">Telefone</label>
                        </div>
                        <!-- <br> -->
                        <p>Sexo:</p>
                        <input type="radio" name="sexo" value="feminino" required>
                        <label for="feminino">Feminino</label>
                        <br>
                        <input type="radio" name="sexo" value="masculino" required>
                        <label for="masculino">Masculino</label>
                        <br>
                        <input type="radio" name="sexo" value="outro" required>
                        <label for="outro">Outro</label> 
                        <br><br>
                        <label for="data_nasc"><b>Data de Nascimento:</b></label>
                        <input type="date" name="data_nasc" id="data_nasc" required>
                        <br><br><br>
                        <div class="inputBox">
                        <input type="text" name="nome_mae" id="nome_mae" class="inputUser" required>
                        <label for="nome_mae" class="labelInput">Nome da Mãe</label>
                        </div>
                        <br>
                        <br>
                        <div class="inputBox">
                        <input type="password" name="password" id="password" class="inputUser"
                           minlength="8" required>
                        <label for="pass" class="labelInput">Senha (min 8 caracteres):</label>
                        </div>
                        <br>
                        <br>
                        <input type="submit" name="submit" id="submit" value="Cadastrar">
                    </fieldset>
                </form>
            </div>
        </section>
    
    </div>
    <script src="./js files/sixth.js"></script>


 
</body>
</html>