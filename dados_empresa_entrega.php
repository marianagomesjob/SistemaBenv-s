<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Endereço de Entrega</title>
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

		  <header class="main-header">
			<nav class="navbar navbar-static-top">
			  <div class="container">
				<div class="navbar-header">
				  <a href="index.php" class="navbar-brand"><b>Ambiente-Homolog</b></a>
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
					<i class="fa fa-bars"></i>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
				  <ul class="nav navbar-nav">
					<li class="active">
					<li class="cadastro">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CADASTRO <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="empresa.php">Empresa</a></li>
						<li><a href="operadora.php">Operadora</a></li>
						<li><a href="beneficos.php">Beneficios</a></li>
						<li><a href="pedidos.php">Pedidos</a></li>
					  </ul>
					</li>
					
					<li class="active">
					<li class="parametro">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">PARAMETRÔS <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="estados.php">Estados</a></li>
						<li><a href="cidades.php">Cidades</a></li>
						<li><a href="atividades.php">Atividades</a></li>
						<li><a href="grupo.hmtl">Grupo</a></li>
						<li><a href="regiao.php">Região</a></li>				
					  </ul>
					</li>
					
					<li class="active">
					<li class="controle">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTROLE <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						<li><a href="trocar.php">Troca de Senha</a></li>
						<li><a href="cadastrouser.hmtl">Cadastro Usuario</a></li>
					  </ul>
					</li>			
				  </ul>

				</div>
				<!-- /.navbar-collapse -->
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
				  <ul class="nav navbar-nav">



		  
					<li class="dropdown user user-menu">
					  <!-- Menu Toggle Button -->
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<!-- The user image in the navbar-->
						<img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
						<!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs">Alexander Pierce</span>
					  </a>
					  <ul class="dropdown-menu">
						<!-- The user image in the menu -->
						<li class="user-header">
						  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

						  <p>
							Alexander Pierce - Web Developer
							<small>Member since Nov. 2012</small>
						  </p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
						  <div class="row">
							<div class="col-xs-4 text-center">
							  <a href="#">Followers</a>
							</div>
							<div class="col-xs-4 text-center">
							  <a href="#">Sales</a>
							</div>
							<div class="col-xs-4 text-center">
							  <a href="#">Friends</a>
							</div>
						  </div>
						  <!-- /.row -->
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
						  <div class="pull-left">
							<a href="#" class="btn btn-default btn-flat">Profile</a>
						  </div>
						  <div class="pull-right">
							<a href="#" class="btn btn-default btn-flat">Sign out</a>
						  </div>
						</li>
					  </ul>
					</li>
				  </ul>
				</div>
				<!-- /.navbar-custom-menu -->
			  </div>
			  <!-- /.container-fluid -->
			</nav>
		  </header>
		  <!-- Full Width Column -->
		  <div class="content-wrapper">
			<div class="container">
			 
			  <!-- Main content -->
				<section class="content">
				  <!-- COLOR PALETTE -->
				  <div class="box box-default color-palette-box">
					<div class="box-header with-border">
					  <h1>Endereço de Entrega </h1>
					</div>
					<div class="box-body">
						<form role="form">
							<div class="modal-body">
								<div class="row">
									<div class="col-xs-5">
									<label for="exampleInputEmail1">Código</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-5">
									<label for="exampleInputEmail1">Ponto de Entrega*</label>
									<input type="text" class="form-control" placeholder="">
									</div>		
								
									<br>
									<div class="col-xs-5">
									<label for="exampleInputEmail1">Fantasia</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-5">
									<label for="exampleInputEmail1">Cargo</label>
										<select class="form-control">
											<option>jhjh</option>
											<option>kskdas</option>
										</select>
									</div>
								</div>
								<hr>
								<h3>Endereço</h3>
								<br>

								<div class="row">
									<div class="col-xs-2">
										<label for="exampleInputEmail1">CEP</label>
										<input type="text" class="form-control" placeholder="">
									</div>		
										
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Tipo</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
										
									<div class="col-xs-5">
									<label for="exampleInputEmail1">Logradouro</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
										
									<div class="col-xs-2">
									<label for="exampleInputEmail1">Número</label>
									<input type="text" class="form-control" placeholder="">
									</div>							
								</div>

								<div class="row">
									<div class="col-xs-2">
										<label for="exampleInputEmail1">Complemento</label>
										<input type="text" class="form-control" placeholder="">
									</div>		
										
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Bairro</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
										
									<div class="col-xs-2">
									<label for="exampleInputEmail1">Cod IBGE</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
										
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Cidade</label>
									<input type="text" class="form-control" placeholder="">
									</div>							
								</div>								<br>
								<div class="row">
									<div class="col-xs-2">
										<label for="exampleInputEmail1">UF</label>
										<input type="text" class="form-control" placeholder="">
									</div>		
										
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Estado</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
										
									<div class="col-xs-5">
									<label for="exampleInputEmail1">Referência</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
							
								</div>
								<hr>
								<!--Opção1-->
								<h3>Responsável pelo recebimento</h3>
								<br>
								<div class="row">
									<div class="col-xs-3">
										<label for="exampleInputEmail1">Nome</label>
										<input type="text" class="form-control" placeholder="">
									</div>		
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Tipo</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">DDD</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Ramal</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-2">
									<label for="exampleInputEmail1">Telefone</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Email</label>
									<input type="text" class="form-control" placeholder="">
									</div>							
								</div>
								<!--Opção2-->
								<div class="row">
									<div class="col-xs-3">
										<label for="exampleInputEmail1">Nome</label>
										<input type="text" class="form-control" placeholder="">
									</div>		
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Tipo</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">DDD</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Ramal</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-2">
									<label for="exampleInputEmail1">Telefone</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Email</label>
									<input type="text" class="form-control" placeholder="">
									</div>							
								</div>
								<!--Opção3-->
								<div class="row">
									<div class="col-xs-3">
										<label for="exampleInputEmail1">Nome</label>
										<input type="text" class="form-control" placeholder="">
									</div>		
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Tipo</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">DDD</label>
									<input type="text" class="form-control" placeholder="">
									</div>	
									
									<div class="col-xs-1">
									<label for="exampleInputEmail1">Ramal</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-2">
									<label for="exampleInputEmail1">Telefone</label>
									<input type="text" class="form-control" placeholder="">
									</div>
									
									<div class="col-xs-3">
									<label for="exampleInputEmail1">Email</label>
									<input type="text" class="form-control" placeholder="">
									</div>							
								</div>
							</div>
							<div class="col-xs-12">
								<a href="dados_empresa.php" class="btn btn-default">Voltar</a>
								<a href="#" class="btn btn-danger">Salvar</a>
							</div>
						
						<hr>
						<br>
							
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
	</body>
</html>