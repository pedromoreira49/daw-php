<?php

	include '../utils/conecta.php';

	$nome = $_POST['category'];

	$sql = "insert into categorias (nome) values ('$nome')";

	$result = mysqli_query($conexao, $sql);

	if($result){
		echo "Success";
		echo "<br />";
		echo "<a href='../index.php'>Voltar</a>";
	}else{
		echo mysqli_errno($conexao);
	}
?>