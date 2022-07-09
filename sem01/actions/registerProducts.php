<?php

	include '../utils/conecta.php';

	$categoria=$_POST['categoria'];
	$nome=$_POST['nome'];
	$quantidade=$_POST['quantidade'];
	$descricao=$_POST['descricao'];

	$sql="insert into produtos (nome, quantidade, descricao, idcategoria) values ('$nome',$quantidade,'$descricao', $categoria)";

	$result = mysqli_query($conexao, $sql);

	if($result){
		echo "Sucesso";
		echo "<br />";
		echo "<a href='../index.php'>Voltar</a>";
	}else{
		echo mysqli_errno($conexao);
	}


?>