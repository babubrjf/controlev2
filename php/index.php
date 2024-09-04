<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Secretaria Escolar</title>
	<link rel="icon" href="../img/icon.png" type="image/icon type">
</head>

<body>

	<?php
	require 'conexao.php';
	@$cookie = $_COOKIE["user"];
  	if (isset($cookie)) {
		$query_select = "SELECT id, user, tipo FROM usuarios WHERE user = '$cookie'";
        $select = mysqli_query($conn,$query_select);
        $array = mysqli_fetch_assoc($select);
		if ($array["tipo"] === 'admin'){
			require '../html/admin.html';
		}elseif ($array["tipo"] === 'empresa'){
			require '../html/empresa.html';
			echo "<center><br><br><br><br><br><br><br><br>
			<h1 style='color: #1b62b7'>Bem-vindo, $cookie !</h1>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<img src='../img/logo.png' width='200px'>
			<div class='navbar'>
			</div></center>";
		}elseif ($array["tipo"] === 'aluno'){
			require '../html/aluno.html';
			echo "<center><br><br><br><br><br><br><br><br><br><br>
			<h1 style='color: #1b62b7'>Bem-vindo, $cookie !</h1>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<img src='../img/logo.png' width='200px'>
			<div class='navbar'>
			</div></center>";
		}
  	}else{
    	require '../html/login.html';
	}
	   ?>	
</body>

</html>