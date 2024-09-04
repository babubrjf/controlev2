<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZANDO</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
</head> <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id_e = $_POST["id_e"];
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $user = $_POST["user"];
        $senha = $_POST["senha"];

        if($nome != "" && $cnpj != "" && $user != "" && $senha != ""){
        $sql = "UPDATE empresas SET nome = '$nome', cnpj = '$cnpj', user = '$user', senha = '$senha' WHERE id_e = '$id_e'";
        if ($conn->query($sql) === TRUE) {
            mkdir("../arquivos/empresas".$cnpj);
            echo"<script>alert('EMPRESA ATUALIZADA COM SUCESSO!');history.go(-2);</script>";
        } else {
            echo "Erro ao atualizar cliente: " . $conn->error;
        }
     } else {
             echo"<script>alert('TODOS OS CAMPOS DEVEM SER PREENCHIDOS!');history.go(0);</script>";
            header("refresh:2;url=index.php");
        }
        }
    $conn->close();
?>