<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

  <!--icons -->
  <script src="https://kit.fontawesome.com/86afc28056.js" crossorigin="anonymous"></script>

  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../public/css/global.css">
  <link rel="stylesheet" href="../../../public/css/admin-categories.css">

  <title>Admin | Nunes' Comics</title>

  <!--javascript -->
  <script src="../../../public/js/funcoes.js" type="text/javascript">
  </script>
</head>

<body>
  <header>

  </header>

  <main class="d-flex justify-content-center">
    <div class="container">
      <div class="titulo d-flex justify-content-between align-items-center mb-3">
        <h1 class="mb-0">Categorias</h1>
        <a href="/admin/categories/add">
          <button type="button">Novo</button>
        </a>
      </div>
      <table class="table table-borderless mb-0 table-changes">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Categoria</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($categories as $category) : ?>
            <tr>
              <th scope="row"><?= $category->id ?></th>
              <td><?= $category->name ?></td>
              <td class="d-flex justify-content-end flex-wrap">
                <form action="/admin/categories/view" method="GET" class="mb-1">
                  <input type="hidden" name="id" value=<?= $category->id ?>>
                  <button type="submit" >Visualizar</button>
                </form>
                <!-- <a href="/admin/categories/view" class="mb-1">
                  <button type="button" >Visualizar</button>
                </a> -->
                <form action="/admin/categories/edit" method="GET">
                  <input type="hidden" name="id" value=<?= $category->id ?>>
                  <button type="submit" class="ml-2 mb-1">Editar</button>
                </form>
                <!-- <a href="/admin/categories/edit">
                  <button type="button" class="ml-2 mb-1">Editar</button>
                </a> -->
                <form action="/admin/categories/delete" method="POST">
                  <input type="hidden" name="id" value=<?= $category->id ?>>
                  <button type="submit" class="ml-2" onclick="excluir();">Excluir</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>


          <!-- <tr>
            <th scope="row">2</th>
            <td>DC Comics</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Wolverine</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Homem Aranha</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Batman</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">6</th>
            <td>Green Lantern</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>Superman</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>Green Arrow</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>Thor</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Silver Surfer</td>
            <td class="d-flex justify-content-end flex-wrap">
              <a href="./admin-view-category.html">
                <button type="button" class="mb-1">Visualizar</button>
              </a>
              <a href="./admin-edit-category.html">
                <button type="button" class="ml-2 mb-1">Editar</button>
              </a>
              <button type="button" class="ml-2" onclick="excluir();">Excluir</button>
            </td>
          </tr> -->
        </tbody>
      </table>

      <nav aria-label="Page navigation" class="mt-3">
        <ul class="pagination ">
          <li class="page-item">
            <a class="page-link text-dark" href="#" aria-label="Previous" onclick="highlightPreviousButton();">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item active">
            <a class="page-link text-dark" href="#" onclick="highlightButton(this);">1</a>
          </li>
          <li class="page-item">
            <a class="page-link text-dark" href="#" onclick="highlightButton(this);">2</a>
          </li>
          <li class="page-item">
            <a class="page-link text-dark" href="#" onclick="highlightButton(this);">3</a>
          </li>
          <li class="page-item">
            <a class="page-link text-dark" href="#" aria-label="Next" onclick="highlightNextButton();">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </main>

  <div class="halftone bottom">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>
  <div class="halftone top">
    <img src="../../../public/assets/halftone-effect.svg" alt="">
  </div>

  <!--javascript -->
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