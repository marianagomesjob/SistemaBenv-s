<?php
//Atividade
	include('conexao.php');

		extract($_POST);
		

		mysql_query("INSERT INTO departamento ( 
			nome) VALUES (
			'$nome')
		") or die(mysql_error());
