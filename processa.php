<?php
include_once("config.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$data_nasc = filter_input(INPUT_POST, 'data_nasc', FILTER_SANITIZE_STRING);
$nome_mae = filter_input(INPUT_POST, 'nome_mae', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

   // echo "Nome: $nome <br>";
    // echo "Email: $email <br>";
    
$result_usuario = "INSERT INTO usuariosqq (nome, username, telefone, sexo, data_nasc, nome_mae, password) VALUES('$nome', '$username', '$telefone', '$sexo', '$data_nasc', '$nome_mae', '$password')";
$result_usuario = mysqli_query($conn, $result_usuario);  

?>