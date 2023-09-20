<?php
// Verifique se a variável 'user' foi enviada através do método POST
if (isset($_POST['user'])) {
	$user = $_POST['user'];
} else {
	$user = "Anônimo";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="icon" href="img/icon.png" type="image/png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Password Manager</title>
	<link rel="stylesheet" href="style.css">
</head>

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

<div class="container1">
    <div class="form-container">
        <div class="form">
            <span class="heading">Adicionar Senha</span>
            <input placeholder="Site/App" type="text" class="input">
            <input placeholder="Senha" id="password" type="password" class="input">
            <textarea placeholder="Observações" rows="10" cols="30" id="message" name="message" class="textarea"></textarea>
            <div class="button-container">
                <div class="send-button">Adicionar</div>
                <div class="reset-button-container">
                    <div id="reset-btn" class="reset-button">Limpar</div>
                </div>
            </div>
        </div>
    </div>

    <div class="existing-passwords">
        <h2>Senhas Armazenadas</h2>
        <table>
            <thead>
            <tr>
                <th>Website</th>
                <th>Password</th>
            </tr>
            </thead>
            <tbody>
            <!-- Display existing passwords here using PHP/Database retrieval -->
            <tr>
                <td>Example.com</td>
                <td>Pa$$w0rd</td>
            </tr>
            <tr>
                <td>AnotherSite.com</td>
                <td>Secure123</td>
            </tr>
            <!-- Add more rows dynamically as per your database -->
            </tbody>
        </table>
    </div>
</div>
</body>

</html>




