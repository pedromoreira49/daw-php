<?php
	include '../utils/conecta.php';

	$sql="select * from categorias";

	$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sem01</title>
	<link rel="stylesheet" href="../styles.css">
</head>
<body>
	<div class="form-style-6">
		<h1>Cadastrar produtos</h1>
		<form action="../actions/registerProducts.php" method="post">
			<select name="categoria">
				<?php while($linha=mysqli_fetch_assoc($result)){ ?>
					<option value="<?php echo $linha['idcategoria'] ?>"><?php echo $linha['nome'] ?></option>
				<?php } ?>
			</select>
			<input type="text" name="nome" placeholder="Nome" />
			<input type="number" name="quantidade" placeholder="quantidade" />
			<textarea name="descricao" placeholder="Descrição"></textarea>
			<input type="submit" value="Cadastrar" />
		</form>
	</div>
</body>
</html>