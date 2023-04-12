<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars("Professor"); ?>
        <br>
        </b> Bem vindo a Biblioteca FATEC ARARAS!</h1>
    </div>
    <div class="form-group">
        <a href="cadastro.php" class="btn btn-danger">Cadastrar Saída de Livro</a>
    </div>
    <div class="form-group">
        <a href="exibir.php" class="btn btn-danger">Exibir Emprestimos</a>
    </div>
    <p>
       
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>