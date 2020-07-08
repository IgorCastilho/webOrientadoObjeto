

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
require_once 'Usuario.php';

$usuario = new Usuario();

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


  <div class="form-signin" >
     
      <h1 class="h3 mb-3 font-weight-normal"><center>Usuários</center></h1>
     

      <table class="table table-hover" width="100%" border="5" bordercolor="#EEE" cellspacing="0" cellpadding="10">

			<thhead>
				<tr>
					<td> <strong> ID </strong></td>
					<td> <strong> Nome de usuário </strong></td>
					<td> <strong> CPF </strong></td>
		
				</tr>
			</thhead>

<?php foreach($usuario->verTudo() as $key => $value): ?>

			<tbody>
				<tr>
	  				<td> <?php echo $value->id; ?> </td>
	  				<td> <?php echo $value->nomeUser; ?> </td>
	  				<td> <?php echo $value->cpf; ?> </td>

                      
</tr>
</tbody>
<?php endforeach; ?>
</table>

      
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