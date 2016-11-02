<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Seja Bem-Vindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dist/css/reset.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="dist/css/style.css">
	</head>

	<body>
		<div class="wrapper">
			<input type="checkbox" name="flipper__checkbox" id="flipper__checkbox" class="flipper__checkbox" hidden />
			<div class="form__container">
				<!-- Front side -->
				<div class="form__login">
				  <h1 class="form__header">Benvs <br>Gestão de Beneficios</h1>
				  <form id="loginForm" action="index.php" method="post" class="form">
					<fieldset class="form__group">
					  <label for="user"><span class="label__icon fa fa-at"></span></label>
					  <input id="type" name="type" class="form__element" type="type" placeholder="Usuário" required />
					</fieldset>
					<fieldset class="form__group">
					  <label for="password"><span class="label__icon fa fa-lock"></span></label>
					  <input id="password" name="password" class="form__element" type="password" placeholder="Senha" required />
					</fieldset>

					<fieldset class="form__group">
					  <input class="form__button" type="submit" value="Login" />
					</fieldset>
					<small> <label for="flipper__checkbox" class="form__link"></label>.</small>
				  </form>
				</div>
			</div>
		</div>
	</body>
</html>
