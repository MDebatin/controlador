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
    $user = $_POST['user'];
} else {
    $user = "Anônimo";
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
                <div class="linktext"><?php echo $user; ?></div>
            </a>
            <a class="item" href="#nav-6">
                <div class="linktext">Sair</div>
            </a>
        </nav>
    </section>

    <div class="container">
        <div class="card" onclick="submitForm('financas.php')">
            <div class="card__image-container">
                <img src="img/dinheiro.png" alt="Ícone Dinheiro" class="icon-card">
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

        <div class="card" onclick="submitForm('senhas.php')">
            <div class="card__image-container">
                <img src="img/cadeado.png" alt="Ícone Cadeado" class="icon-card">
            </div>

            <svg class="card__svg" viewBox="0 0 800 500">
                <path d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400 L 800 500 L 0 500" stroke="transparent" fill="#333"></path>
                <path class="card__line" d="M 0 100 Q 50 200 100 250 Q 250 400 350 300 C 400 250 550 150 650 300 Q 750 450 800 400" stroke="pink" stroke-width="3" fill="transparent"></path>
            </svg>

            <div class="card__content">
                <p class="card__title">Senhas</p>
                <p>Gerenciador de Senhas, para todos termos acesso compartilhado às senhas dos serviços de streaming.</p>
            </div>
        </div>
    </div>

    <form id="hiddenForm" method="post">
        <input type="hidden" name="user" id="user" value="">
        <input type="hidden" name="valor" value="1">
    </form>

    <script>
        function submitForm(action) {
            // Define o valor de user no campo hidden
            document.getElementById('user').value = '<?php echo $user; ?>';

            // Define a ação (URL) do formulário com base no card clicado
            document.getElementById('hiddenForm').action = action;

            // Submete o formulário
            document.getElementById('hiddenForm').submit();
        }
    </script>
</body>


</html>