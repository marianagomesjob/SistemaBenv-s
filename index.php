<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Home</title>
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
					<section class="content-header">
						<h1>Resumo de Consumo 
						<small>Resumo das informações e consumo de benefícios</small>
						</h1>
					</section>
					<section class="content">
						<div class="row">
							<div class="col-md-8">								
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><span class="glyphicon glyphicon-time"></span> Histórico</h3>

									</div>
									<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
											<thead>
												<tr>
													<th>Emissão</th>
													<th>Valor </th>
													<th>Tipo</th>
													<th>Sit. Financ</th>
													<th>Pagamento</th>
													<th>Entrega</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>15/08/2010</td>
													<td>R$400,00</td>
													<td>Refeição</td>
													<td><a href="" >Cancelado</a></td>
													<td>01/09/2010</td>
													<td>08/09/2010</td>
												</tr>
												<tr>
													<td>15/08/2010</td>
													<td>R$400,00</td>
													<td>Refeição</td>
													<td><a href="" >Ativo</a></td>
													<td>01/09/2010</td>
													<td>08/09/2010</td>
												</tr>	
												<tr>
													<td>15/08/2010</td>
													<td>R$400,00</td>
													<td>Refeição</td>
													<td><a href="" >Ativo</a></td>
													<td>01/09/2010</td>
													<td>08/09/2010</td>
												</tr>
												<tr>
													<td>15/08/2010</td>
													<td>R$400,00</td>
													<td>Refeição</td>
													<td><a href="" >Cancelado</a></td>
													<td>01/09/2010</td>
													<td>08/09/2010</td>
												</tr>																		
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="col-md-3">						
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><span class="glyphicon glyphicon-share-alt"></span> Atalhos</h3>

									</div>
									<div class="box-body">
										<ul>
											<li><a href="">Fazer pedidos</a></li>
											<li><a href="">Pedidos Realizados</a></li>
											<li><a href="">Criar acesso</a></li>
											<li><a href="">Alterar Senha</a></li>
										</ul>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-md-8">								
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><span class="glyphicon glyphicon-comment"></span> Informativos</h3>

									</div>
									<div class="box-body">
										<table id="example1" class="table table-bordered table-striped">
											<tbody>
												<tr>
													<td>15/08/2010- Alteração de Acesso usuário XPTO</td>
												</tr>
												<tr>
													<td>15/08/2010- Alteração de informações em xpto</td>
												</tr>
												<tr>
													<td>15/08/2010- Bloqueio de informações</td>
												</tr>
												<tr>
													<td>15/08/2010- Bloqueio de informações<</td>
												</tr>	
											</tbody>
										</table>
									</div>
								</div>
							</div>

							<div class="col-md-3">						
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title"><span class="glyphicon glyphicon-calendar"></span> Calendário</h3>

									</div>
									<div class="box-body">

									</div>
								</div>
							</div>
							
						</div>
					</section>
				</div>
			</div>
		 
			<footer class="main-footer">
				<div class="container">
					<div class="pull-right hidden-xs">
						<b>Version</b>0.1
					</div>
					<strong>Benvs gestão de beneficos- 2016 <a href="#">Benvs</a>.</strong> Todos os Direitos reservados.
				</div>
			</footer>
		</div>
		
	
		<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
		<script src="plugins/fastclick/fastclick.js"></script>
		<script src="dist/js/app.min.js"></script>
		<script src="dist/js/demo.js"></script>
	</body>
</html>
