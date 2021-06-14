<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

  <!-- carousel -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  
  <!-- css -->
  <link rel="stylesheet" href="../../../public/css/global.css">
  <link rel="stylesheet" href="../../../public/css/home.css">

  <!-- partials -->
  <link rel="stylesheet" href="../../../public/css/navbar.css">
  <link rel="stylesheet" href="../../../public/css/footer.css">

  <title>Home | Nunes' Comics</title>
</head>
<body>

  <div class="wrap">
    <header>
        <?php include('app/views/includes/header.php'); ?>
    </header>
  
    <main>
      <div class="latest">
        <h2>Últimos Lançamentos</h2>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="../../../public/img/item10.jpg" class="comic-cover" alt=""></div>
            <div class="swiper-slide"><img src="../../../public/img/item5.jpg" class="comic-cover" alt=""></div>
            <div class="swiper-slide"><img src="../../../public/img/item6.jpg" class="comic-cover" alt=""></div>
            <div class="swiper-slide"><img src="../../../public/img/item7.jpg" class="comic-cover" alt=""></div>
            <div class="swiper-slide"><img src="../../../public/img/item8.jpg" class="comic-cover" alt=""></div>
            <div class="swiper-slide"><img src="../../../public/img/item11.jpg" class="comic-cover" alt=""></div>
            <div class="swiper-slide"><img src="../../../public/img/item12.jpg" class="comic-cover" alt=""></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
  
      <div class="info">
        <div class="content">
          <h3>Teste</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, amet ab! Dolorem eveniet eos deleniti? Molestias, quibusdam. Voluptatibus vel fugiat doloribus dolore quo dolorum, temporibus repudiandae debitis, aut atque ad. Fuga iste sint voluptatem, magni, asperiores nam doloribus quis quae labore animi temporibus tempora aliquam repudiandae. Hic, autem quis? Sapiente.</p>
          <h3>Teste</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eveniet at, in repudiandae obcaecati ab, modi cupiditate assumenda aspernatur eaque dolore deserunt vero id architecto aliquam amet quaerat optio nostrum!</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati asperiores cupiditate, enim aperiam, a provident, quasi dolor laudantium unde magni quod mollitia quam laborum distinctio ipsa minus porro amet dignissimos.</p>
          <h3>Teste</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eveniet at, in repudiandae obcaecati ab, modi cupiditate assumenda aspernatur eaque dolore deserunt vero id architecto aliquam amet quaerat optio nostrum!</p>
          <h3>Teste</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid eveniet at, in repudiandae obcaecati ab, modi cupiditate assumenda aspernatur eaque dolore deserunt vero id architecto aliquam amet quaerat optio nostrum!</p>
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
      <?php require('app/views/includes/footer.php'); ?>
    </footer>
  
  </div>

  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },

      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },

      loop: true,
    });
  </script>

</body>
</html>