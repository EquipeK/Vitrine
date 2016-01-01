<DOCTYPE html>
	<html>
		<head>
			<?php require('head.php') ?>
		</head>
		<body>
			<header>
				<?php require('nav.php'); ?>
			</header>
		<article class="container">
			<?php
				$user = 'root';
				$mdp = 'root';
				$host = "localhost";
				$port = 3306;
				$db = 'rubis_projet';
				$dsn = 'mysql:host='. $host .';dbname='. $db.'';
				try{
					$bdd = new PDO('mysql:host=localhost;dbname=rubis_projet;charset=utf8', 'root', 'root');
					$article = $bdd->query("SELECT * FROM article");

				?>
				<div class="row">
					<?php foreach ($article as $text) : ?>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="article">
								<h5 class="titre-article text-center"><?= $text['libelle_article']; ?></h5>
								
								<img class="img-article center-block" src="<?= $text['img_article'] ?>">
								<p class="text-center bold">
									<?= $text['prix_article']?>
									<span>€</span>
								</p>

							</div>
						</div>
					<?php endforeach; ?>
				</div>	

			<?php 		
				}
				catch(Exception $e){
					echo $e->getMessage();
				}
			?>
		</article>

		</body>
	</html>
