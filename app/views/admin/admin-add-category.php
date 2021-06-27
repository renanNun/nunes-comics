<!DOCTYPE html>

<html lang="pt-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	<!--icons -->
	<script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

	<!-- css -->
	<link rel="stylesheet" href="../../../public/css/global.css">
	<link rel="stylesheet" href="../../../public/css/admin-add-category.css">

	<title>Admin | Nunes' Comics</title>

	<!--javascript -->
	<script src="../../../public/js/funcoes.js" type="text/javascript">
	</script>

</head>

<body>
	<header>
		
	</header>

	<main>
		<div class="container">
			<form action="/admin/categories/<?= $action; ?>" method="POST">
				<fieldset>
					<legend><?= $title; ?></legend>

					<div class="form-item">
						<label for="category">Categoria:</label>
						<div class="input-container">
							<input 
							id="category" 
							type="text" 
							name="name" 
							value="<?= $category ? $category->nome : "" ?>" 
							<?= !$editable ? "readonly" : "" ?>
							>
						</div>
						<?php if ($category) : ?>
							<input type="hidden" name="id" value=<?= $category->id ?>>
						<?php endif; ?>
					</div>

					<?php if ($editable) : ?>
						<div id="form-button" class="form-item">
							<button type="submit">Salvar</button>
						</div>
					<?php endif; ?>
				</fieldset>
			</form>
		</div>
	</main>

	<div class="halftone bottom">
		<img src="../public/assets/halftone-effect.svg" alt="">
	</div>
	<div class="halftone top">
		<img src="../public/assets/halftone-effect.svg" alt="">
	</div>

</body>

</html>