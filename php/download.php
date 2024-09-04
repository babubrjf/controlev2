<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controle";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$cnpj = $_GET["cnpj"];

@$id_e = $_COOKIE['id_e'];
if(isset($id_e)){
    $sql_query = "SELECT * FROM tab_empresas WHERE id_e = '$id_e'";

    $diretorio = "../relat/$cnpj/";
    $caminho = $diretorio;

    if (file_exists($caminho)){
        {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.basename($caminho));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($caminho));
        ob_clean();
        flush();
        readfile($caminho);
        exit;
        }
    }
}


?>