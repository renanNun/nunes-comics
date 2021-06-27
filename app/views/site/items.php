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
        <li><a class="active" href="#">Produtos</a></li>
        <li><a href="/contact">Contato</a></li>
      </ul>
    </nav>
  </header>
  
  <main>

    <section>
      <header>
        <div class="categories">
          <ul>
            <?php foreach($categories as $category) { ?>
              <li class="list">
                <form action="/items" method="POST" class="mb-1">
                  <input type="hidden" name="category" value="<?= $category->id ?>">
                  <button type="submit"><?= $category->nome ?></button>
                </form>
              </li>
            <?php }; ?>
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
              <form action="/item" method="POST" class="mb-1">
                <input type="hidden" name="id" value="<?= $product->id ?>">
                <button type="submit">Visualizar</button>
              </form>
            </div>
          </div>
        <?php }; ?>
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

    for(let i = 0; i < list.length; i++) {
      list[i].addEventListener('click', function() {
        for(let j = 0; j < list.length; j++) {
          list[j].classList.remove('active');
        }
        this.classList.add('active');

        let dataFilter = this.getAttribute('data-filter');

        for(let k = 0; k < itemBox.length; k++) {
          itemBox[k].classList.remove('active');
          itemBox[k].classList.add('hide');

          // debug
          console.log(itemBox[k].getAttribute('data-item'));

          if(itemBox[k].getAttribute('data-item').includes(dataFilter) || dataFilter == 'all') {
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
    <div class="light-bar">
      <div class="logo-image">
        <img src="../../../public/assets/logo.png" alt="Logo">
      </div>
      <span class="vertical-line"></span>
      <div class="content">
        <div class="section-container">
          <div class="section">
            <h3>Quem somos</h3>
            <p>Uma comunidade de fãs apaixonados pela cultura geek, desde 2021 estimulando a leitura de forma divertida!
            </p>
          </div>
          <div class="section">
            <h3>Formas de pagamento</h3>
            <div class="payment-icons">
              <img src="../../../public/assets/icons/boleto.png" alt="Boleto">
              <img src="../../../public/assets/icons/picpay.png" alt="Picpay">
              <img src="../../../public/assets/icons/mastercard.png" alt="Mastercard">
              <img src="../../../public/assets/icons/visa.png" alt="Visa">
            </div>
          </div>
        </div>
        <div class="section-container">
          <div class="section">
            <h3>Conheça-nos</h3>
            <p>Siga-nos nas redes sociais e visite a nossa sede!</p>
          </div>
          <div class="section">
            <h3>Atendimento</h3>
            <p>Segunda à Sexta das 08h às 20h.</p>
          </div>
        </div>
      </div>
      <span class="vertical-line"></span>
      <div class="map">
        <iframe title="Mapa"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4406.116547176471!2d-43.37168363775818!3d-21.776870042397707!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9f99b33491%3A0xd9b48a8f80341c0d!2sUniversidade%20Federal%20de%20Juiz%20de%20Fora!5e0!3m2!1spt-BR!2sbr!4v1620756312303!5m2!1spt-BR!2sbr"
          allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
    <div class="dark-bar">
      <div class="social">
        <a href="https://www.facebook.com/nunescomics/" target="_blank" rel="noopener noreferrer">
          <img src="../../../public/assets/icons/facebook-icon.svg" alt="Facebook">
        </a>
        <a href="https://www.instagram.com/nunes.comics/" target="_blank" rel="noopener noreferrer">
          <img src="../../../public/assets/icons/instagram-icon.svg" alt="Instagram">
        </a>
        <a href="https://twitter.com/ComicsNunes" target="_blank" rel="noopener noreferrer">
          <img src="../../../public/assets/icons/twitter-icon.svg" alt="Twitter">
        </a>
        <a href="https://br.pinterest.com/nunescomics/" target="_blank" rel="noopener noreferrer">
          <img src="../../../public/assets/icons/pinterest-icon.svg" alt="Pinterest">
        </a>
      </div>
      <div class="contact">
        <div class="phone">
          <img src="../../../public/assets/icons/phone.svg" alt="Telefone">
          <span>+55 32 99999-9999 ou 3333-3333</span>
        </div>
        <div class="email">
          <img src="../../../public/assets/icons/email.svg" alt="Email">
          <span>nunescomics@gmail.com</span>
        </div>
      </div>
      <div class="address">
        <img src="../../../public/assets/icons/map-marker.svg" alt="Marcador de mapa">
        <span>Rua José Lourenço Kelmer, UFJF, Instituto de Ciências Exatas, sala 3313</span>
      </div>
    </div>
  </footer>

</body>
</html>