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
        <a href="./index"><img src="../../../public/assets/logo.png" alt=""></a>
      </label>
      <ul>
        <li><a href="./index">Home</a></li>
        <li><a href="./about">Quem Somos</a></li>
        <li><a class="active" href="#">Produtos</a></li>
        <li><a href="./contact">Contato</a></li>
      </ul>
    </nav>
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