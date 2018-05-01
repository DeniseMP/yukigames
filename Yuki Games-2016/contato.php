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

			<section class="col-md-4"></section>
			
			<section class="col-md-4" id="form">

				<form action="contato.php" method="post">

					  <div class="form-group">

					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <label for="exampleInputName">Name</label>
					    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
					  </div>
					  <div class="form-group">
					    <label for="radiogroup"> Your Age </label><br>
					      <input type="radio" name="age" value="lessthan5"> Less than 5 <br>
					      <input type="radio"  name="age" value="5-10"> 5 - 10 <br>
					      <input type="radio"  name="age" value="10-15"> 10 - 15<br>
					      <input type="radio"  name="age" value="olderthan15"> Older than 15<br>
					  </div>
					  <div class="form-group">
					  <label for="comment">Your message</label>
					  <textarea class="form-control" name="message" id="message" rows="5" cols="20"></textarea>
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					  </form>

					  <?php 

							if(!empty($_POST) ){

									if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['age']) && !empty($_POST['message']))
									{

											$mensagem = "E-mail: " . $_POST['email']."\n";
											$mensagem.= "Nome: " . $_POST['name']."\n";
											$mensagem.= "Idade: " . $_POST["age"] . "\n";
											$mensagem.= "Mensagem: " .$_POST["message"] ."\n";

											$envia = mail("denisemp_contato@hotmail.com", "Nise Games", $mensagem);

											if($envia == true)
											{
												echo "Your message has been sent successfully";
											}
											else
											{
												echo "Delivery has failed";
											}
									}
									else
									{
											if(empty($_POST['name']))
											{
												echo "*Name field must be filled.";
											}
											if(empty($POST['age']))
											{
												echo "*Age field must be filled";
											}
											if(empty($_POST['email']))
											{
												echo "*Email faild must be filled";
											}
											if(empty($_POST['message']))
											{
												echo "*Message must be written";
											}
									}
							}

						?>

			</section>

			<section class="col-md-4"></section>



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

