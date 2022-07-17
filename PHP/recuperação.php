<?php
include_once('conexão.php');

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sqlcode = "select login, email, senha from usuarios where login = '$login' and email = '$email'";
$sqlresult = mysqli_query($conexao, $sqlcode);
$sql_query = mysqli_num_rows($sqlresult);

if($sql_query == 1){
    $sqlsave = "update usuarios set senha = '$senha' where login = '$login' and email = '$email'";
    $sqlquery = mysqli_query($conexao, $sqlsave);
    echo "<script>alert('Senha atualizada com sucesso');
    window.location.href = 'http://localhost/index.html';
    </script>";
}elseif($sql_query == 0){
    echo "<script>alert('Esses dados são inexistentes ou estão incorretos!');
    window.location.href = 'http://localhost/Recupera%C3%A7%C3%A3o%20de%20senha/Recupera%C3%A7%C3%A3o.html';
    </script>";
}
