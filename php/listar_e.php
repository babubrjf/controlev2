<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Empresas</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
    <link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body style="background-color: #ddd">
<center>
<div class='topnav'>
			<a href='listar.php'>Voltar</a>
		</div>
	<br>
    <h1 style='color: #1b62b7'>LISTA DE EMPRESAS</h1>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-clear">
                <thead>
                    <tr style='color: #1b62b7'>
                        <th scope="col" style="text-align:center">NOME DA EMPRESA</th>
                        <th scope="col" style="text-align:center">CNPJ</th>
                        <th scope="col" style="text-align:center">RELATÓRIO</th>
                        <th scope="col" colspan="2" style="text-align:center">AÇÕES</th>
                    </tr>
                </thead>
                <tbody> <?php
                require_once "conexao.php";
                $sql_query = "SELECT * FROM empresas";
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id_e = $row["id_e"];
                        $nome = $row["nome"];
                        $cnpj = $row["cnpj"];
                        ?> <tr style="text-align:center;color: #000000">
                        <td style="text-align:left"> <?php echo $nome; ?> </td>
                        <td> <?php echo $cnpj; ?> </td>
                        <td>
                            <form action="upload_e.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="cnpj" value="<?php echo $cnpj; ?>" hidden>
                                <label class="btn" for="file"><i class='bx bx-upload'></i></label>
                                <input style="display:none" type="file" name="file" id="file">
                                <input type="submit" style="font-family: 'Poppins', sans-serif;" value="Enviar" name="submit" class="btn">
                            </form>
                        </td>
                        <td>
                            <a style="text-decoration:none" href="update_e.php?id_e=<?php echo $id_e; ?>" class="btn">Editar</a>
                        </td>
                        <td>
                            <a style="text-decoration:none" href="deletar.php?cnpj=<?php echo $cnpj; ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?')" class="deletebtn" >Excluir</a>
                        </td>
                    </tr> 
                    <?php
                    }
                }
                $conn->close();
                ?> </tbody>
            </table>
        </div>
    </section>
    <div class='navbar'>
    </center>
</body>

</html>