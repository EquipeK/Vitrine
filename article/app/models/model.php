<?php 
  function getConnectionBdd(){
    $user = 'root';
    $mdp = 'root';
    $host = "localhost";
    $port = 3306;
    $db = 'rubis_projet';
    $dsn = 'mysql:host='. $host .';dbname='. $db.';charset=utf8';
    $bdd = new PDO($dsn, $user, $mdp, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $bdd;
  }
  function getArticle(){
    try{
      $bdd = getConnectionBdd();
      $article = $bdd->query("SELECT * FROM article");
    }
    catch(Exception $e){
      echo $e->getMessage();
    }
    return $article;
  }
?>
