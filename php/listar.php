<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Secretaria Escolar</title>
	<link rel="icon" href="../img/icon.png" type="image/icon type">
	<link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color: #ddd">
	<center>
		<div class='topnav'>
			<a href='index.php'>Início</a>
			<a href='cadastro.php'>Cadastrar</a>
			<a class='active' href='listar.php'>Listar</a>
			<a href='./admin/solic.php'>Solicitações</a>
			<a href='logout.php' onclick="return confirm('Deseja deslogar do sistema?')">Sair</a>
		</div>
		<br><br><br><br><br><br><br>
		<h1 style='color: #1b62b7'>Selecione uma opção para continuar:</h1>
		<br>
		<div>
			<a style="text-decoration:none" href='listar_e.php' class="choicebtn">Lista de Empresas</a>
			<a style="text-decoration:none" href='listar_a.php' class="choicebtn">Lista de Alunos</a>
		</div>
		<div class='navbar'></div>
	<center>
</body>

</html>