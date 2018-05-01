<?php

require("conectar.php");

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
   
    <div id="banner"> <img src="assets/images/banner.jpg" </div>



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
            <li><a href="#">Game 1</a></li>
            <li><a href="#">Game 2</a></li>
            <li><a href="#">Game 3</a></li>
          </ul>
        </li>
	      </ul>	 

	       <div class="nav navbar-form navbar-right">

	       		<form class="form-inline" action="index.php" method="post">
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputEmail3">Username</label>
					    <input type="text" name="username" class="form-control" id="exampleInputEmail3" placeholder="Username">
					  </div>
					  <div class="form-group">
					    <label class="sr-only" for="exampleInputPassword3">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-default">Sign in</button>
				</form>

				<?php

					if(!empty($_POST))
					{
						if(!empty($_POST['username']) && !empty($_POST['password']))
						{

							if($_POST['username'] == "admin" && $_POST['password'] == "12345")
							{
								setcookie("usuario", md5($_POST['username']));
								setcookie("senha", md5($_POST['password']));

								header("Location: main.php");
							}
							else
							{

								echo "You don't have permission to login.";
							}


						}

					}

				?>

	       </div>


	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->



	</nav>
	</header>



	<main>

		<section class="row">


			<section class="col-md-4">

				<header> <img src="assets/images/news.png"> </header>

				<article>

						
						<?php

							$sql = "SELECT * FROM postar";



							$arr = mysql_fetch_array(mysql_query($sql));

							echo "<h4>" . $arr["titulo"] . "</h4>";
							echo $arr["texto"];

						?>


				<article>
			
			</section>

			<section class="col-md-8">

					<header> <img src="assets/images/newestgames.png"> </header>

				<section class="row" id="img">
				
				<?php

					$dados = mysql_query("SELECT*FROM up ORDER BY id DESC");

					$count = 0;

					while($arr = mysql_fetch_array($dados))
					{
						$count++;
						$nome = $arr['name'];
						$caminho = $arr['caminho'];

						if($count >3)
						{
							echo "</section>";
							echo "<section class='row' id='img'>";
							echo "<section class='col-md-4'><a href='". $caminho . "'><img src='assets/images/" . $nome . "'></section>";
							$count = 0;
							$count++;

						}
						else
						{
							echo "<section class='col-md-4'><a href='". $caminho . "'><img src='assets/images/" . $nome . "'></section>";
						}
					}

				?>



			</section>

		</section>
		
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

<?php

mysql_close($connect);

?>

