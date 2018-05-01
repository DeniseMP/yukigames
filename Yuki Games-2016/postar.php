<?php

	$username = $_COOKIE["usuario"];
	$senha = $_COOKIE["senha"];

	if($username != md5("admin") && $senha != md5("12345"))
	{

		header("Location: index.php");
	}
	else{

		require("conectar.php");
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nise Games - games for girls</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/estilo.css">

</head>
<body>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="assets/javascript/bootstrap.min.js"></script>

	<header class="topo">
   
    <div id="banner"><img src="assets/images/banner.jpg" alt="Logo"></div>



	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Menu</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li ><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="about.html">About</a></li>
	        <li><a href="contato.php">Contact</a></li>

	        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="game1.html">Dress Up Game 1</a></li>
            <li><a href="game2.html">Dress Up Game 2</a></li>
            <li><a href="game3.html">Dress Up Game 3</a></li>
          </ul>
        </li>
	      </ul>	   
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	</header>



	<main>
		
		<sction class="row">

			<section class="col-md-4 col-xs-2">

			</section>

			<section class="col-md-4" id="main">

				<form action="postar.php" method="post">


					  <div class="form-group">

					   	<label for="Título">Título</label>
					    <input type="text" class="form-control" id="text" name="titulo" placeholder="Título">

					  </div>

					  <div class="form-group">

					  <label for="comment">Texto</label>
					  <textarea class="form-control" name="message" id="message" rows="5" cols="20"></textarea>

					  </div>

					  <button type="submit" class="btn btn-default">Submit</button>

				</form>

		<?php

			if(!empty($_POST))
			{
				if(!empty($_POST["titulo"]) && !empty($_POST["message"]))
				{
					$titulo = $_POST["titulo"];
					$texto = $_POST["message"];

					$sqldelete = "TRUNCATE TABLE postar";

					mysql_query($sqldelete)or die("Não foi possível apagar");

					$sqlinsert = "INSERT INTO postar(titulo,texto)VALUES('$titulo','$texto')";

					mysql_query($sqlinsert)or die("Não foi possível inserir os dados");


					echo "Post efetuado com sucesso!";

					mysql_close($connect);
				}
				else{

					echo "Preencha todos os campos!";
				}
			}

		?>
			
			<br><a href="main.php"><img src="assets/images/retornar.png"></a>
				
			

			</section>

			<section class="col-md-4 col-xs-2">

			</section>

		</sction>
		
	</main>


<footer>

	<section class="row">
			
			<section class="col-md-12">

				<p>Site desenvolvido em 23.06.2016 para a disciplina de Autoria e Design para Internet da professora Flavia de Carvalho.<p>
				<p>Aluna: Denise Moraes Pinho<p>

			</section>

	<section class="row">

			<section class="col-md-12">

			</section>

	</section>

			
	<section class="row">

			<section class="col-md-12">

				
				<a href="http://www.faccat.com.br/"><img src="assets/images/logofaccat.png"></a>

			</section>

	</section>

</footer>



</body>
</html>

