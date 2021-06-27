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
  
  <title>Produto | Nunes' Comics</title>
</head>
<body>

  <?php require("./app/views/includes/navbar.php") ?>
  <!-- <header>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <img src="../../../public/assets/hamburger-menu.svg" alt="">
      </label>
      <label class="logo">
        <a href="/"><img src="../../../public/assets/logo.png" alt=""></a>
      </label>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">Quem Somos</a></li>
        <li><a href="/items">Produtos</a></li>
        <li><a href="/contato">Contato</a></li>
      </ul>
    </nav>
  </header> -->

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