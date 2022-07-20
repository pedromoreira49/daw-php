<?php

	include '../utils/conecta.php';

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = $_POST['pass'];

	if($_FILES['imagem']['tmp_name'] != ''){
		$image = $_FILES['imagem'];
		$fileExt = explode('.', $image['name']);
		$fileExt = $fileExt[count($fileExt) -1];
		if($fileExt == 'png' || $fileExt == 'jpg' || $fileExt == 'jpeg'){
			$size = intval($image['size'] / 1024);
			if($size <= 5000){
				$uniqueID = uniqid().'.'.$fileExt;
				$sql = "insert into usuarios (nome, email, senha, foto) values ('$nome', '$email', '$senha', '$uniqueID')";
				move_uploaded_file($image['tmp_name'], 'c:/xampp/htdocs/daw/uploads/'.$uniqueID);
			}
		}
	}else {
		$sql = "insert into usuarios (nome, email, senha) values ('$nome', '$email', '$senha')";
	}

	$result = mysqli_query($conexao, $sql);

	if($result){
		echo "Success";
		echo "<br />";
		echo "<a href='../index.php'>Voltar</a>";
	}else{
		echo mysqli_errno($conexao);
		echo "<br />";
		echo "<a href='../index.php'>Voltar</a>";
	}


?>