<?php $title='Article - '.$article['titre'].'' ?>
<?php ob_start(); ?>
<article class="container">
		<div class="row">
			<p><?= $article['description'] ?></?></p>

		</div>	
</article>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php' ?>