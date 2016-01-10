<?php
  require '../models/model.php';
  $article = getArticle();
try{
	  $article = getArticle();
  	require 'viewArticleList.php';
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }