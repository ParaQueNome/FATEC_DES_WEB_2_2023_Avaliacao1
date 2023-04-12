<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <title>cadastro</title>
</head>
<body>
<div class = wrapper>
        <p>Insira seu usuário e senha</p>
        <form action="dados_arquivo.php" method = "POST" >
            <div class = "form-group">
                <label>Nome Completo</label>
                <input type="text " name = "name" class = "form-control" >


                </label>
            </div>
            <div class="form-group">
                <label>Código do Livro</label>
                <input type="text" name="codigo" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>Nome do Livro</label>
                <input type="text" name = "livro" class= "form-control">
                <span class="help-block"></span>

            </div>
            <div class="form-group">
                <label>Data Retirada</label>
                <input type="date" name = "data" class= "form-control">
                <span class="help-block"></span>

            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar">
                <a href="welcome.php"></a>


            </div>
        </form>
        

    </div>
</body>
</html>