<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHECKING</title>
  <link rel="icon" href="../img/icon.png" type="image/icon type">
 
</head> <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "controle";
  
  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Conexão falhou: " . $conn->connect_error);
  }
?>