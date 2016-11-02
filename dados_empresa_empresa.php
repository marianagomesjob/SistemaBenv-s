<!DOCTYPE html>
<html>
	<head>
	<title></title>
	</head>
	<body>
		<div class="modal-body">
			<form role="form" id="formulario_empresa">
				<div class="box-body">
				
					<div class="row">
						<div class="col-xs-2">
							<div class="form-group">
								<label class="empresa">Status</label>
								<select required name="status" id="status" class="form-control">
									<option value="Ativo">Ativo</option>
									<option value="Cancelado">Cancelado</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Código</label>
							<input readonly name="codigo" id="codigo" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-4">
							<label for="exampleInputEmail1">Razão Social</label>
							<input required name="razao_social" id="razao_social" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-4">
							<label for="exampleInputEmail1">Fantasia</label>
							<input name="fantasia" id="fantasia" type="text" class="form-control" placeholder="">
						</div>							
					</div>
					

					
					<!--Infomações sobre a CNPJ-->
					<div class="row">
						<div class="col-xs-2">
							<label for="exampleInputEmail1">CNPJ</label>
							<input required name="cnpj" id="cnpj" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Inscrição Estadual</label>
							<input required name="insc_estadual" id="insc_estadual" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Inscrição Municipal</label>
							<input name="insc_municipal" id="insc_municipal" type="text" class="form-control" placeholder="">
						</div>							
					
					
						<div class="col-xs-4">
							<div class="form-group">
								<label class="empresa">Ramo de Atividade</label>
								<select required name="id_ramo_atividade" id="id_ramo_atividade" class="form-control">
									<option value="1">option 1</option>
									<option value="2">option 2</option>
								</select>
							</div>
						</div>
					
						<div class="col-xs-2">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
							<span class="glyphicon glyphicon-plus-sign"></span>
							</button>
							<!-- Modal -->
							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title" id="myModalLabel">Ramo de Atividade</h4>
											
										</div>
										<div class="modal-body">
											<form id="formulario_ramo_atividade" role="form">
												<div class="box-body">
													<div class="col-xs-8">
													<label for="exampleInputEmail1">Ramo de Atividade</label>
													<input type="text" class="form-control" placeholder="">
													</div>				
													</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
											<button type="submit" class="btn btn-danger">Incluir</button>
										</div>
									</div>
								</div>
							</div>						
						</div>	
						<br>
						<div class="col-xs-3">
							<label>Telefone</label>
							<input required name="telefone" id="telefone" type="text" class="form-control" placeholder="">
						</div>
						<div class="col-xs-3">
							<label>Telefone 2</label>
							<input name="telefone2" id="telefone2" type="text" class="form-control" placeholder="">
						</div>
						<div class="col-xs-4">
							<label>Contato</label>
							<input required name="contato_nome" id="contato_nome" type="text" class="form-control" placeholder="">
						</div>
						<br>
						<div class="col-xs-4">
							<label for="exampleInputEmail1">E-mail para envio de Nota Fiscal</label>
							<input required name="email_nf" id="email_nf" type="text" class="form-control" placeholder="">
						</div>
					</div>	
					<hr>
					<br>
					<div class="row">
						<div class="col-xs-3">
							<label for="exampleInputEmail1">Taxa de Gestão Geral(%)</label>
							<input name="tx_gestao_geral" id="tx_gestao_geral" type="text" class="form-control" placeholder="">
						</div>

						<div class="col-xs-2">
							<label for="exampleInputEmail1">Taxa de Gestão VT(%)</label>
							<input name="tx_gestao_vt" id="tx_gestao_vt" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Taxa de Gestão BR  (R$)</label>
							<input name="tx_gestao_br" id="tx_gestao_br" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Taxa de Gestão BA (R$)</label>
							<input name="tx_gestao_ba" id="tx_gestao_ba" type="text" class="form-control" placeholder="">
						</div>							
					</div>
					
					<div class="row">
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Taxa de Gestão BC (R$)</label>
							<input name="tx_gestao_bc" id="tx_gestao_bc" type="text" class="form-control" placeholder="">
						</div>
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Outros Valores (R$)</label>
							<input name="outros_valores" id="outros_valores" type="text" class="form-control" placeholder="">
						</div>							
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Entrega</label>
							<input name="entrega" id="entrega" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Desconto</label>
							<input name="desconto" id="desconto" type="text" class="form-control" placeholder="">
						</div>
						
						<div class="col-xs-1">
							<label for="exampleInputEmail1">Prazo</label>
							<input name="prazo" id="prazo" type="text" class="form-control" placeholder="">
						</div>	
					</div>
					
					<hr>
					<h4>Endereço</h4>
					<br>
					<div class="row">
						<div class="col-xs-3">
							<label for="exampleInputEmail1">CEP</label> 
							<input maxlength="9" name="cep" id="cep" type="text" class="form-control" placeholder="">

						</div>		
						
						<div class="col-xs-1">
							<label for="exampleInputEmail1">Tipo</label>
							<input name="tipo" id="tipo" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-4">
							<label for="exampleInputEmail1">Logradouro</label>
							<input name="logradouro" id="logradouro" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Número</label>
							<input name="numero" id="numero" type="text" class="form-control" placeholder="">
						</div>	
						
					</div>					
					
					<div class="row">
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Complemento</label>
							<input name="complemento" id="complemento" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Bairro</label>
							<input name="bairro" id="bairro" type="text" class="form-control" placeholder="">
						</div>		
						
						<div class="col-xs-1">
							<label for="exampleInputEmail1">Cód.IBGE</label>
							<input name="cod_ibge" id="cod_ibge" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-2">
							<label for="exampleInputEmail1">Cidade</label>
							<input name="nome_cidade" id="nome_cidade" type="text" class="form-control" placeholder="">
						</div>	
						
						<div class="col-xs-3">
							<label for="exampleInputEmail1">Estado</label>
							<select name="uf" id="uf" class="form-control"> 
								<option value="estado">Selecione o Estado</option> 
								<option value="ac">Acre</option> 
								<option value="al">Alagoas</option> 
								<option value="am">Amazonas</option> 
								<option value="ap">Amapá</option> 
								<option value="ba">Bahia</option> 
								<option value="ce">Ceará</option> 
								<option value="df">Distrito Federal</option> 
								<option value="es">Espírito Santo</option> 
								<option value="go">Goiás</option> 
								<option value="ma">Maranhão</option> 
								<option value="mt">Mato Grosso</option> 
								<option value="ms">Mato Grosso do Sul</option> 
								<option value="mg">Minas Gerais</option> 
								<option value="pa">Pará</option> 
								<option value="pb">Paraíba</option> 
								<option value="pr">Paraná</option> 
								<option value="pe">Pernambuco</option> 
								<option value="pi">Piauí</option> 
								<option value="rj">Rio de Janeiro</option> 
								<option value="rn">Rio Grande do Norte</option> 
								<option value="ro">Rondônia</option> 
								<option value="rs">Rio Grande do Sul</option> 
								<option value="rr">Roraima</option> 
								<option value="sc">Santa Catarina</option> 
								<option value="se">Sergipe</option> 
								<option value="sp">São Paulo</option> 
								<option value="to">Tocantins</option> 
							</select>
						</div>				
						
					</div>	

					<br>
					<div class="col-xs-12">
						<a href="empresa.php" class="btn btn-default">Voltar</a>
						<button id="salvar_empresa" type="submit" class="btn btn-danger">Salvar</button>
					</div>					
				</div>
			</form>
		</div>
	</body>
</html>
