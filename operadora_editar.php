<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Cadastro de Operadora</title>
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
			 
			  <!-- Main content -->
				<section class="content">
				  <!-- COLOR PALETTE -->
				  <div class="box box-default color-palette-box">
					<div class="box-header with-border">
					  <h4>Operadora cadastrada</h4>
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
									<label for="exampleInputEmail1">Razão Social</label> 
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Fantasia</label> 
									<input type="text" class="form-control" placeholder="">
									</div>	
								</div>	
								<div class="row">
									<div class="col-xs-8">
										<label for="cnpj" class="empresa" > Observação</label>
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>	
								<br>
								<div class="row">
									<div class="col-xs-12">
										<a href="operadora.php" class="btn btn-default">Voltar</a>
										<a href="#" class="btn btn-danger">Salvar</a>
									</div>
								</div>
							</div>							
							
						</form>
					 
					  <!-- /.row -->
					</div>
					<!-- /.box-body -->
				  </div>
				</section>
			  <!-- /.content -->
			</div>
			<!-- /.container -->
		  </div>
		  <!-- /.content-wrapper -->
		  <footer class="main-footer">
			<div class="container">
			  <div class="pull-right hidden-xs">
				<b>Version</b> 2.3.5
			  </div>
			  <strong>Benvs- Gestão de beneficos <a href="#">Benvs</a>.</strong> Todos os direitos reservados.
			 
			</div>
			<!-- /.container -->
		  </footer>
		</div>
	<!-- ./wrapper -->

	<!-- jQuery 2.2.3 -->
	<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.6 -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<!-- DataTables -->
	<script src="plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
	<!-- SlimScroll -->
	<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="plugins/fastclick/fastclick.js"></script>
	<!-- AdminLTE App -->
	<script src="dist/js/app.min.js"></script>
	<!-- AdminLTE for demo purposes -->
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