<?php
include_once('conexão.php');

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$login = mysqli_real_escape_string($conexao,$_POST['login']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['password']);

$sql = "insert into usuarios (nome,login,email,senha) values ('$nome','$login','$email','$senha')";
$salvar = mysqli_query($conexao, $sql);
$resultado = mysqli_affected_rows($conexao);

if($_POST['nome'] == "" && $_POST['login'] == "" && $_POST['email'] == "" && $_POST['password'] == ""){
    echo "<script>alert('Os campos não podem ser vazios!');
    window.location.href = 'http://localhost/Cadastro/Cadastro.html';
    </script>";
}elseif($resultado == 1){
   echo "<script>alert('Cadastro realizado com sucesso, seja bem vindo $nome');
   window.location.href = 'http://localhost/';
   </script>";
}else{
    echo "<script>alert('Já existe um cadastro com esses dados!');
    window.location.href = 'http://localhost/Cadastro/Cadastro.html';
    </script>";
}
mysqli_close($conexao);
?>