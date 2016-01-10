<?php 
  require '../models/model.php';
  try{
	  $article = getArticle();
	  require 'viewAccueil.php';
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }