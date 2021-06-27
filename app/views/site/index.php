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
    <?php require("./app/views/includes/navbar.php") ?>
  
    <main>
      <div class="latest">
        <h2>Últimos Lançamentos</h2>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($products as $product) { ?>
              <div class="swiper-slide">
                <form id="items-<?= $product->id ?>" class="form-carousel" name="item" action="item" method="POST">
                  <input value="<?= $product->id ?>" type="hidden" name="id">
                </form>
                <img onClick="sendForm(<?= $product->id ?>)" src="<?= $product->foto ?>" class="comic-cover" alt="">
              </div>
            <?php }; ?>
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
    
    <?php require("./app/views/includes/mask.php") ?>

    <?php require("./app/views/includes/footer.php") ?>
  
  </div>

  <script>
    function sendForm(id) {
      const $form = document.querySelectorAll(`#items-${id}`);
      
      $form[0].submit();
    }
  </script>

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