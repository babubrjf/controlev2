<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controle";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$cpf = $_POST["cpf"];
$diretorio = "../arquivos/alunos/$cpf/";

if(isset($_FILES['file']) && $_FILES['file']['error'] == 0){
    $nomearquivo = basename($_FILES["file"]["name"]);
    $caminho = $diretorio.$nomearquivo;

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $caminho)){
        $sql="INSERT INTO arquivos (nomearquivo, caminho) VALUES ('$nomearquivo','$caminho')";
        if($conn->query($sql) == true){
            echo"<script>alert('ARQUIVO ENVIADO COM SUCESSO!');history.go(-1);</script>";
        }else{
            echo"<script>alert('NÃO FOI POSSÍVEL ENVIAR O ARQUIVO.');history.go(-1);</script>";
        }
    }else{
        echo"<script>alert('ERRO AO ENVIAR O ARQUIVO.');history.go(-1);</script>";
    }
}else{
    echo"<script>alert('NENHUM ARQUIVO ESCOLHIDO.');history.go(-1);</script>";
}
$conn->close();