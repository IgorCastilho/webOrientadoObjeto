
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
require_once 'Produto.php';

if(isset($_POST['cadastrar'])){
    
    $produto = new Produto();
	$titulo = $_POST['titulo'];
	$valor = $_POST['valor'];
	$quantidade = $_POST['quantidade'];


	$produto->setTitulo($titulo);

	$produto->setValor($valor);

	$produto->setQuantidade($quantidade);


	if($produto->insert()){
    echo '<script> inseriuSucesso() </script>';
	}


}

?>

  <body>
      
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #F2FBEF;">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início<span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sobre</a>
      </li>

    </ul>
  
  </div>
</nav>


  <form class="form-signin" action="" method="POST">
     
      <h1 class="h3 mb-3 font-weight-normal"><center>Produtos</center></h1>
      <label class="sr-only">Título</label>
      <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título" required autofocus>
      &nbsp;
      <label class="sr-only">Valor</label>
      <input type="text" id="valor" name="valor" class="form-control" placeholder="Valor do produto" required autofocus>
      &nbsp;
      <label class="sr-only">Quantidade</label>
      <input type="number" id="quantidade" name="quantidade" class="form-control" placeholder="Quantidade" required>
      &nbsp;
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="cadastrar">Inserir</button>
      
    </form>
    



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