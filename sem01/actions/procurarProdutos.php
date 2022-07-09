<?php

	include '../utils/conecta.php';

	$produto=$_POST['nome'];

	if($produto == null){
		$sql = "select * from produtos";
	}else{
		$sql = "select * from produtos where nome = '$produto'";
	}

	$result = mysqli_query($conexao, $sql);

	while($linha=mysqli_fetch_assoc($result)){
		echo $linha['nome'];
		echo '<br />';
	}

	echo "<a href='../index.php'>Voltar</a>";
?>