<?php
session_start();
$dbHost = 'localhost'; 
$dbNome = '';
$dbUsername = "root";
$dbTelefone = '';
$dbSexo = '';
$dbData_nasc = '';
$dbNome_mae = '';
$dbPassword = '';

$dbName = 'formulario-frankle';

$conn = new mysqli( $dbHost, $dbUsername, $dbPassword, $dbName);


// header("Location: index.php");



// if($conexao ->connect_errno)
// {
//     echo "Erro";
// }
// else
// {
//     echo "Conexao efetuada com sucesso";
// }