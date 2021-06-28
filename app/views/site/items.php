<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
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
          <form action="/items" method="POST" class="mb-1" id="my-form">
            <div class="input">
              <input type="text" name="search" id="mysearch" placeholder="Buscar...">
            </div>
            <div type="submit" class="icon"></div>
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

    <?php require("./app/views/includes/pagination.php") ?>

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
    $search = document.querySelector('.search');
    $button = document.querySelector('.icon');
    $form = document.querySelector('#my-form');
    $input = document.querySelector('#mysearch');

    $button.addEventListener('click', () => {
      if($input.value == '') {
        $search.classList.toggle('active');
      } else {
        $form.submit();
      }
    });
  </script>

  <?php require("./app/views/includes/footer.php") ?>

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