<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="../../../public/css/global.css">
    <link rel="stylesheet" href="../../../public/css/contato.css">

    <!-- partials -->
    <link rel="stylesheet" href="../../../public/css/navbar.css">
    <link rel="stylesheet" href="../../../public/css/footer.css">

    <meta name="description" content="Fale conosco">

    <title>Contato | Nunes' Comics</title>
</head>

<body>

    <header>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <img src="../../../public/assets/hamburger-menu.svg" alt="">
        </label>
        <label class="logo">
          <a href="/"><img src="../public/assets/logo.png" alt=""></a>
        </label>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">Quem Somos</a></li>
          <li><a href="/items">Produtos</a></li>
          <li><a class="active" href="#">Contato</a></li>
        </ul>
      </nav>
    </header>
    <main>
        <div class="page">
            <div class="logo">
                <a href="index.html"><img src="../../../public/assets/logo.png" alt="logo nunes comics"></a>
            </div>
            <div>
                <h1 class="title-contact font">Entre em Contato</h1>
            </div>
        </div>
        <div class="row">
            <div class="info">
                <form action="">
                    <div>
                        <label for="Nome" class="font">Nome:</label>
                        <input type="text" autofocus required="required" name="nome" id="nome"
                            placeholder="Informe seu nome">
                    </div>

                    <div>
                        <label for="Telefone" class="font">Telefone:</label>
                        <input type="text" class="telefone" name="telefone" required="required" maxlength="17"
                            id="telefone" placeholder="(99) 9 9999-9999">
                    </div>

                    <div>
                        <label for="Email" class="font">E-mail:</label>
                        <input type="email" required="required" name="email" id="email" placeholder="nome@exemplo.com">
                    </div>

                    <div>
                        <label for="Assunto" class="font">Assunto:</label>
                        <input type="text" class="form-control" required="required" name="assunto" id="assunto"
                            placeholder="Assunto">
                    </div>

                    <div>
                        <label for="Textarea" class="font">Mensagem:</label>
                        <textarea style="resize:none;" name="textarea" id="textarea" required="required" rows="3"
                            placeholder="Digite sua mensagem aqui."></textarea>
                    </div>

                    <div>
                        <button type="submit" class="font" name="con-enviar" id="con-enviar">
                            <span class="font-contact">Enviar mensagem</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="socials">
                <h3 class="font">Nossas Redes</h3>
                <div class="font">
                    <a href="https://www.facebook.com">
                        <i>
                            <img src="https://img.icons8.com/ios/48/000000/facebook-new--v1.png" />
                        </i>
                        <span>/nunescomics</span>
                    </a>

                    <a href="https://www.instagram.com">
                        <i>
                            <img src="https://img.icons8.com/ios/48/000000/instagram-new--v1.png" />
                        </i>
                        <span>@nunescomics</span>
                    </a>

                    <a href="https://www.twitter.com">
                        <i>
                            <img src="https://img.icons8.com/ios/48/000000/twitter--v1.png" />
                        </i>
                        <span>@nunescomics</span>
                    </a>
                </div>
            </div>
            <div class="map">
                <iframe loading="lazy" allowfullscreen
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29642.271456992898!2d-43.37174002049676!3d-21.76926947850989!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989b9e2bea807b%3A0x7ac85ca76e3d3d1d!2sCode%20Jr.!5e0!3m2!1spt-BR!2sbr!4v1580241016764!5m2!1spt-BR!2sbr">
                </iframe>
            </div>
        </div>
    </main>

    <div class="halftone bottom">
        <img src="../../../public/assets/halftone-effect.svg" alt="">
    </div>
    <div class="halftone top">
        <img src="../../../public/assets/halftone-effect.svg" alt="">
    </div>

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

    <!-- Mascara input Telefone -->
    <script src="../../../public/js/mascaraTel.js"></script>
</body>

</html>