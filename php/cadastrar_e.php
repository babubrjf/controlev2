<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRANDO</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
</head> <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $nome = strtoupper($nome);
        $user = $_POST["user"];
        $senha = $_POST["senha"];
        $cnpj = $_POST["cnpj"];
        $tipo = "empresa";

        $connect = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connect,"controle");

        $query_select = "SELECT user FROM usuarios WHERE user = '$user'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$userarray = $array["user"];
        if($userarray == $user){
            echo"<script>alert('O USUÁRIO JÁ ESTÁ EM USO!');history.back();</script>";            
        }

        $query_select = "SELECT cnpj FROM empresas WHERE cnpj = '$cnpj'";
        $select = mysqli_query($connect,$query_select);
        $array = mysqli_fetch_array($select);
        @$cnpjarray = $array["cnpj"];
        if($cnpjarray == $cnpj){
            echo"<script>alert('O CNPJ PERTENCE A OUTRA EMPRESA!');history.back();</script>";            
        }

        elseif($nome != "" && $user != "" && $senha != "" && $cnpj != ""){
        $sql = "INSERT INTO usuarios (user, senha, tipo) VALUES ('$user', '$senha', '$tipo')";
        $sql2 = "INSERT INTO empresas (nome, cnpj, user, senha, tipo) VALUES ('$nome', '$cnpj', '$user', '$senha', '$tipo')";
    
        if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {
            mkdir("../arquivos/empresas/".$cnpj);
            echo"<script>alert('EMPRESA CADASTRADA COM SUCESSO!');history.go(-2);</script>";
        }else{
            echo"<script>alert('ERRO AO CADASTRAR EMPRESA');history.back();</script>" . $conn->error;
        }
        }else{
            echo"<script>alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS');history.back();</script>";
        }
    }
$conn->close();