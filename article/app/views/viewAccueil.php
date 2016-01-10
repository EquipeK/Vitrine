<?php $title='Liste article' ?>
<?php ob_start(); ?>
<article class="container">
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
</article>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php' ?>