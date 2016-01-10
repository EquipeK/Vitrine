<?php $title = 'Crud article'; ?>
<?php ob_start(); ?>
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
	<?php $content = ob_get_clean(); ?>
	<?php require 'template.php'; ?>