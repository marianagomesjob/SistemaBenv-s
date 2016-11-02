<?php
//conectar
	$link = mysql_connect('localhost', 'root', '');
	if (!$link) {
	    die('Não foi possível conectar: ' . mysql_error());
	}

	$selected = mysql_select_db("benvs",$link) or die("Database não encontrada!");