<?php
include_once('conexão.php');
$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['password']);

$sql = "select login, senha from usuarios where login = '$login' and senha = '$senha'";
$sql_code = mysqli_query($conexao, $sql);
$resultado = mysqli_num_rows($sql_code);

if($resultado == 1){
    echo "<script>alert('Seja bem vindo $login');
    window.location.href = 'http://localhost/Blog/Blog.html';
    </script>";
}elseif($resultado == 0){
    echo "<script>alert('Esse usuário não existe no banco de dados!');
    window.location.href = 'http://localhost/';
    </script>";
}
?>