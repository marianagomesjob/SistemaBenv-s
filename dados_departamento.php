<?php
//departamento
	include('conexao.php');

		extract($_POST);

		if($codigo == ''){$codigo = 0;}

		mysql_query("INSERT INTO departamento (
			codigo, 
			nome) VALUES (
			$codigo, 
			'$nome')
		") or die(mysql_error());
