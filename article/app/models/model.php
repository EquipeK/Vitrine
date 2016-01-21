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
  function getArticles(){
    try{
      $bdd = getConnectionBdd();
      $articles = $bdd->query("SELECT * FROM article");
    }
    catch(Exception $e){
      echo $e->getMessage();
    }
    return $articles;
  }
  
  function getArticle($id){
    $bdd = getConnectionBdd();
    $article = $bdd->prepare('SELECT id_article as id, libelle_article as titre, desc_article as description FROM article WHERE id_article=?');
    $article->execute(array($id));
    if($article->rowCount() >= 1)
      return $article->fetch();
    else 
      throw new Exception("Aucun billet n'existe a ce numéro");
  }
?>
