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
      <?php require('app/views/includes/header.php'); ?>
    </header>
    <main>
        <div class="page">
            <div class="logo-page">
                <a href="/"><img src="../../../public/assets/logo.png" alt="logo nunes comics"></a>
            </div>
            <div>
                <h1 class="title-contact font">Entre em Contato</h1>
            </div>
        </div>
        <div class="row">
            <div class="info">
                <form action="/contact/send" method="POST">
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
    <?php require('app/views/includes/footer.php' ); ?>
    </footer>

    <!-- Mascara input Telefone -->
    <script src="../../../public/js/mascaraTel.js"></script>
</body>

</html>