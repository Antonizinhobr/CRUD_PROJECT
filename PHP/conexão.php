<?php
$hostname = "localhost";
$user = "root";
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
    echo "<script>alert('Erro na comunicação com o banco de dados!');</script>";
}else{
    print "";
}
?>