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

  <header>
    <?php require('../includes/header.php'); ?>
  </header>

  <main>

    <section>
      <header>
        <div class="categories">
          <ul>
            <li class="list active" data-filter="all">Todos</li>
            <li class="list" data-filter="marvel">Marvel</li>
            <li class="list" data-filter="dc">DC</li>
            <li class="list" data-filter="wolverine">Wolverine</li>
            <li class="list" data-filter="spider-man">Homem Aranha</li>
            <li class="list" data-filter="batman">Batman</li>
            <li class="list" data-filter="green-lantern">Green Lantern</li>
            <li class="list" data-filter="superman">Superman</li>
            <li class="list" data-filter="green-arrow">Green Arrow</li>
            <li class="list" data-filter="thor">Thor</li>
            <li class="list" data-filter="silver-surfer">Silver Surfer</li>
            <li class="list" data-filter="captain-america">Captain America</li>
            <li class="list" data-filter="captain-marvel">Captain Marvel</li>
            <li class="list" data-filter="human-torch">Human Torch</li>
          </ul>
        </div>
        <div class="search">
          <div class="icon"></div>
          <div class="input">
            <input type="text" name="" id="mysearch" placeholder="Buscar...">
          </div>
        </div>
      </header>

      <div class="products">
        <div class="itemBox" data-item="marvel wolverine">
          <div class="imgBox">
            <img src="../../../public/img/item1.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Wolverine</h3>
              <p><span>Nome:</span> Wizard</p>
              <p><span>Quantidade:</span> 7</p>
              <p><span>Preço:</span> R$23,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="dc green-lantern green-arrow">
          <div class="imgBox">
            <img src="../../../public/img/item2.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Green Lantern</h3>
              <p><span>Nome:</span> Green Lantern and Green Arrow</p>
              <p><span>Quantidade:</span> 3</p>
              <p><span>Preço:</span> R$19,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="dc superman">
          <div class="imgBox">
            <img src="../../../public/img/item3.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Superman</h3>
              <p><span>Nome:</span> Action Comics #1</p>
              <p><span>Quantidade:</span> 1</p>
              <p><span>Preço:</span> R$7.000,00</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="marvel thor">
          <div class="imgBox">
            <img src="../../../public/img/item4.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Thor</h3>
              <p><span>Nome:</span> The Once and Future</p>
              <p><span>Quantidade:</span> 6</p>
              <p><span>Preço:</span> R$23,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="marvel wolverine spider-man">
          <div class="imgBox">
            <img src="../../../public/img/item5.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Wolverine</h3>
              <p><span>Nome:</span> vs Spider-Man</p>
              <p><span>Quantidade:</span> 1</p>
              <p><span>Preço:</span> R$23,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="marvel human-torch">
          <div class="imgBox">
            <img src="../../../public/img/item6.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Human Torch</h3>
              <p><span>Nome:</span> The Blazing Mag</p>
              <p><span>Quantidade:</span> 5</p>
              <p><span>Preço:</span> R$23,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="marvel silver-surfer">
          <div class="imgBox">
            <img src="../../../public/img/item7.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Silver Surfer</h3>
              <p><span>Nome:</span> Sentinel of the Spaceways</p>
              <p><span>Quantidade:</span> 2</p>
              <p><span>Preço:</span> R$23,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="dc batman">
          <div class="imgBox">
            <img src="../../../public/img/item8.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Batman</h3>
              <p><span>Nome:</span> '66</p>
              <p><span>Quantidade:</span> 1</p>
              <p><span>Preço:</span> R$39,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="marvel captain-america">
          <div class="imgBox">
            <img src="../../../public/img/item9.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Captain America</h3>
              <p><span>Nome:</span> Living Legend</p>
              <p><span>Quantidade:</span> 8</p>
              <p><span>Preço:</span> R$23,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
        <div class="itemBox" data-item="marvel captain-marvel">
          <div class="imgBox">
            <img src="../../../public/img/item10.jpg" alt="">
          </div>
          <div class="details">
            <div class="info">
              <h3>Green Lantern</h3>
              <p><span>Nome:</span> Earth's Mightest Hero</p>
              <p><span>Quantidade:</span> 2</p>
              <p><span>Preço:</span> R$38,90</p>
            </div>
            <a href="./item.html">Ver Produto</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <div class="halftone bottom">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>
  <div class="halftone top">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>

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

  <footer>
  <?php require('../includes/footer.php'); ?>
  </footer>

</body>

</html>