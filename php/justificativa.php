<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justificar Faltas</title>
	<link rel="icon" href="../img/icon.png" type="image/icon type">
	<link rel="stylesheet" href="../css/style.css" integrity="" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <center>
    <body style="background-color: #ddd">
		<div class='topnav'>
			<a href='index.php'>Voltar</a>
		</div>
		<br>
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
											<form method='post' action='cadastrar_e.php'>
												<div class='section text-center'>
												<label for="modalidade">Modalidade:</label>
													<select id="modalidade">
														<option value="aperf">Aperfeiçoamento Profissional</option>
														<option value="aprend">Aprendizagem Industrial</option>
														<option value="ct">Curso Técnico</option>
														<option value="quali">Qualificação Profissional</option>
														<option value="inic">Iniciação Profissional</option>
													</select>
												<br>
												<label for="curso">Curso:</label>
													<select id="curso" placeholder="Usuário">
														<option value="-"></option>
														<option value="adm">Administração</option>
														<option value="assistadm">Assistente Administrativo</option>
														<option value="assistlog">Assistente de Logística</option>
														<option value="auto">Automação Industrial</option>
														<option value="aux">Auxiliar de Logística</option>
														<option value="conf">Confecção do Vestuário</option>
														<option value="devsis">Desenvolvimento de Sistemas</option>
														<option value="elet">Eletrônica</option>
														<option value="gest">Gestão Industrial</option>
														<option value="mec">Mecânica Industrial</option>
														<option value="mech">Mecatrônica</option>
														<option value="seg">Segurança do Trabalho</option>
													</select>
												<br>
												<label for="justificativa">Justificativa:</label>
													<select id="justificativa">
														<option value="ent">Entrada em atraso</option>
														<option value="said">Saída antecipada</option>
														<option value="dia">1 dia ou mais de falta</option>
													</select>
												<br>
												<form action="upload_a.php" method="post" enctype="multipart/form-data">
													<input type="text" name="cpf" value="<?php echo $cpf; ?>" hidden>
													<label for="file"></label>
													<input style="display:none" type="file" name="file" id="file">
													<input type="submit" style="font-family: 'Poppins', sans-serif;" value="Enviar" name="submit">
												</form>
												<br>
												<button type='submit' class='btn mt-4'>CADASTRAR</button>
												</div>
											</form>
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
</body>
    </center>
</body>
</html>