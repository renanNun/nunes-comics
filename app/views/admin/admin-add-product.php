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

	<link rel="stylesheet" href="../../../public/css/admin-add-produtos.css">

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
<<<<<<< HEAD:app/views/admin/products/admin-add-products.php
			<form method="POST" action="/admin/list-user">
=======
			<form method="POST" action="/admin/products/<?= $action; ?>">
>>>>>>> main:app/views/admin/admin-add-product.php
				<fieldset>
					<legend><?= $title ?></legend>
					<div class="form-item">
						<label for="product-name">Nome:</label>
						<div class="input-container">           
							<input 
								id="name"	
								type="text"
								name="name" 
								value="<?= $product ? $product->name : "" ?>" 
							>
						</div>
					</div>

					<div class="form-item">
						<label>Preço:</label>
						<div class="input-container">
							<input 
								id="preco" 
								type="text" 
								name="preco" 
								value="<?= $product ? $product->preco : "" ?>" 
								onkeyup="formatarMoeda();"
							>
						</div>
					</div>

					<div class="form-item">
						<label for="description">Descrição:</label>
						<textarea 
							id="description" 
							name="description"
							value="<?= $product ? $product->description : "" ?>" 
						><?= $product ? $product->description : "" ?> </textarea>
					</div>

					<div class="form-item">
						<label>Quantidade:</label>
						<div class="input-container">
							<input 
								id="estoque" 
								type="number" 
								name="estoque"
								value="<?= $product ? $product->estoque : "" ?>" 
							>
						</div>
					</div>

					<div class="form-item">
						<label for="category">Categoria: </label>
						<select id="category" name="category">
							<?php foreach($categories as $category) { ?>
								<option value="<?= $category->id ?>"><?= $category->nome ?></option>
							<?php }; ?>
						</select>
					</div>

					<div class="form-item">
						<label>Foto:</label>
						<label id="file-button" for="image">Selecionar uma imagem</label>
						<input id="image" type="file" name="image" onchange="handleSelectImage(event)">
					</div>

					<div id="image-container" class="form-item"></div>

					<input type="hidden" id="id" name="id" value="<?= $product ? $product->id : "" ?>">

					<div class="form-item form-buttons">
<<<<<<< HEAD:app/views/admin/products/admin-add-products.php
						<button type="submit" >Salvar</button>
=======
							<button type="submit" class="button" name="con-enviar" id="con-enviar">
								<span class="font-contact">Salvar</span>
							</button>
>>>>>>> main:app/views/admin/admin-add-product.php
						<button type="reset" value="reset">Resetar</button>
					</div>
				</fieldset>
			</form>
		</div>
	</main>

	<div class="halftone bottom">
		<img src="../img/halftone-effect.svg" alt="">
	</div>
	<div class="halftone top">
		<img src="../img/halftone-effect.svg" alt="">
	</div>
</body>

</html>