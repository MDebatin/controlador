<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/icon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deba Controller</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
// Verifique se a variável 'user' foi enviada através do método POST
if (isset($_POST['user'])) {
    $profileName = $_POST['user'];
} else {
    $profileName = "Anônimo";
}
?>

<body>
    <a class="anchor" name="nav-6"></a>
    <section class="nav-6">
        <nav>
            <a class="item" href="#nav-6">
                <div class="linktext">Home</div>
            </a>
            <a class="item" href="#nav-6">
                <div class="linktext"><?php echo $profileName; ?></div>
            </a>
            <a class="item" href="#nav-6">
                <div class="linktext">Sair</div>
            </a>
        </nav>
    </section>

    <div class="container">
        <div class="card">
            <div class="card__image-container">
            </div>

            <svg class="card__svg" viewBox="0 0 800 500">

                <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"></path>
            </svg>

            <div class="card__content">
                <p class="card__title">Finanças</p>
                <p>Gerenciador de gastos, feito para controlar as despesas e receitas.</p>
            </div>
        </div>


        <div class="card">
            <div class="card__image-container">
            </div>

            <svg class="card__svg" viewBox="0 0 800 500">

                <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"></path>
            </svg>

            <div class="card__content">
                <p class="card__title">Senhas</p>
                <p>Gerenciador de Senhas, para todos termos acesso compartilhado as senhas dos serviços de streaming.</p>
            </div>
        </div>
    </div>
</body>
</html>