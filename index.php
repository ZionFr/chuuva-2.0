<?php
require_once 'usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="TelaLogin.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <header>
        <nav>
            <div class="logo-container">
                <a class="logo_img" href="index.html" ><img src="img/chuva_branca2.png" width="72px"></a>
                <a class="logo" href="index.html" >Chuuva</a>
            </div>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="sobre.html">Sobre</a></li>
                <li class="dropdown"><a href="#"> Produtos </a>

                    <div class="dropdown-menu">
                        <a href="jogosPC.html">Jogos Pc</a>
                        <a href="jogosConsole.html">Jogos Console</a>
                        <a href="jogosMobile.html">Jogos Mobile</a>
                    </div>

                </li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="index.php">Entrar</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <div id="corpo-form">
    <h1>Entrar</h1>
    <form method="POST">
        <input type="email" name="email" placeholder="Email" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="32">
        <input type="submit" placeholder="Acessar">
        <a href="cadastrar.php">Ainda não tem uma conta? <strong>Cadastre-se</strong></a>
    </form>
    </div>
    </main>

    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <img src="./img/chuva_branca2.png">
                <p>Contatos</p>
                <div id="footer_social_media">
                    <a href="https://github.com/ZionFr/Chuuva" class="footer-link" id="github">
                        <i class="fa-brands fa-github"></i>
                    </a>

                    <a href="#" class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a href="#" class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>

                </div>
            </div>

            <div id="footer_subscribe">
                <h3>Suporte</h3>

                <p>
                    Para qualquer dúvidas adicionais quanto ao funcionamento de nossa plataforma mande-nos seu email para melhor contato.
                </p>

                <div id="input_group">
                    <input type="email" id="email" placeholder="Digite seu e-mail">

                    <button onclick="emailConfirmar()">
                        <i class="fa-regular fa-envelope"></i>
                        <script src="./js/footer.js"></script>
                        
                    </button>
                </div>
            </div>
        </div>

        <div id="footer_copyright">
            &#169
            2025 Chuuva. all rights reserved
        </div>
    </footer>


<?php

if(isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    //verificar se está preenchido
    if(!empty($email) && !empty($senha))
    {
        $u->conectar("projeto_login","localhost","root","");
        if($u->msgErro == "")
        {
        if($u->logar($email,$senha))
        {
            header("location: areaPrivada.php");
        }
        else
        {
            ?>
            <div class="msg-erro">
            <?php echo "Email e/ou senha estão incorretos!"; ?>
            </div>
            <?php
        }
        }
        else
        {
            ?>
            <div class="msg-erro">
            <?php echo "Erro: ".$u->msgErro; ?>
            </div>
            <?php

        }
    }else
    {
        ?>
        <div class="msg-erro">
        <?php echo "Preencha todos os campos!"; ?>
        </div>
        <?php
    }
}



?>

    </body>
</html>