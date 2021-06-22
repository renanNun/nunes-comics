<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../public/assets/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	<!--icons -->
	<script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

	<!-- css -->
	<link rel="stylesheet" href="../public/styles/global.css">
	<link rel="stylesheet" href="../public/styles/admin-view-product.css">

	<title>Admin | Nunes' Comics</title>

	<!--javascript -->
	<script src="../public/js/funcoes.js" type="text/javascript">
	</script>
</head>

<body>
	<header>


	</header>

	<main>
		<div class="container">
			<img src="<?= $product->foto ?>" width="250px">

			<div class="field">
				<span class="field-title">Nome:</span> <span id="product-name"><?= $product->nome ?></span>
			</div>

			<div class="field">
				<span class="field-title">Descrição:</span>
				<p id="product-description">
				<?= $product->description ?>
				</p>
			</div>

			<div class="field">
				<span class="field-title">Categoria:</span> <span id="product-category">Marvel Comics</span>
			</div>

			<div class="field">
				<span class="field-title">Preço:</span> <span id="product-price">R$ <?= $product->preco ?></span>
			</div>
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