<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">
	<title>sem 01</title>
</head>
<body>
	<div class="form-style-6">
		<h1>Search products</h1>
		<form action="actions/procurarProdutos.php" method="post">
			<input type="text" name="nome" placeholder="Pesquisar produtos" />
			<input type="submit" value="Procurar" />
			<input type="button" value="Cadastrar Categoria" onclick="window.location.href='pages/categorias.php'">
			<input type="button" value="Cadastrar Produtos" onclick="window.location.href='pages/produtos.php'">
		</form>
	</div>
</body>
</html>