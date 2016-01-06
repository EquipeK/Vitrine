<div class="container">
  <div class="row">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Titre de l'article</th>
          <th>Prix</th>
          <th>Catégorie</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($article as $text) : ?>
          <tr>
            <td><?= $text['id_article'] ?></td>
            <td><?= $text['libelle_article'] ?></td>
            <td><?= $text['prix_article'] ?></td>
            <td><?= $text['id_categ'] ?></td>
          </tr>
          <?php endforeach ?>
      </tbody>
    </table>
    <a href="articleCrud.php">
      <input type="button" value="Ajouter" class="btn btn-primary pull-right">
    </a>
    <a href="#">
      <input type="button" value="Supprimer" class="btn btn-danger pull-left">
    </a>
  </div>
</div>

