<?php 
  require '../models/model.php';
  try{
	  $articles = getArticles();
	  require 'viewAccueil.php';
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }