<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados</title>
    <link rel="icon" href="../img/icon.png" type="image/icon type">
    <link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #ddd">
    <center>
        <div class='topnav'>
            <a href='listar.php'>Voltar</a>
        </div>
        <br>
        <h1 style='color: #1b62b7'>ATUALIZAR DADOS</h1>
        <div class='section'>
            <div class='container'>
                <div class='row full-height justify-content-center'>
                    <div class='col-12 text-center align-self-center py-5'>
                        <div class='section pb-5 pt-5 pt-sm-2 text-center'>
                            <label for='reg-log'></label>
                            <div class='card-3d-wrap mx-auto'>
                                <div class='card-3d-wrapper'>
                                    <div class='card-front'>
                                        <div class='center-wrap'>
                                            <?php 
                                            require_once "conexao.php";
                                            @$sql_query = "SELECT * FROM empresas WHERE id_e = ".$_GET["id_e"];
                                            if ($result = $conn -> query($sql_query)) {
                                                while ($row = $result -> fetch_assoc()) { 
                                                    $id_e = $row['id_e'];
                                                    $nome = $row['nome'];
                                                    $cnpj = $row['cnpj'];
                                                    $user = $row['user'];
                                                    $senha = $row['senha'];
                                            ?>
                                            <form method='post' action='atualizar_e.php'>
                                                <input type="hidden" class="form-style" value="<?php echo $id_e; ?>"
                                                    name="id_e" id="id_e" required>
                                                <div class='section text-center'>
                                                    <div class='form-group'>
                                                        <input type='text' class='form-style' value="<?php echo $nome; ?>"
                                                            placeholder='Nome da Empresa' name='nome' id='nome' required>
                                                        <i class='input-icon uil uil-at'></i>
                                                    </div>
                                                    <br>
                                                    <div class='form-group'>
                                                        <input type='number' class='form-style' value="<?php echo $cnpj; ?>"
                                                        placeholder='CNPJ' name='cnpj' id='cnpj' required>
                                                        <i class='input-icon uil uil-at'></i>
                                                    </div>
                                                    <br>
                                                    <div class='form-group'>
                                                        <input type='text' class='form-style' value="<?php echo $user; ?>"
                                                        placeholder='Usuário' name='user' id='user' required>
                                                        <i class='input-icon uil uil-at'></i>
                                                    </div>
                                                    <br>
                                                    <div class='form-group mt-2'>
                                                        <input type='password' class='form-style' value="<?php echo $senha; ?>"
                                                        placeholder='Senha' name='senha' id='senha' required>
                                                        <i class='input-icon uil uil-lock-alt'></i>
                                                    </div>
                                                    <br>
                                                    <button type='submit' class='btn mt-4'>ATUALIZAR</button>
                                                </div>
                                            </form>
                                            <?php 
                                                    }
                                                }
                                                $conn->close();
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='navbar'>
            <center>
</body>

</html>