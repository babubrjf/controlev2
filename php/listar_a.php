<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
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
    <h1 style='color: #1b62b7'>LISTA DE ALUNOS</h1>
    <section style="margin: 50px 0;">
        <div class="container">
            <table class="table table-clear">
                <thead>
                    <tr style='color: #1b62b7'>
                        <th scope="col" style="text-align:center">NOME</th>
                        <th scope="col" style="text-align:center">CPF</th>
                        <th scope="col" style="text-align:center">ENVIAR DOCUMENTOS</th>
                        <th scope="col" colspan="2" style="text-align:center">AÇÕES</th>
                    </tr>
                </thead>
                <tbody> <?php
                require_once "conexao.php";
                $sql_query = "SELECT * FROM alunos";
                if ($result = $conn->query($sql_query)) {
                    while ($row = $result->fetch_assoc()) {
                        $id_a = $row["id_a"];
                        $nome = $row["nome"];
                        $cpf = $row["cpf"];
                        ?> <tr style="text-align:center;color: #000000">
                        <td style="text-align:left"> <?php echo $nome; ?> </td>
                        <td> <?php echo $cpf; ?> </td>
                        <td>
                            <form action="upload_a.php" method="post" enctype="multipart/form-data">
                                <input type="text" name="cpf" value="<?php echo $cpf; ?>" hidden>
                                <label class="btn" for="file"><i class='bx bx-upload'></i></label>
                                <input style="display:none" type="file" name="file" id="file">
                                <input type="submit" style="font-family: 'Poppins', sans-serif;" value="Enviar" name="submit" class="btn">
                            </form>
                        </td>
                        <td>
                            <a style="text-decoration:none" href="update_a.php?id_a=<?php echo $id_a; ?>" class="btn">Editar</a>
                        </td>
                        <td>
                            <a style="text-decoration:none" href="deletar.php?cpf=<?php echo $cpf; ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?')" class="deletebtn" >Excluir</a>
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