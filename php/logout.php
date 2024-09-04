<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Saindo...</title>
  <link rel="icon" href="../img/icon.png" type="image/icon type">
 
</head>

<?php
    @$usercookie = $_COOKIE["user"];
    @$idcookie = $_COOKIE["id"];
    if(isset($usercookie)){
        unset($usercookie);
        setcookie("user","",-1);
        unset($idcookie);
        setcookie("id","",-1);
        header("refresh:1;url=index.php");
    }
?>
<script>alert('Deslogado! Pressione OK para voltar a tela de login');refresh:0.5;</script>