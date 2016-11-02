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
					
					<h4>Empresa - XPTO</h4>
					<br>
					<div class="box box-default">
						<div class="box">
							<div class="box-header">
							<h5>Pedido - Resumo de Utilização</h5>
							<br>
								<div class="row">
									<div class="col-xs-4">Empresa: XPTO</div>
									<div class="col-xs-4">Código: XPTO</div>
								</div>
								<br>	
								<div class="row">
									<div class="col-xs-4">Pedido: XPTO</div>
									<div class="col-xs-4">Sit.Operacional: Abe</div>
									<div class="col-xs-4">Sit.Financeira: Abe</div>
								</div>								
							</div>
						</div>
					</div>
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
									</div>
								</div>
								<br>
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

