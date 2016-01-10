<?php
	require '../models/model.php';
  try{
	  $article = getArticle();
  require 'viewArticleCrud.php';
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }
	?>