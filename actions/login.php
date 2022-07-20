<?php
	include '../utils/conecta.php';
	session_start();
	$email = $_POST['email'];
	$password = $_POST['pass'];

	$sql = "select * from usuarios where email = '$email' AND senha = '$password'";

	$resultado = mysqli_query($conexao, $sql);

	$session = mysqli_fetch_array($resultado);

	if(mysqli_num_rows($resultado) == 1){
		$_SESSION['email'] = $email;
		$_SESSION['nome'] = $session["nome"];
		//var_dump($session);
		//var_dump($_SESSION['nome']);
		//var_dump($resultado);
		header("Location:../pages/home.php");
	}else{
		echo "<script> alert('Dados incorretos! :('); </script>";
		echo "<a href='../index.php'>Back</a>";
	}

?>