<?php
  require '../models/model.php';
try{
	  $articles = getArticles();
  	require 'viewArticleList.php';
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }