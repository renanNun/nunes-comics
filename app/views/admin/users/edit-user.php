<!DOCTYPE html>

<html lang="pt-br">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

		<!--icons -->
		<script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

		<!-- css -->
		<link rel="stylesheet" href="../../../../public/css/global.css">
		<link rel="stylesheet" href="../../../../public/css/adm-add-user.css">
		<link rel="stylesheet" href="../../../public/css/navbar-adm.css">

		<title>Admin | Nunes' Comics</title>
	</head>

	<body>
		<?php require("./app/views/includes/navbar-adm.php") ?>
  		<main class="d-flex justify-content-center">
			<div class="container">
				<form method="POST" action="/admin/users/edit">
					<div>
						<label>Nome: </label>
						<input id="name" value="<?= $user->name ?>" autofocus type="text" name="name" size="34" placeholder="Informe seu nome">
					</div>

					<div>
						<label>E-mail: </label>
						<input id="email" value="<?= $user->email ?>" type="email" name="email" placeholder="email@email.com"></input>
					</div>

					<div >
						<label id="password" for="password">Senha: </label>
						<input id="password" value="<?= $user->password ?>" type="password" name="password" placeholder="Informe sua senha">
					</div>

					<div >
						<label id="pic" for="pic">Foto: </label>
						<input id="pic" value="<?= $user->pic ?>" type="file" name="pic" placeholder="Insira a foto">
					</div>

					<div class="row-button">

						<div>
							<button class="button" type="reset" value="Resetar">
								<span class="font-contact">Resetar</span>
							</button>
						</div>

						<div >
							<input type="hidden" id="id" name="id" value="<?= $user->id ?>">
							<button type="submit" class="button" name="con-enviar" id="con-enviar">
								<span class="font-contact">Editar</span>
							</button>
						</div>
					</div>
				</form>
			</div>
  		</main>

		  <div class="halftone bottom">
			<img src="../../public/assets/halftone-effect.svg" alt="">
		  </div>
		  <div class="halftone top">
			<img src="../../public/assets/halftone-effect.svg" alt="">
		  </div>
	</body>
</html>