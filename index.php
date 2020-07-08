<?php

require_once 'Login.php';

if(isset($_SESSION['logado'])){
	header("Location: painel.php");exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>CRUD</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/relsheet.css" rel="stylesheet">

    <script src="js/js.js"></script>
  </head>
  <?php

  $logar = new Login();
  if (isset($_POST["logar"])) {
    try{
      if ($logar->logar($_POST["nomeUser"],($_POST["senha"]))) {
        header("location: painel.php");
      }
      else{
        echo '<script> erroLogar() </script>';
      }
    } catch(PDOException $e){
      echo $e;
    }
  		 }?>


  <body>
      
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F2FBEF;">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Início<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>

    </ul>
  
  </div>
</nav>


  <form class="form-signin" method="POST" action="">
      
      <h1 class="h3 mb-3 font-weight-normal"><center>Faça login</center></h1>
      <label class="sr-only">Endereço de email</label>
      <input type="text" id="nomeUser" name="nomeUser" class="form-control" placeholder="Seu usuário" required autofocus>
      <label class="sr-only">Senha</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Lembrar de mim
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="logar">Login</button>
      
    </form>
    <div class="form-signin">
    <label style="padding-top: 10%;">É novo por aqui?</label>
      <button class="btn btn-lg btn-primary btn-block" onclick="cadastroUsuario()">Cadastre-se</button>
    </div>



    <!-- jQuery (obrigatório para plugins JavaScript do Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Inclui todos os plugins compilados (abaixo), ou inclua arquivos separadados se necessário -->
    <script src="js/bootstrap.min.js"></script>
  </body>
     <!-- Footer -->
     <footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">Desenvolvido por Igor Castilho
  <a href="https://mdbootstrap.com/"> igorcvalenciano@gmail.com</a>
</div>
<!-- Copyright -->

</footer>
</html>