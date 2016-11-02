<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Gerenciamento de Pedidos*</title>
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
					<h4>Gerenciamento de Pedidos</h4>
					<br>
						<div class="box box-default">
							<div class="box">
							
								<div class="box-header">
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
						
						
								<div class="box-body">
									<div class="row">
										<div class="col-xs-3">
											<div class="form-group">
												<select class="form-control">
												<option>Situação Financeira</option>
												<option>Situação Operacional</option>
												<option>Pedido</option>
												<option>Razão Social</option>
												<option>CNPJ</option>
												<option>Ponto de Entrega</option>
												<option>Emissão </option>
												<option>Pagamento </option>
												<option>Entrega</option>
												<option>Valor a Pagar</option>
												<option>Contato</option>
												</select>
											</div>
										</div>
									</div>
									<br>
									<table id="table_benvs" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>#</th>
												<th>Financeiro </th>
												<th>Op.</th>
												<th>Emissão</th>
												<th>Pagamento</th>
												<th>Entrega </th>
												<th>Pedido</th>
												<th>Razão Social</th> 
												<th>Valor a Pagar</th> 
												<th>Ações</th>
											  
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>0100</td>
												<td>Pag</td>
												<td>Abe</td>
												<td>23/08/2013</td>
												<td>08/09/2013</td>
												<td>15/09/2013</td>
												<td>000001</td>
												<td>a</td>
												<td>15.786,95</td>
												<td>
													<div class="btn-group">
														<div class="btn-group">
															<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
																<span class="caret"></span>
															</button>
															<ul class="dropdown-menu">
																<li><a href="pedido_usobeneficios.php">Usuários/Benefícios</a></li>
																<li><a href="#">Resumo por Benefícios</a></li>
																<li><a href="#">Resumo por Usuários</a></li>
																<li><a href="#">Resumo por Departamento</a></li>
																<li><a href="#">Recibo de Entrega</a></li>
															</ul>															
														</div>														
														<button type="button" class="btn btn-default"><i class="fa fa-edit"></i></button>
													</div>										

												</td>						
											</tr>

										</tbody>
									</table>
								</div>
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
						<strong>Benvs Gestão de Beneficios &copy; 2016 <a href="#">Benvs</a>.</strong> Todos os direitos Reservados
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
			$("#table_benvs").DataTable();
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

