<?php 
	$jsonsubmit = isset($_POST['jsubmit']);
	if ($jsonsubmit == true) {
		// récupérer toute les données de mon formulaire et le mettre dans un tableau nommé mygoldbook
		$mygoldbook = array();
		
		$mygoldbook['lastname'] = $_POST['jlastname'];
		$mygoldbook['firstname'] = $_POST['jfirstname'];
		$mygoldbook['message'] = $_POST['jmessage'];
		$mygoldbook['date'] = date('d/m/Y à H:i');

		//*Ouvrir le fichier json*/
		$myjs = file_get_contents('goldbook.json');

		/*Converir le fichier json en tableau php*/
		$myjs = json_decode($myjs, true); //true convertit en tableau, sans cela les éléments selectionnés seraient convertit en objet
		/*Ajouter des éléments dans le tableau qui a été créé*/
		$myjs[] = $mygoldbook;
		/*Convertir les éléments obtenu dans le tableau en json pour le remettre dans le fichier*/
		$myjs = json_encode($myjs);
		/*Remettre dans le fichier json*/
		file_put_contents('goldbook.json', $myjs);
		/*Ajouter une direction après l'envois du formulaire*/
		header('location: ./');

	}

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="One site in php created for a 2week project at Becode">
		<meta name="author" content="AnthonySel & Lamri-Mery">
		<meta name="viewport" content="width=device-width">
		<meta name="theme-color" content="#FFFFFF">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Les petits vieux</title>

		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="libraries/bootstrap.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
			<!-- <img src="assets/img/logo.png"> -->
			<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.php">Contact</a>
							</li>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<img alt='chien et chat' src="assets/img/cat_dog.jpg">
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
								<p class=" vcenter">ATTENTION, notre refuge sera fermé exceptionnellement aux visiteurs ce samedi 21 juillet !</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<div>
							<form>
								<input id="mysearch2" type="search" placeholder="search">
								<button>Search</button>
							</form>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<img alt='amis des animaux' src="assets/img/friends_animals.jpg">
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<iframe title='Présentation' src="https://www.youtube.com/embed/8gBz7rZYlW8?rel=0" width="100%" height="250px" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<p> "Les Petits Vieux " est une ASBL qui a pour but d'accueillir des vieux chiens et chats qui n'auraientaucune chance d'être adoptés dans un refuge.</p>
						<p>Notre home tente de redonner à ces laissés-pour-compte, le confort, les soins et l’affection qui leur sont dus.</p>
						<p>Agréé comme refuge pour animaux sous le numéro HK30502406</p>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<p>Il n'est plus possible de faire des paiements en ligne via notre site. En effet, nous nous rendons compte, à l'usage, que cela revient assez cher et, par souci d'économie, nous arrêtons donc ce moyen de paiement. Vous pouvez continuer à faire vos paiements à partir de votre ordinateur sur le compte de l'asbl indiqué ci-dessous.</p>

						<p>Les dons financiers se font sur le compte : BE58 3600 0347 9979 avec l'indication « don » en communication.</p>
						
						<p>Merci pour votre compréhension.</p>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
						<div id="carousel-id" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-id" data-slide-to="0" class=""></li>
								<li data-target="#carousel-id" data-slide-to="1" class=""></li>
								<li data-target="#carousel-id" data-slide-to="2" class=""></li>
								<li data-target="#carousel-id" data-slide-to="3" class=""></li>
								<li data-target="#carousel-id" data-slide-to="4" class=""></li>
								<li data-target="#carousel-id" data-slide-to="5" class=""></li>
								<li data-target="#carousel-id" data-slide-to="6" class=""></li>
								<li data-target="#carousel-id" data-slide-to="7" class="active"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img alt='plusieurs chiens' src="assets/img/dog1.jpeg">
								</div>
								<div class="item">
									<img alt='plusieurs chats' src="assets/img/cats.jpeg">
								</div>
								<div class="item">
									<img alt='un femme et un chien' src="assets/img/womanandcat.jpeg">
								</div>
								<div class="item">
									<img alt='un chat' src="assets/img/cat1.jpeg">
								</div>
								<div class="item">
									<img alt='un homme et plusieurs chiens' src="assets/img/mananddogs.jpeg">
								</div>
								<div class="item">
									<img alt='plusieurs chiens' src="assets/img/dogs.jpeg">
								</div>
								<div class="item">
									<img alt='un chat' src="assets/img/cat.jpeg">
								</div>
								<div class="item">
									<img alt='un chien' src="assets/img/dog.jpeg">
								</div>
							</div>
							<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
							<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
						</div>
					</div>
				</div>
				
				<div id="loop" class="row">
					<?php 
						$mygoldbook = file_get_contents('goldbook.json');
						$mygoldbook = json_decode($mygoldbook, true);

						foreach ($mygoldbook as $key => $value) :
							//print_r($value['lastname']);
					?>
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 goldbook">
						<p class="goldright"><?php echo $mygoldbook[$key]['date']; ?></p>
						<p>"<?php echo $mygoldbook[$key]['message']; ?>"</p>
						<p class="goldright">– <?php echo $mygoldbook[$key]['lastname']; echo " "; echo $mygoldbook[$key]['firstname'];?></p>
					</div>
					<?php endforeach ?>
				</div>
				<nav aria-label="myNavigation">
					<ul class="pagination">
						<li id="previous-page">
							<a class="page-link" href="#" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
								<span class="sr-only">Previous</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<form action="#" method="POST" role="form">
					<legend>Livre d'or</legend>
				
					<div class="form-group">
						<label for="">LastName</label>
						<input type="text" name="jlastname" class="form-control" id="" placeholder="Input field">
					</div>
					<div class="form-group">
						<label for="">FirstName</label>
						<input type="text" name="jfirstname" class="form-control" id="" placeholder="Input field">
					</div>
					<textarea class="form-control" name="jmessage" rows="6" id="comment" placeholder="Please write your subject *"></textarea>
				
					<button type="submit" name="jsubmit" class="btn btn-primary">Submit</button>
				</form>
			</div>

			
		<!-- jQuery & JavaScript -->
		<script src="libraries/jquery.min.js"></script>
		<script src="libraries/bootstrap.min.js"></script>
		<script src="libraries/popper.min.js"></script>
		<script src="assets/js/pagination.js"></script>
	</body>
</html