<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="../../../public/assets//favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	<!--icons -->
	<script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

	<!-- css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" href="../../../public/css/global.css">
	<link rel="stylesheet" href="../../../public/css/adm-produtos.css">

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
			<div class="titulo">
				<h1 class="mb-0">Produtos</h1>
				<a href="/admin/products/add">
					<button type="button">Novo</button>
				</a>
			</div>

			<div class="g">
				<table class="table table-borderless rounded">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>

						<?php foreach ($products as $product) : ?>
            	<tr>
              	<th scope="row"><?= $product->id ?></th>
              	<td><?= $product->name ?></td>
              	<td class="d-flex justify-content-end flex-wrap">
                	<form action="/admin/products/view" method="POST" class="mb-1">
                  	<input type="hidden" name="id" value="<?= $product->id ?>">
                  	<button type="submit" >Visualizar</button>
                	</form>

                	<form action="/admin/products/edit" method="POST">
                  	<input type="hidden" name="id" value="<?= $product->id ?>">
                  	<button type="submit" class="ml-2 mb-1">Editar</button>
                	</form>

                	<form action="/admin/products/delete" method="POST">
                  	<input type="hidden" name="id" value="<?= $product->id ?>">
                  	<button type="submit" class="ml-2">Excluir</button>
                	</form>
              	</td>
            	</tr>
          	<?php endforeach; ?>
						
					</tbody>
				</table>
			</div>
		</div>

	</main>

	<div class="halftone bottom">
		<img src="../../../public/assets/halftone-effect.svg" alt="">
	</div>
	<div class="halftone top">
		<img src="../../../public/assets/halftone-effect.svg" alt="">
	</div>

	<!--javascript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
		integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
		integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
		crossorigin="anonymous"></script>

</body>

</html>