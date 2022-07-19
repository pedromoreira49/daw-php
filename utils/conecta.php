<?php
	include 'config.php';

	$conexao = new mysqli($db_host, $user, $password, $db_name);

	$conexao->set_charset("utf8");

	if(!$conexao){
		die('Cannot conect in database! :(');
	}

?>