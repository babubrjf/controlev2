<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatórios</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
    <link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-color: #ddd">
<center>
    <div class='topnav'>
			<a href='index.php'>Voltar</a>
	</div>
	<br>
    <h1 style='color: #1b62b7'>RELATÓRIOS</h1>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-clear">
                <thead>
                    <tr style='color: #1b62b7'>
                        <th scope="col" style="text-align:center">NOME DA EMPRESA</th>
                        <th scope="col" colspan="2" style="text-align:center">BAIXAR RELATÓRIO</th>
                    </tr>
                </thead>
                <tbody> <?php
                require_once "conexao.php";
                @$id_e = $_COOKIE['id_e'];
                if(isset($id_e)){
                    $sql_query = "SELECT * FROM tab_empresas WHERE id_e = '$id_e'";
                }
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id_e = $row["id_e"];
                        $nome_e = $row["nome_e"];
                        $cnpj = $row["cnpj"];
                        $arquivos = mysqli_fetch_all(mysqli_query($conn, "SELECT caminho FROM arquivos WHERE caminho LIKE '%$cnpj%'"), MYSQLI_ASSOC);
                        foreach($arquivos as $arquivo){
                        ?> 
                            <tr style="text-align:center;color: #000000">
                                <td> <?php echo $nome_e; ?> </td>
                                <td>
                                    <a style="text-decoration:none" href="<?php echo $arquivo['caminho']; ?>" class="btn" download><i class='bx bxs-download' ></i></a>
                                </td>
                            </tr> 
                    <?php
                    }
                }
                }
                $conn->close();
                ?> </tbody>
            </table>
        </div>
    </section>
    <div class='navbar'>
</body>

</html>