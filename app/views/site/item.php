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
  
  <title>(Nome do produto) | Nunes' Comics</title>
</head>
<body>

  <header>
    <?php require('app/views/includes/header.php') ?>
  </header>

  <main>
    <div class="container">
      <section class="info">
        <div class="image">
          <img src="../../../public/img/item3.jpg" alt="">
        </div>
        <div class="details">
          <h3>Superman</h3>
          <p><span>Título:</span><br> Action Comics #1</p>
          <p><span>Categoria:</span><br> Junho, 1938</p>
          <p>
            <span>Descrição:</span><br> Primeira história em quadrinhos que conta
            com a aparição de Superman.
          </p>
          <p><span>Valor:</span><br> R$7.000.000,00</p>
        </div>
      </section>
      <section class="actions">
        <div class="buy">
          <button>Comprar</button>
        </div>
      </section>
    </div>
  </main>

  <div class="halftone bottom">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>
  <div class="halftone top">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>

  <footer>
      <?php require('app/views/includes/header.php') ?>
  </footer>
  
</body>
</html>