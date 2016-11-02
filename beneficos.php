<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Empresa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/estilo.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">


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
                <li><a href="grupo.php">Grupo</a></li>
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

        <div class="box box-default">

	 
			<div class="box">
			<!--Grupo inicio-->
				<div class="box-header">
					<!-- Button trigger modal -->
					<a href="beneficios_add.php" class="btn btn-default" role="button">Adicionar <span class="glyphicon glyphicon-plus-sign"></span></a>

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
					<tr>
					  <td>0100</td>
					  <td>Ativo
					  </td>
					  <td>43.222.465/0001-08+</td>
					  <td> Tereza Cosmeticos</td>
					  <td>Tereza</td>
					  <td> (11)8888-4444 </td>
					  <td>	
					    <div class="btn-group">
							<a href="dados_empresa.php" type="button"  class="btn btn-default"><i class="fa fa-search"></i></button></a>
							<a href="dados_empresa.php" type="button"  class="btn btn-default"><i class="fa fa-edit"></i></button></a>
						</div>
					  </td>
					</tr>
					<tr>
					  <td>0100</td>
					  <td>Inativo
					  </td>
					  <td>43.222.465/0001-08+</td>
					  <td> Tereza Cosmeticos</td>
					  <td>Tereza</td>
					  <td> (11)8888-4444 </td>
					  <td>	
					    <div class="btn-group">
							<a href="dados_empresa.php" type="button"  class="btn btn-default"><i class="fa fa-search"></i></button></a>
							<a href="dados_empresa.php" type="button"  class="btn btn-default"><i class="fa fa-edit"></i></button></a>
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

