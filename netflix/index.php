<?php

if(isset($_POST['submit'])){

include_once('config.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, telefone) values('$nome', '$telefone')");

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
</head>

<body id="corpo">
    <div class="container">
        <nav>
            <div class="logo" style="width: 100%;">
                <a href="login.html" title="Login"><img title="Login" src="https://matheusmanuel.github.io/Clone-Netflix-site-Ao/img/logo.png" style="width: 220px;"></a>
            </div>
        </nav>
        <div class="group-form">
            <form>
                <h1>Entrar</h1>
                <div class="form-g">
                    <div>
                        <input type="text" placeholder="Email ou Número de telefone" required>
                    </div>
                    <div>
                        <input type="password" placeholder="Senha" required>
                    </div>
                    <button>Entrar</button>
                    <div class="form-footer">
                        <input type="checkbox" id="check">
                        <label style="margin-left: 10px;" for="check">Lembre-se de mim</label>
                        <p>Precisa de ajuda?</p>
                        <div class="clear"></div>
                    </div>
                </div>
            </form>
            <div class="box-description">
                <p>Novo por aqui?<span> Assine agora.</span></p>
                <p>Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a
                        href="#">Saiba Mais</a></p>
            </div>
        </div>
    </div>
    <footer class="footer-login">
        <div class="box-footer">
            <div class="container">
                <p>Perguntas? Contate-Nos.</p>
                <div class="box-single">
                    <div class="box-single-footer">
                        <ul>
                            <li>FAQ</li>
                            <li>Preferências de cookies</li>
                        </ul>
                    </div>
                    <div class="box-single-footer">
                        <ul>
                            <li>Central de ajuda</li>
                            <li>Informações Corporativas</li>
                        </ul>
                    </div>
                    <div class="box-single-footer">
                        <ul>
                            <li>Termos de uso</li>
                        </ul>
                    </div>
                    <div class="box-single-footer">
                        <ul>
                            <li>Privacidade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>