<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

$filename = "Livros.txt";

if(!file_exists("Livros.txt")){
    print "Não há informações a serem exibidas";

}else{
    $handle = fopen("Livros.txt", "r");
    while (!feof($handle)) {
        $line = fgets($handle);
        $partes = explode(",",$line);
        echo "Nome: ". $partes[0] ."<br>";
        echo "Codigo do Livro: " .$partes[1] ."<br>";
        echo "Nome do Livro: " . $partes[2] ."<br>";
        echo "Data de retirada: " . $partes[3] ."<br>";
    }
    fclose($handle);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <title>Exibir</title>
</head>
<body>
<p>
       
       <a href="welcome.php" class="btn btn-danger">Voltar</a>
   </p>
</body>
</html>
