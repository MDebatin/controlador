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
	<div class="table-container">
		<h2>Tabela 1</h2>
		<table>
			<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
				<th>Valor R$</th>
				<th>Parcelas</th>
			</tr>
			</thead>
			<tbody>
			<!-- Adicione suas linhas dinamicamente aqui -->
			<tr>
				<td>Exemplo 1</td>
				<td>Tipo 1</td>
				<td>100</td>
				<td>3</td>
			</tr>
			<tr>
				<td>Exemplo 2</td>
				<td>Tipo 2</td>
				<td>200</td>
				<td>2</td>
			</tr>
			<!-- Adicione mais linhas conforme necessário -->
			</tbody>
		</table>
		<button class="add-button">Adicionar Linha</button>
	</div>

	<div class="table-container">
		<h2>Tabela 2</h2>
		<table>
			<thead>
			<tr>
				<th>Nome</th>
				<th>Tipo</th>
				<th>Valor R$</th>
				<th>Parcelas</th>
			</tr>
			</thead>
			<tbody>
			<!-- Adicione suas linhas dinamicamente aqui -->
			</tbody>
		</table>
		<button class="add-button">Adicionar Linha</button>
	</div>

	<div class="summary-container">
		<div class="summary">
			<h2>Gastos Totais</h2>
			<span id="total-expenses">0</span>
		</div>
		<div class="summary">
			<h2>Descontos</h2>
			<span id="discounts">0</span>
		</div>
		<div class="summary">
			<h2>R$ Restante</h2>
			<span id="final-value">0</span>
		</div>
	</div>
</div>

</body>

</html>




