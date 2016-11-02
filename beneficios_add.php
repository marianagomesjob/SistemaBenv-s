<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cadastro de Beneficios-</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<link rel="stylesheet" href="dist/css/estilo.css">
		<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
		<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
		<link rel="stylesheet" href="plugins/morris/morris.css">
		<link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
		<link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	</head>
	<body class="hold-transition skin-blue layout-top-nav">
		<div class="wrapper">
			<?php 
				include "head.php";
			?>
			
			<div class="content-wrapper">
				<div class="container">
					<section class="content">
				  	<div class="box box-default color-palette-box">
						<div class="box-header with-border">
						<h1>Cadastro de Benefício </h1>
						</div>
						<div class="box-body">
							<form role="form">
								<div class="modal-body">
									<div class="row">
										<div class="col-xs-2">
											<label for="exampleInputEmail1">Código</label> 
											<input type="text" class="form-control" placeholder="">
										</div>	
									
										<div class="col-xs-3">
											<label for="exampleInputEmail1">Descrição do Benefício</label> 
											<input type="text" class="form-control" placeholder="">
										</div>	

									</div>	
									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
											<label class="empresa">Grupo </label>
											<select class="form-control">
											<option>Alimentação</option>
											<option>Combustivél</option>
											<option>Refeição</option>
											<option>Vale-Transporte</option>
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
														<h4 class="modal-title" id="myModalLabel">Adicionar </h4>
														
													</div>
													<div class="modal-body">
														<form role="form">
															<div class="box-body">
																<div class="col-xs-8">
																<label for="exampleInputEmail1">Incluir</label>
																<input type="text" class="form-control" placeholder="">
																</div>				
																</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
														<button type="button" class="btn btn-danger">Incluir</button>
													</div>
												</div>
											</div>
										</div>						
									</div>
									
									<div class="col-xs-3">
										<div class="form-group">
											<label class="empresa">Região </label>
											<select class="form-control">
											<option>Alimentação</option>
											<option>Combustivél</option>
											<option>Refeição</option>
											<option>Vale-Transporte</option>
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
														<h4 class="modal-title" id="myModalLabel">Adicionar</h4>
														
													</div>
													<div class="modal-body">
														<form role="form">
															<div class="box-body">
																<div class="col-xs-8">
																<label for="exampleInputEmail1">Região</label>
																<input type="text" class="form-control" placeholder="">
																</div>				
																</div>
														</form>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
														<button type="button" class="btn btn-danger">Incluir</button>
													</div>
												</div>
											</div>
										</div>						
									</div>										
								</div>	
								<br>
								<hr>
								<div class="row">
									<h4>Operadora</h4>
									<br>
									<div class="col-xs-3">
										<div class="form-group">
											<label class="empresa">Operadora </label>
											<select class="form-control">
											<option>Alimentação</option>
											<option>Combustivél</option>
											<option>Refeição</option>
											<option>Vale-Transporte</option>
											</select>
										</div>
									</div>	
									<!--Verificar se esse item vai ser adicionado dentro do sistema pois é uma ação muito redundante-->
									<div class="col-xs-2">
										<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">
										<span class="glyphicon glyphicon-plus-sign"></span>
										</button>
									</div>
									
									<div class="col-xs-2">
										<label for="exampleInputEmail1">Código</label> 
										<input type="text" class="form-control" placeholder="">
									</div>	
								</div>
								<hr>
								<div class="row">
									<h4>Valores</h4>
									<br>
									<div class="col-xs-2">
										<label for="exampleInputEmail1">Valor Unitário</label> 
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-1">
										<!--Cria uma calculadora-->
										<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span></a>
									</div>
									
									<div class="col-xs-2">
										<label for="exampleInputEmail1">% do Total</label> 
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-1">
										<!--Cria uma-->
										<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span></a>
									</div>	
									
									<div class="col-xs-2">
										<label for="exampleInputEmail1">R$ por Usuário</label> 
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-1">
										<!--Cria uma-->
										<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span></a>
									</div>	
									<div class="col-xs-2">
										<label for="exampleInputEmail1">R$ por Pedido</label> 
										<input type="text" class="form-control" placeholder="">
									</div>
									<div class="col-xs-1">
										<!--Cria uma-->
										<a href="#" class="btn btn-default"><span class="glyphicon glyphicon-calendar"></span></a>
									</div>										
								</div>		
								<hr>								
								<div class="row">
									<h4> Opções</h4>
									<br>
									<div class="col-xs-2">
										<div class="form-group">
											<label class="control-sidebar-subheading">
											  Valor Variável
											  <input type="checkbox" class="pull-right" checked>
											</label>										
										</div>
									</div>
									<div class="col-xs-2">
										<div class="form-group">
											<label class="control-sidebar-subheading">
												Multiplo
											    <input type="checkbox" class="pull-right" checked>
											</label>										
										</div>
									</div>

									<div class="col-xs-2">
										<div class="form-group">
											<label class="control-sidebar-subheading">
												Bloco
											    <input type="checkbox" class="pull-right" checked>
											</label>										
										</div>
									</div>	
									<div class="col-xs-2">
										<div class="form-group">
											<label class="control-sidebar-subheading">
												Cartão
											    <input type="checkbox" class="pull-right" checked>
											</label>										
										</div>
									</div>									
								</div>
								<hr>								
								<!--Fim-->
								<div class="row">
									<div class="col-xs-12">
										<a href="beneficios.php" class="btn btn-default">Voltar</a>
										<a href="#" class="btn btn-danger">Salvar</a>
									</div>
								</div>
								</div>							
							
							</form>
					 
					 	</div>
					</div>
					</section>
			  	</div>
			</div>
		
			<footer class="main-footer">
				<div class="container">
				  <div class="pull-right hidden-xs">
					<b>Version</b> 0.1
				  </div>
				  <strong>Benvs- Gestão de beneficos <a href="#">Benvs</a>.</strong> Todos os direitos reservados.
				 
				</div>
			</footer>
		</div>

		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
		<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="plugins/fastclick/fastclick.js"></script>
		<script src="dist/js/app.min.js"></script>
		<script src="dist/js/demo.js"></script>
		<script>
		  $(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
			  "paging": true,
			  "lengthChange": false,
			  "searching": false,
			  "ordering": true,
			  "info": true,
			  "autoWidth": false
			});
		  });
		</script>
	</body>
</html>