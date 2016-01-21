<?php
	require '../models/model.php';
  try{
	  $articles = getArticles();
  require 'viewArticleCrud.php';
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }
	?>