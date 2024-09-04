<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EXCLUINDO</title>
  <link rel="icon" href="../img/icon.png" type="image/icon type">
</head>
<?php
  require_once "conexao.php";
  $cnpj = $_GET["cnpj"];
  $query = "DELETE FROM tab_empresas WHERE cnpj = '$cnpj'";
  if (mysqli_query($conn, $query)) {
    $dir = "../relat/$cnpj/";
    $files = scandir($dir);
    foreach ($files as $file){
      if($file !== '.' && $file !== '..'){
        unlink($dir.$file);
      }
    }
    rmdir("../relat/$cnpj");
    echo"<script>alert('REGISTRO EXCLUÍDO COM SUCESSO!');history.back();</script>";
    header("Refresh:0.5; url=listar.php");
  } else {
    echo"<script>alert('ERRO AO EXCLUIR REGISTRO!');history.back();</script>";
  }
?>