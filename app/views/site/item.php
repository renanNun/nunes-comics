<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

  <!-- css -->
  <link rel="stylesheet" href="../../../public/css/global.css">
  <link rel="stylesheet" href="../../../public/css/item.css">

  <!-- partials -->
  <link rel="stylesheet" href="../../../public/css/navbar.css">
  <link rel="stylesheet" href="../../../public/css/footer.css">
  
  <title><?= $product->name ?> | Nunes' Comics</title>
</head>
<body>

  <?php require("./app/views/includes/navbar.php") ?>

  <main>
    <div class="container">
      <section class="info">
        <div class="image">
          <img src="<?= $product->foto ?>" alt="">
        </div>
        <div class="details">
          <h3><?= $product->name ?></h3>
          <p><span>Título:</span><br><?= $product->name ?></p>
          <p><span>Categorias:</span><br> <?= $category->nome ?></p>
          <p>
            <span>Descrição:</span><br> 
            <?= $product->description ?>
          </p>
          <p><span>Valor:</span><br> <?= $product->preco ?></p>
        </div>
      </section>
      <section class="actions">
        <div class="buy">
          <button>Comprar</button>
        </div>
      </section>
    </div>
  </main>

  <?php require("./app/views/includes/mask.php") ?>

  <?php require("./app/views/includes/footer.php") ?>
  
</body>
</html>