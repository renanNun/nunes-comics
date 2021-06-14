<!DOCTYPE html>
<html>
	
	<head>
	<title>Login</title>
	<meta charset="utf-8">

    <!--Importações-->
    <link rel="stylesheet" href="../../../public/css/login.css"> 

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

	</head>

<body>

    <header>
        <?php require('app/views/includes/header.php')?>
    </header>
		
     <div class="container-login">
		
        <div class="tela-login">
  			
             <h1>Login</h1>
    
            <div class="input-field">
               
                <input type="text" class="form-control" id="E-mail" placeholder="">
                <label for="email">E-mail</label>
    
            </div> 	

            <div class="input-field">
             
     		    <input type="password" class="form-control" id="Senha" placeholder="">
                <label for="senha">Senha</label>
    
            </div> 

            <div class="center">
    			
                <button>Entrar</button>
  			 
            </div>
 			
 		    <div class="links">
  				
  				<a  href="#"><p>Novo, por aqui? Regitre-se.</p></a>
  				<a  href="#"><p>Esqueceu a senha?</p></a>
      
            </div>
		
        </div>
    </div>

	<div class="halftone bottom">
        <img src="../../../public/assets/halftone-effect.svg" alt="">
    </div>

    <div class="halftone top">
        <img src="../../../public/assets/halftone-effect.svg" alt="">
    </div>

    <footer>
        <?php require('app/views/includes/footer.php')?>
    </footer>
    
</body>

</html>