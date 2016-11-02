<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Operadora</title>
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
	
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
     
      <!-- Main content -->
      <section class="content">
		<h4>Cadastrar Operadora</h4>
		<br>
        <div class="box box-default">
			<div class="box">
			<!--Grupo inicio-->
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
							<h4 class="modal-title" id="myModalLabel">Cadastro de Operadora</h4>
							
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
											<div class="col-xs-10">
												<label for="cnpj" class="empresa" > Url</label>
												<input type="text" class="form-control" placeholder="">
											</div>
										</div>
										<div class="row">
											<div class="col-xs-10">
												<label for="cnpj" class="empresa" > Observação</label>
												<textarea class="form-control" rows="3"></textarea>
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
						<th>Razao Social</th>
						<th>Fantasia</th>
						<th>URL</th>
						<th>Ações</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>0100</td>
						<td>43.222.465/0001-08+</td>
						<td> Tereza Cosmeticos</td>
						<td>www.tereza.com</td>
						
					<td>
					    <div class="btn-group">
							<a href="operadora_editar.php" type="button"  class="btn btn-default"><i class="fa fa-search"></i></button></a>
							<a href="operadora_editar.php" type="button"  class="btn btn-default"><i class="fa fa-edit"></i></button></a>
						</div>
					  </td>
					</tr>	
					</tbody>
					</tfoot>
				  </table>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 0.1
      </div>
      <strong>Benvs Gestão de Beneficios &copy; 2016 <a href="#">Benvs</a>.</strong> Todos os direitos Reservados
      
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
</body>
</html>
