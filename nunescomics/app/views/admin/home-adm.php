<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="../../../public/css/global.css">

    <!-- partials -->
    
    

    <meta name="description" content="Fale conosco">

    <title>Admin | Nunes' Comics</title>
</head>

<body>

    <header>
    </header>
    <main>
    <div class="container py-3">
  <header>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Nunes Comic's</h1>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Categorias</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title">Gerenciar Categoria</h1>
            
            <a type="button" href="categories/list" class="w-100 btn btn-lg btn-primary">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Usuários</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title ">Gerenciar Usuários</h1>
            <a type="button" href="users/list" class="w-100 btn btn-lg btn-primary">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Produtos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title ">Gerenciar Produtos</h1>
            <button type="button" class="w-100 btn btn-lg btn-primary">Acessar</button>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
    </main>

    <div class="halftone bottom">
        <img src="../../../public/assets/halftone-effect.svg" alt="">
    </div>
    <div class="halftone top">
        <img src="../../../public/assets/halftone-effect.svg" alt="">
    </div>

    <footer>
    <?php require('../includes/footer.php'); ?>
    </footer>

    <!-- Mascara input Telefone -->
    <script src="../../../public/js/mascaraTel.js"></script>
</body>

</html>