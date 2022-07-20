<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sem01</title>
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body>
	<div class="form-style-6">
		<h1>Cadastrar usuário</h1>
		<form action="../actions/registerUsers.php" method="post" enctype="multipart/form-data">
			<input type="text" name="nome" placeholder="Nome do usuario" />
			<input type="email" name="email" placeholder="email" />
			<input type="password" name="pass" placeholder="senha" />
			<input type="file" name="imagem" />
			<input type="submit" value="Cadastrar" />
		</form>
	</div>
</body>
</html>