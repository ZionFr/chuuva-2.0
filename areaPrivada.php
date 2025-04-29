<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
        header("location: index.php");
        exit();
    }


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuuva</title>
    <link rel="shortcut icon" href="midia/chuva_branca2.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo-container">
                <a class="logo_img" href="index.html" ><img src="midia/chuva_branca2.png" width="72px"></a>
                <a class="logo" href="index.html" >Chuuva</a>
            </div>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="destaques.html">Destaques</a></li>
                <li><a href="jogosPC.html">Jogos Pc</a></li>
                <li><a href="jogosConsole.html">Jogos Console</a></li>
                <li><a href="jogosMobile.html">Jogos Mobile</a></li>
                <li><a href="index.php">Entrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="texto">
            <h1 style="text-align: center;">Obrigado!</h1><br>

            <p style="text-align:center; font-size: 27px;">Obrigado por se cadastrar e logar no nosso site! Você pode voltar para página principal e aproveitar nossas promoções agora.</p>
        </div>
    </main>
</body>
</html>