<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="shortcut icon" href="../../../public/assets/favicon.ico" type="image/x-icon">

		<!-- css -->
		<link rel="stylesheet" href="../../../public/css/global.css">
		<link rel="stylesheet" href="../../../public/css/about.css">

		<!-- partials -->
		<link rel="stylesheet" href="../../../public/css/navbar.css">
		<link rel="stylesheet" href="../../../public/css/footer.css">

		<title>Quem Somos | Nunes' Comics</title>
	</head>

	<body>

		<?php require("./app/views/includes/navbar.php") ?>
		<!-- <header>
      <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <img src="../public/assets/hamburger-menu.svg" alt="">
        </label>
        <label class="logo">
          <a href="/"><img src="../public/assets/logo.png" alt=""></a>
        </label>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a class="active" href="#">Quem Somos</a></li>
          <li><a href="/items">Produtos</a></li>
          <li><a href="/contact">Contato</a></li>
        </ul>
      </nav>
		</header> -->

  		<main>

		    <div class="info">

		    	<div class="content">

						<h1> Quem Somos </h1>

						<p>Somos uma comunidade de fãs apaixonados pela cultura Geek que compartilha nossa paixão através de nossos produtos.</p>
						<p>Especializada em quadrinhos e mangás, a Nunes' Comics possuí um acervo que segue as tendências de mercado para atender as expectativas de nossos clientes.</p>
						<p>Nossa missão é&ensp;<span>Estimular a leitura de forma divertida</span> .</p>

						<h1>Nossa História</h1>

						<p>Fundada em 2021 por alunos da UFJF, a Nunes' Comics nasceu com a idéia de levar os produtos que antes eram comercializados apenas para alunos da instituição para o online.</p>
						<p>A visão era levar esses momentos de diversão, em forma de produtos, para todo o Brasil. Hoje isso já se tornou realidade.</p>

						<center>
						<table width="1000" height="250">
							<tr>	
								<td rowspan="2" class="imagem1"><img src="../../../public/img/fundadores.jpg" alt=""></td>	
								<td class="imagem2"><img src="../../../public/img/acervo.jpg" alt=""></td>
							</tr>
							<tr>											
								<td class="imagem3"><img src="../../../public/img/fundadoresAtual.jpg" alt=""></td>
							</tr>
						</table>
						<p class="legenda-grid legenda-imagens">Foto 1: Fundadores em 2021 | Foto 2: Primeiro acervo | Foto 3: Fundadores atualmente</p>

						<div class="imgs-mobile">
							<p class="legenda-imagens">Foto 1: Fundadores em 2021</p>
							<img src="../../../public/img/fundadores.jpg"/>
							<p class="legenda-imagens">Foto 2: Primeiro acervo</p>
							<img src="../../../public/img/acervo.jpg"/>
							<p class="legenda-imagens">Foto 3: Fundadores atualmente</p>
							<img src="../../../public/img/fundadoresAtual.jpg"/>
						</div>
						</center>

						<h1>Nossos Valores</h1>

						<ul>
							<li>Ética e transparência</li>
							<li>Compromisso com o crescimento e resultados</li>
							<li>Paixão</li>
							<li>Qualidade</li>
						</ul>

						<h1>Clientes</h1>

						<p>Veja o que nossos clientes tem a dizer:</p>
						<p>"Foi a melhor experiência de compras de HQ's pela internet, todo processo de compra foi muito rápido e os quadrinhos chegaram muito bem embalados. Recomendo este site."</p>
						<p class="nome-cliente">-Anna Julia Freitas</p>

						<p>"Eu amei meus quadrinhos!!! Com certeza comprarei novamente."</p>
						<p class="nome-cliente">- Marisa Dutra</p>

						<p>"Comprei de presente para meu filho e ele adorou. Estou satisfeito com a compra."</p>
						<p class="nome-cliente">-Carlos F. Lemos</p>

	      	</div>

    		</div>

  		</main>

		<?php require("./app/views/includes/mask.php") ?>

		<?php require("./app/views/includes/footer.php") ?>


	</body>

</html>