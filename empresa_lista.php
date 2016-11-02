<?php
	include_once('conexao.php');

	$sqlEmpresa = mysql_query("SELECT 
		id, 
		codigo, 
		status, 
		razao_social, 
		cnpj, 
		email_nf,
		telefone,
		contato_nome 
		FROM empresa 
		ORDER BY 
		razao_social 
		ASC");
?>

<div class="box box-default">

	 
	<div class="box">
	
		<div class="box-header">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
			 Adicionar  <span class="glyphicon glyphicon-plus-sign"></span>
			</button>

			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Dados Cadastrais da Empresa</h4>
					
				  </div>
				  <div class="modal-body">
						<form role="form">
							<div class="box-body">
								<div class="row">
									<div class="col-xs-3">
										<label for="razao" class="empresa">Código</label>
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-10">
										<label for="cnpj" class="empresa" >Razão Social</label>
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-10">	<label for="cnpj" class="empresa" >CNPJ</label>
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-10">
										<label for="razao" class="empresa">Nome Fantasia</label>
										<input type="text" class="form-control" placeholder="">
									</div>											
								</div>
								<div class="row">

									<div class="col-xs-5">
										<label for="cnpj" class="empresa" > Inscrição Estadual</label>
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-5">
										<label for="cnpj" class="empresa" > Inscrição Municipal</label>
										<input type="text" class="form-control" placeholder="">
									</div>
								
								</div>										
							</div>
						</form>
				  </div>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button type="button" class="btn btn-danger">Salvar</button>
				  </div>
				</div>
			  </div>
			</div>
			<div class="btn-group">
			  <button type="button" class="btn btn-default">Arquivos</button>
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
				<span class="caret"></span>
				<span class="sr-only">Toggle Dropdown</span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><a href="#"><i class="fa fa-fw fa-print"></i> Imprimir</a></li>
				<li><a href="#"><i class="fa fa-fw fa-file-pdf-o"></i>Salvar PDF</a></li>
				<li><a href="#"><i class="fa fa-fw fa-file-excel-o"></i>Exportar para EXCEL</a></li>
				<li><a href="#"><i class="fa fa-fw fa-file-excel-o"></i>CSV</a></li>
			  </ul>
			</div>				  
		</div>
		<hr>
		<!-- /.box-header -->
		
		<div class="box-body">
		  <table id="example1" class="table table-bordered table-striped">
			<thead>
			<tr>
			  <th>#</th>
			  <th>Status</th>
			  <th>CNPJ</th>
			  <th>Razão Social</th>
			  <th>Contato</th>
			  <th>Telefone</th>
			  <th>Ações</th>
			</tr>
			</thead>
			<tbody>

			<?php 
				while($lnEmpresa = mysql_fetch_object($sqlEmpresa)) {
					
			?>
				<tr>
				  <td>
					<?php
					  	echo $lnEmpresa->id;
					?>
				  </td>
				  <td>
				  	<?php
					  	echo $lnEmpresa->status;
					?>
				  </td>
				  <td>
				  	<?php
					  	echo $lnEmpresa->cnpj;
					?>
				  </td>
				  <td>
				  	<?php
					  	echo $lnEmpresa->razao_social;
					?>
				  </td>
				  <td>
				  	<?php
					  	echo $lnEmpresa->contato_nome;
					?>
				  </td>
				  <td>
				  	<?php
					  	echo $lnEmpresa->telefone;
					?>
				  </td>
				  <td>	
				    <div class="btn-group">
				    	<?php
				    		$idEmpresa = base64_encode($lnEmpresa->id);
				    	?>
						<a href="dados_empresa.php?action=visualizar&id=<?php echo $idEmpresa; ?>" type="button"  class="btn btn-default"><i class="fa fa-search"></i></button>
						</a>
						<a href="dados_empresa.php?action=visualizar&id=<?php echo $idEmpresa; ?>" type="button"  class="btn btn-default"><i class="fa fa-edit"></i></button></a>
					</div>
				  </td>
				</tr>	
			<?php
				}
			?>
			</tbody>
			</tfoot>
		  </table>
		</div>
		<!-- /.box-body -->
</div>
<!-- /.box -->