<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATUALIZANDO</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
</head> <?php
    require_once "conexao.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $user = $_POST["user"];
        $senha = $_POST["senha"];

        if($nome != "" && $cpf != "" && $user != "" && $senha != ""){
        $sql = "UPDATE alunos SET nome = '$nome', cpf = '$cpf', user = '$user', senha = '$senha' WHERE id = '$id'";
        if ($conn->query($sql) === TRUE) {
            mkdir("../arquivos/alunos".$cpf);
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