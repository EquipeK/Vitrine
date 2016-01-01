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
		$article = $bdd->query("SELECT * FROM categorie");

	?>
	<div class="container">
		<div class="row">
			<form method="GET" class="form-group" action="article_save.php">
				<label>Titre de l'article : </label>
				<input class="form-control" name="libelle_article" type="text" max="50">
				<label>Description de l'article : </label>
				<input class="form-control" name="desc_article" type="text" max="150">
				<label>Prix :</label>
				<input class="form-control" name="prix" type="number" step="0.01">
				<label>Catégorie :</label>
				<select class="form-control">
					<option>Select</option>
				<?php foreach($article as $text) : ?>
					<option><?= $text['libelle_categ']?></option>
				<?php endforeach ?>
				</select>
			<input type="submit" value="Sauvegarder" class="btn btn-primary pull-right">
			<input type="button" value="Annuler" class="btn btn-danger pull-left">
			</form>
		</div>
	</div>
	<?php 
		}
		catch(Exception $e){
			echo $e->getMessage();
		}

		
	?>