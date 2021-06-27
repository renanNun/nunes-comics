<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

  <!-- css -->
  <link rel="stylesheet" href="../../../public/css/global.css">
  <link rel="stylesheet" href="../../../public/css/items.css">

  <!-- partials -->
  <link rel="stylesheet" href="../../../public/css/navbar.css">
  <link rel="stylesheet" href="../../../public/css/footer.css">

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title>Produtos | Nunes' Comics</title>
</head>

<body>

  <?php require("./app/views/includes/navbar.php") ?>
  
  <main>

    <section>
      <header>
        <div class="categories">
          <ul>
            <?php foreach($categories as $category) { ?>
              <li class="list">
                <form action="/items" method="POST" class="mb-1">
                  <input type="hidden" name="category" value="<?= $category->id ?>">
                  <?php if($category->id == $active) { ?>
                    <button class="active" type="submit"><?= $category->nome ?></button>
                  <?php } else { ?>
                    <button type="submit"><?= $category->nome ?></button>
                  <?php }; ?>
                </form>
              </li>
            <?php }; ?>
          </ul>
        </div>
        <div class="search">
          <form action="/items" method="POST" class="mb-1">
            <div class="input">
              <input type="text" name="search" id="mysearch" placeholder="Buscar...">
            </div>
            <button type="submit" class="icon"></button>
          </form>
        </div>
      </header>

      <div class="products">
        <?php foreach($products as $product) { ?>
          <div class="itemBox" data-item="marvel wolverine">
            <div class="imgBox">
              <img src="<?= "$product->foto" ?>" alt="">
            </div>
            <div class="details">
              <div class="info">
                <h3>R$<?= "$product->preco" ?></h3>
                <p><span>Nome:</span> <?= "$product->name" ?></p>
                <p><span>Quantidade:</span> <?= "$product->estoque" ?></p>
                <p><span>Preço:</span> R$<?= "$product->preco" ?></p>
              </div>
              <form action="/item" method="POST">
                <input type="hidden" name="id" value="<?= $product->id ?>">
                <button type="submit">Ver Produto</button>
              </form>
            </div>
          </div>
        <?php }; ?>
    </section>

  </main>

  <?php require("./app/views/includes/mask.php") ?>

  <!-- filter -->
  <script>
    const list = document.querySelectorAll('.list');
    const itemBox = document.querySelectorAll('.itemBox');

    for (let i = 0; i < list.length; i++) {
      list[i].addEventListener('click', function() {
        for (let j = 0; j < list.length; j++) {
          list[j].classList.remove('active');
        }
        this.classList.add('active');

        let dataFilter = this.getAttribute('data-filter');

        for (let k = 0; k < itemBox.length; k++) {
          itemBox[k].classList.remove('active');
          itemBox[k].classList.add('hide');

          // debug
          console.log(itemBox[k].getAttribute('data-item'));

          if (itemBox[k].getAttribute('data-item').includes(dataFilter) || dataFilter == 'all') {
            itemBox[k].classList.remove('hide');
            itemBox[k].classList.add('active');
          }
        }

      })
    }
  </script>

  <!-- search -->
  <script>
    const $icon = document.querySelector('.icon');
    const $search = document.querySelector('.search');

    $icon.addEventListener('click', () => {
      $search.classList.toggle('active');
    })
  </script>

  <?php require("./app/views/includes/footer.php") ?>

</body>

</html>