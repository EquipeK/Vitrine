<?php
	require('head.php'); 
	require("nav.php");
	require '../models/model.php';
  $article = getArticle();
  require 'viewArticleCrud.php';
	?>