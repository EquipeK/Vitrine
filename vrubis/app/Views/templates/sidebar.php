<ul class="nav nav-sidebar text-center">

<li><a href="<?php if (strpos($_SERVER['PHP_SELF'], 'index')): ?><?php else: ?>index<?php endif;?>">ACCUEIL</a></li>
<?php if (strpos($_SERVER['PHP_SELF'], 'categories/show/') == false):
    	foreach ($sidebarCats as $sidebarCat): 
    		if($sidebarCat->id_category !== '1'): ?>
  				<li><a href="index.php/categories/show/<?= strtolower($sidebarCat->name); ?>"><?php echo $sidebarCat->name; ?></a></li>
		<?php endif; endforeach; else:
		foreach ($sidebarCats as $sidebarCat): 
			if($sidebarCat->id_category !== '1'): ?>?>
  				<li><a href="<?= strtolower($sidebarCat->name); ?>"><?php echo $sidebarCat->name; ?></a></li>
		<?php endif; endforeach; endif;?> 
</ul>
<!-- Balise à prévoir pour l'état active du bouton sélectionné 
<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li> -->  

 

 