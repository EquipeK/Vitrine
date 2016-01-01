<?php
	require('head.php'); 
	require("nav.php");
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
	<div class="container">
		<div class="row">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Titre de l'article</th>
						<th>Prix</th>
						<th>Catégorie</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($article as $text) : ?>
						<tr>
							<td><?= $text['id_article'] ?></td>
							<td><?= $text['libelle_article'] ?></td>
							<td><?= $text['prix_article'] ?></td>
							<td><?= $text['id_categ'] ?></td>
						</tr>
						<?php endforeach ?>
				</tbody>
			</table>
			<a href="article_crud.php">
				<input type="button" value="Ajouter" class="btn btn-primary pull-right">
			</a>
			<a href="#">
				<input type="button" value="Supprimer" class="btn btn-danger pull-left">
			</a>
		</div>
	</div>
	<?php 
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
	?>

