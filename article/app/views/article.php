<?php
	require '../models/model.php';
  try{
    if(isset($_GET['id'])){
      $id = intval($_GET['id']);
      if($id != 0){
        $article = getArticle($id);
        require 'viewArticle.php';
      }
    }
  }
  catch(Exception $e){
  	$msgErreur = $e->getMessage(); 
  	require 'viewErreur.php';
  }
	?>