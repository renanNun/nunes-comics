<header>
  <nav id="navbar">
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
      <img src="../../../public/assets/hamburger-menu.svg" alt="">
    </label>
    <label class="logo">
      <a href="/"><img src="../../../public/assets/logo.png" alt=""></a>
    </label>
    <ul>
      <li><a class="<?= $view_page == '/' ? "active" : "" ?>" href="/">Home</a></li>
      <li><a class="<?= $view_page == '/about' ? "active" : "" ?>" href="./about">Quem Somos</a></li>
      <li><a class="<?= $view_page == '/items' ? "active" : "" ?>" href="./items">Produtos</a></li>
      <li><a class="<?= $view_page == '/contact' ? "active" : "" ?>" href="./contact">Contato</a></li>
    </ul>
  </nav>
</header>