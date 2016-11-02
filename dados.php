<?php
//dados
	include('conexao.php');

		extract($_POST);

		if($codigo == ''){$codigo = 0;}
		if($id_ramo_atividade == ''){$id_ramo_atividade = 0;}

		$query = mysql_query("INSERT INTO empresa (
			status, 
			codigo, 
			razao_social, 
			fantasia, 
			cnpj, 
			insc_estadual, 
			insc_municipal, 
			id_ramo_atividade, 
			telefone, 
			telefone2, 
			contato_nome, 
			email_nf, 
			tx_gestao_geral, 
			tx_gestao_vt, 
			tx_gestao_br, 
			tx_gestao_ba, 
			tx_gestao_bc, 
			outros_valores, 
			entrega, 
			desconto, 
			prazo, 
			cep, 
			tipo, 
			logradouro, 
			numero, 
			complemento, 
			bairro,
			cod_ibge, 
			nome_cidade, 
			uf) VALUES (
			'$status', 
			$codigo, 
			'$razao_social', 
			'$fantasia', 
			'$cnpj', 
			'$insc_estadual', 
			'$insc_municipal', 
			$id_ramo_atividade, 
			'$telefone', 
			'$telefone2', 
			'$contato_nome', 
			'$email_nf', 
			'$tx_gestao_geral', 
			'$tx_gestao_vt', 
			'$tx_gestao_br', 
			'$tx_gestao_ba', 
			'$tx_gestao_bc', 
			'$outros_valores', 
			'$entrega', 
			'$desconto', 
			'$prazo', 
			'$cep', 
			'$tipo', 
			'$logradouro', 
			'$numero', 
			'$complemento', 
			'$bairro', 
			'$cod_ibge', 
			'$nome_cidade', 
			'$uf')
		") or die(mysql_error());

		if($query == FALSE){
			return false;
		} else {
			return true;
		}
