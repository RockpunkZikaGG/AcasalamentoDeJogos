<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./Source/Css/geral.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/header.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/home.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/noticias.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/jogos.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/sobre.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/footer.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/edit.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/login.css">
    <link rel="stylesheet" type="text/css" href="./Source/Css/fontes.css">
    <title>CDJ IFSul</title>
</head>
<body>
<header>
    <div class="baner">
        <img class="LogoCDJ" src="./Source/Images/cdj.png">
        <div class="titulos">
            <h1>CDJ IFSul</h1>
            <h2>Clube De Jogos IFSul</h2>
        </div>
        <img class="LogoCDJ" src="./Source/Images/cdj.png">
    </div>
    <nav>
        <a href="?page=Home">Home</a>
        <a href="?page=Jogos">Jogos</a>
        <a href="?page=Noticias">Notícias</a>
        <a href="?page=Sobre">Sobre</a>  
        <?php
          session_start();        
          if(isset($_SESSION['email'])):
        ?>
          <a href="?page=Logout">Deslogar</a>
        <?php
         endif;
        ?>         
    </nav>
</header>

